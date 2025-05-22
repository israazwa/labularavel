<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsersBuku extends Model
{
    protected $table = 'laporanbuku';
    protected $id = 'id';
    protected $fillable = ['email', 'nama', 'jenis', 'content', 'created', 'confirm', 'foto', 'masalah', 'id'];
    public $timestamps = true;

    public static function getAll()
    {
        return self::All();
    }
}
