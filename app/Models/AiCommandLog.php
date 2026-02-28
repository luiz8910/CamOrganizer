<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiCommandLog extends Model
{
    protected $table = 'ai_command_logs';

    protected $fillable = [
        'plan_id',
        'user_id',
        'user_text',
        'plan_json',
        'result_json',
        'phase',
    ];

    protected $casts = [
        'plan_json'   => 'array',
        'result_json' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
