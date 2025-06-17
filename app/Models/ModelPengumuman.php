<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPengumuman extends Model
{
    protected $table = 'pengumumanadmin';
    protected $id = 'id';
    protected $fillable = ['content', 'pj', 'cp', 'link', 'created', 'tgl'];

    public static function getAll()
    {
        return self::all();
    }


}
