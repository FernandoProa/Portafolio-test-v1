<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function technologies(){
        return $this->hasMany(Technology::class);
    }
}
