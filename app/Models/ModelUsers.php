<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    protected $table = 'users';
    protected $id = 'id';
    protected $fillable = ['email', 'name', 'password', 'id', 'created_at', 'updated_at'];

    public static function getAll()
    {
        return self::All();
    }
}
