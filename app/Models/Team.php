<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function photo() {
        return $this->belongsTo(Photo::class);
    }
    public function poste() {
        return $this->belongsTo(Poste::class);
    }
}
