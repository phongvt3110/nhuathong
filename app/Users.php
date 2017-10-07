<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function getList(){
        return self::all()->toArray();
    }
}
