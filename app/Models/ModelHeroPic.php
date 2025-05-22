<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHeroPic extends Model
{
    protected $table = 'homehero';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'content', 'created'];

    public static function getAll()
    {
        return self::all();
    }
}