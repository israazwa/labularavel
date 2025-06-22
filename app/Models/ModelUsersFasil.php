<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsersFasil extends Model
{
    protected $table = 'laporanfasilitas';
    protected $fillable = ['nama', 'email', 'jenis', 'masalah', 'create', 'foto', 'id'];
    protected $id = 'id';

    public function getAll()
    {
        return self::all();
    }
}
