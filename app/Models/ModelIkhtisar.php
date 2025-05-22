<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelIkhtisar extends Model
{
    protected $table = 'ikhtisar';
    protected $primaryKey = 'id';
    protected $fillable = ['content', 'created'];
    public $timestamps = true;

    public static function getAll()
    {
        return self::all();
    }
}
