<?php

namespace App\Http\Controllers;

use App\Models\AiCommandLog;
use App\Services\Ai\AiPlanner;
use App\Services\Ai\CommandExecutor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AiController extends Controller
{
    /**
     * POST /ai/plan
     * Recebe texto do usuário, chama OpenAI e retorna plano estruturado.
     */
    public function plan(Request $request): JsonResponse
    {
        $request->validate([
            'text' => 'required|string|max:2000',
        ]);

        $userText = $request->input('text');

        $planner = new AiPlanner();
        $plan    = $planner->plan($userText);

        // Log de auditoria
        AiCommandLog::create([
            'plan_id'    => $plan['plan_id'],
            'user_id'    => auth()->id(),
            'user_text'  => $userText,
            'plan_json'  => json_encode($plan),
            'phase'      => 'plan',
        ]);

        return response()->json($plan);
    }

    /**
     * POST /ai/execute
     * Recebe o plano (retornado por /ai/plan) e executa os comandos.
     */
    public function execute(Request $request): JsonResponse
    {
        $request->validate([
            'plan'             => 'required|array',
            'plan.plan_id'     => 'required|string',
            'plan.commands'    => 'required|array|min:1',
            'plan.commands.*.action' => 'required|string',
            'plan.commands.*.args'   => 'present|array',
        ]);

        $plan = $request->input('plan');

        $executor = new CommandExecutor();
        $result   = $executor->execute($plan);

        // Log de auditoria
        AiCommandLog::create([
            'plan_id'      => $plan['plan_id'],
            'user_id'      => auth()->id(),
            'user_text'    => '',
            'plan_json'    => json_encode($plan),
            'result_json'  => json_encode($result),
            'phase'        => 'execute',
        ]);

        return response()->json($result);
    }
}
