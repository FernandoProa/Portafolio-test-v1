<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category(){
        return $this->hasMany(TechCategory::class);
    }

    public function businesses(){
        return $this->belongsToMany(Business::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
