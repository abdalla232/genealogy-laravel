<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonSubm extends \FamilyTree365\LaravelGedcom\Models\PersonSubm
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
