<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'duree', 'description', 'is_started', 'date_debut'];
    public static $rules = array(
        'nom' => 'required|min:2',
        'duree' => 'required|min:1',
        'description' => 'required|min:5',
        'date_debut' => 'required|min:6'
    );

    public function candidats() {
        return $this->belongsToMany(Candidat::class);
    }

    public function referentiel() {
        return $this->hasOne(Referentiel::class);
    }
}
