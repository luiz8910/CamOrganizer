# CLAUDE.md

Guidance for Claude Code when working in this repository.

## Project

**JFTech / CamOrganizer** — a client and equipment management system for an
electronic-security/CCTV business. It organizes **customers** and the **devices**
installed for them (DVRs, cameras, routers), storing technical and network
details (MAC/IP/mask/gateway, access users, WiFi credentials) needed to operate
and maintain that equipment.

See `PROJECT_CONTEXT.md` for the original product/domain brief.

## Tech stack

- **Backend:** Laravel 9 (PHP `^8.0.2`). Note: `PROJECT_CONTEXT.md` says
  "Laravel 11", but `composer.json` pins `laravel/framework:^9.0` — trust the
  composer constraint.
- **Frontend:** Blade + Metronic (KeenThemes) admin template. **No JS framework**
  (no React/Vue/SPA) — use Blade, Metronic components, and minimal vanilla JS.
- **Assets:** Laravel Mix (`webpack.mix.js`) + Tailwind CSS + Sass.
- **Database:** MySQL 8.
- **Auth:** session-based (custom `Auth/LoginController`), Sanctum available.
- **Other:** Telescope (debug), AWS S3 via Flysystem (uploads), OpenAI (AI command bar).
- **Testing:** PHPUnit.
- **i18n:** code/identifiers in English; user-facing messages in **pt-BR**
  (`lang/pt_BR.json`).

## Running the project (Docker)

Everything runs through Docker; use the `Makefile` targets:

```bash
make composer-install   # install PHP deps inside the php container
make build              # docker compose build
make up                 # start containers (php on :8000, mysql on :3306)
make down               # stop containers
make bash               # shell into the php_xamps container
make db-migrate         # php artisan migrate
make db-seed            # php artisan db:seed
make test               # php artisan test
make cache-clear        # clear cache/config/route/view caches
make routes-list        # php artisan route:list
```

Inside the container you can run normal `php artisan` / `composer` commands.
Copy `.env.example` to `.env` and set `OPENAI_API_KEY` to use the AI features.

## Architecture & conventions

Layered, Clean-Architecture-inspired. **Keep controllers thin**:
validate → call service → return view/JSON.

- **Controllers** (`app/Http/Controllers/`) — thin; delegate to services.
  Extend `AppBaseController` for shared response helpers.
- **Services** (`app/Services/`) — business operations / use-cases
  (`CustomerService`, `EquipmentService`, and `Services/Ai/*`).
- **Repositories** (`app/Repositories/`) — data access; extend `BaseRepository`.
  One repository per aggregate (Customer, Equipment, Device, AccessEquip,
  MultipleFields).
- **Validators** (`app/Validators/`) — explicit validation classes per entity
  (`CustomerValidator`, `EquipmentValidator`), invoked from controllers/services.
  Some form validation also lives in `app/Http/Request/`.
- **Models** (`app/Models/`) — Eloquent. `Customer` and `Equipment` use
  `SoftDeletes`. Equipment-related satellites: `Wifi`, `Device`, `AccessEquip`,
  `MultipleFieldsEquip`.
- **Traits** (`app/Traits/`) — `UploadImage`, `Environment`, `GetDeviceNamesTrait`.
- **Enums** (`app/Enums/`) — e.g. `EquipmentEnum`. Device types: `1=DVR`,
  `2=Câmera`, `3=Roteador`.

### Naming
- Code identifiers (folders, files, classes, methods, variables) in **English**.
- DB columns / attribute keys in **snake_case** (`zip_code`, not `zip-code`).
- User-facing text (flash messages, UI) in **pt-BR**.
- Prefer RESTful resource routes, explicit service classes, and explicit
  validators per action.

## Domain model

- **Customer** — company/person owning equipment. Identified by `id`, `cnpj`, or
  `external_id`. Fields: `company_name`, `phone`, `email`, `cnpj`, `address`,
  `number`, `city`, `state`, `zip_code`, `logo`.
- **Equipment** (`equipments` table) — a physical device linked to a Customer
  (`customer_id`) and a Device type (`device_id`). Holds brand/model/serial,
  network details, access credentials, storage, WiFi, etc.
- **Device** — equipment type catalog (`name`, `icon`).
- **AccessEquip / Wifi / MultipleFieldsEquip** — satellite data per equipment
  (access users, WiFi creds, repeatable network fields).

## AI Command Bar (OpenAI)

Natural-language admin assistant. Two-phase flow, both routes under `auth`:

1. `POST /ai/plan` → `AiController@plan` → `Services/Ai/AiPlanner` calls OpenAI
   (`OpenAiClient`) with a **structured-output JSON schema** and returns a plan.
2. `POST /ai/execute` → `AiController@execute` → `Services/Ai/CommandExecutor`
   runs the plan's commands.

- **`Services/Ai/ActionSchema`** is the security boundary: a **whitelist** of
  allowed actions (`customer.create/update/delete/show/list`,
  `equipment.create/update/delete/show/list`) and their permitted fields. It
  filters args, validates required fields, and generates the OpenAI JSON schema +
  system-prompt field descriptions. **When adding AI-supported actions/fields,
  update `ActionSchema`** — anything not whitelisted is dropped.
- Every plan/execute call is audit-logged to `ai_command_logs` (`AiCommandLog`).
- Config in `config/openai.php` (`OPENAI_API_KEY`, `OPENAI_MODEL` default `gpt-4o`,
  `OPENAI_BASE_URL`, `OPENAI_TIMEOUT`).

## Routes

`routes/web.php` holds all app routes. Guest auth routes (login, forgot/reset
password via email code), then `auth`-protected groups: `customers` (CRUD +
`verify-cnpj` / `verify-external-id`), `equipments` (CRUD + remove user access),
and the `ai` command-bar endpoints.

## Workflow: "Inicie uma nova task"

When the user says **"Inicie uma nova task"** (or anything of that kind —
"Inicie uma nota task", "Start a new task", etc.), before doing any work:

1. `git checkout main` (the principal branch).
2. `git pull` to update it.
3. Create and checkout a **new branch** named after the subject/fix being
   handled (e.g. `fix/...`, `feat/...`).

Only then start working on the task described.

## Workflow: "Finalize a task"

When the user says **"Finalize a task"** (or "Finalize a tarefa"), run the full
ship sequence:

1. `git add` the changes.
2. `git commit` (end the message with the `Co-Authored-By: Claude` trailer).
3. `git push` the current branch.
4. Open a **PR targeting the main branch** (`main`) with `gh`.

If currently on `main`, create a feature branch first before committing.
