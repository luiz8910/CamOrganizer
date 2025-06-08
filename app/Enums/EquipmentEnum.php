<?php

namespace App\Enums;

class EquipmentEnum
{
    const DVR = 'DVR';
    const CAMERA = 'camera';
    const ROUTER = 'roteador';

    public static function values(): array
    {
        return [
            self::DVR,
            self::CAMERA,
            self::ROUTER,
        ];
    }

    public static function getValue(int $id): string
    {
        return match ($id){
            1 => self::DVR,
            2 => self::CAMERA,
            3 => self::ROUTER,
            default => 'Unknown',
        };
    }
}
