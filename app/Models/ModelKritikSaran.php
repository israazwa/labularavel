<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelKritikSaran extends Model
{
    protected $table = 'kritiksaran';
    protected $fillable = ['email', 'content', 'updated_at', 'created_at'];
    protected $primaryKey = 'id';
    public function getAll()
    {
        return self::all();
    }
    // Define any additional methods or relationships if needed
}
