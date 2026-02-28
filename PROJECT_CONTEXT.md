# JFTech — PROJECT_CONTEXT.md

## 1) What this project is
JFTech is a **client and equipment management system** built for managing **customers and their installed devices**, such as:

- **DVRs**
- **Cameras**
- **Routers**

The system focuses on organizing customers, linking equipment to them, and storing the technical/network details needed to operate and maintain those devices.

## 2) Tech stack
- **Backend:** Laravel 11 (PHP 8.x)
- **UI (Admin Panel):** Metronic template (KeenThemes)
- **Frontend approach:** **No JS framework** (no React/Vue/SPA). Use Blade + Metronic components + minimal vanilla JS when needed.
- **Database:** standard Laravel relational DB (e.g., MySQL/PostgreSQL — use existing project config)
- **Testing:** PHPUnit

## 3) Key architectural principles
- Prioritize **maintainability** and **clear separation of concerns**.
- Use **Clean Architecture / DDD-inspired organization** where useful:
  - Domain concepts and business rules should not depend on UI/framework details.
  - Controllers should be thin: validate → call application/service layer → return response/view.
- Prefer **explicit services** / use-cases for business operations rather than putting rules in controllers.
- **Validators are separated** into their own files/classes and invoked by controllers (avoid middleware-only validation for core flows).

## 4) Domain model (core concepts)
### 4.1 Clients
Represents a customer/company/person that owns or operates equipment.

Typical attributes:
- name
- document (e.g., CNPJ/CPF if applicable)
- address/contact info (as defined in the project)

### 4.2 Equipment
Represents a physical device installed for a client.
Equipment types include:
- DVR
- Camera
- Router

Equipment is always **linked to a Client**.

Typical attributes:
- type (DVR/Camera/Router)
- model / brand (if used)
- serial number (if used)
- notes / installation details

### 4.3 Network attributes (IMPORTANT)
Network-related fields (MAC, IP, Mask, Gateway) are handled using a **polymorphic 1:N** approach.

Goal:
- A client can have multiple equipment devices.
- Each equipment can have **multiple network attributes** stored in separate records.
- These attributes can be reused for different equipment categories without duplicating schema.

Recommended conceptual approach:
- Create a `network_identifiers` (or similar) table with:
  - `id`
  - `identifiable_type` (polymorphic)
  - `identifiable_id` (polymorphic)
  - `kind` (mac|ip|mask|gateway)
  - `value`
  - timestamps

This supports:
- Multiple IPs per device
- Multiple MACs per device
- Future network fields without schema expansion

## 5) UI guidelines (Metronic, no JS framework)
- Use **Blade views** and Metronic UI components (cards, tables, forms, modals).
- Keep interactions simple:
  - standard form submits
  - optional minimal vanilla JS for UX improvements (e.g., modal confirm, async search)
- CRUD pages should follow a consistent layout:
  - index/list with filters + pagination
  - create/edit forms
  - show/detail view with related data (client → equipment list → network identifiers)

## 6) Naming and code conventions
- **Code identifiers in English** (folders, files, classes, methods, variables).
- **User-facing messages** (success/error/UI text) can be in **pt-BR**.
- Avoid hyphens in attribute keys; use snake_case (e.g., `document_id`, not `document-id`).
- Prefer:
  - RESTful resource routes (when applicable)
  - explicit service classes for business operations
  - explicit validators per action (create/update/etc.)

## 7) Typical workflows (today’s baseline)
- Create a client
- Edit client information
- Register equipment (DVR/Camera/Router)
- Link equipment to a client
- Add/edit network identifiers for each equipment (MAC/IP/Mask/Gateway)
- List/search clients and see all linked equipment

## 8) Non-functional requirements
- **Auditability:** important changes should be traceable (who changed what and when).
- **Data consistency:** validate unique/critical fields (e.g., avoid duplicated serial/MAC/IP when relevant).
- **Security:** authenticated access to the admin panel; authorization rules if roles exist.
- **Maintainability:** prefer simple, explicit code and avoid “magic” flows.

## 9) What NOT to include here (for now)
- **AI-assisted features** and future enhancements should not be documented here yet.
  They will be added progressively as they are implemented.

---
This document is meant to give Copilot/VSCode a clear picture of the project purpose,
stack, domain model, and conventions so suggestions match the repository patterns.