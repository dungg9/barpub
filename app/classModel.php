<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class classModel extends Model
{
    static function getAll()
    {
        $listClass= DB:table('class')->get();
        return $listClass;
    }
}
