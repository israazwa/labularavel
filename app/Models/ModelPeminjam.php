<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjam extends Model
{
    protected $table = 'peminjam';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'created_at', 'updated_at', 'nama', 'kdbuku', 'tglpinjam', 'timeout'];
    public $timestamps = true;

    public static function getAll()
    {
        return self::all();
    }
}
