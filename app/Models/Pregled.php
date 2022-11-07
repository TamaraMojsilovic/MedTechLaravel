<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lekar;
use App\Models\Pacijent;

class Pregled extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum',
        'lekar_id',
        'pacijent_id'
    ];

    public function lekar()
    {
        return $this->belongsTo(Lekar::class);
    }

    public function pacijent()
    {
        return $this->belongsTo(Pacijent::class);
    }
}
