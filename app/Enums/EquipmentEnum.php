<?php

namespace App\Enums;

class EquipmentEnum
{
    const DVR = 'DVR';
    const CAMERA = 'camera';
    const ROUTER = 'roteador';
    const FACIAL = 'facial';

    public static function values(): array
    {
        return [
            self::DVR,
            self::CAMERA,
            self::ROUTER,
            self::FACIAL,
        ];
    }

    public static function getValue(int $id): string
    {
        return match ($id){
            1 => self::DVR,
            2 => self::CAMERA,
            3 => self::ROUTER,
            4 => self::FACIAL,
            default => 'Unknown',
        };
    }
}
