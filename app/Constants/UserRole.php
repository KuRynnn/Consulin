<?php

namespace App\Constants;

use App\Constants\BaseConstant;

class UserRole extends BaseConstant
{
    const DOKTER = 1;
    const PASIEN = 2;


    public static function labels()
    {
        return [
            static::DOKTER => 'Dokter',
            static::PASIEN => 'Pasien'
        ];
    }
}