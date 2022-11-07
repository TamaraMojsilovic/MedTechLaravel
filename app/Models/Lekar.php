<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pregled;

class Lekar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'specijalizacija',
        'broj_telefona',
    ];

    public function pregledi()
    {
        return $this->hasMany(Pregled::class);
    }
}
