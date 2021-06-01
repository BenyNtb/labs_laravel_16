<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
