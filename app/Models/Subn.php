<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subn extends \FamilyTree365\LaravelGedcom\Models\Subn
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
