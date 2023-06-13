<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    public function orange()
    {
        return $this->hasMany("App\Models\Orange");
    }
}
