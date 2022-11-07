<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pregled;

class Pacijent extends Model
{
    use HasFactory;

    public function pregledi()
    {
        return $this->hasMany(Pregled::class);
    }
}
