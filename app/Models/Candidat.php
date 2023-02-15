<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'email', 'age', 'niveau_etude', 'sexe'];
    public static $rules = array(
        'nom' => 'required|min:2',
        'prenom' => 'required|min:3',
        'email' => 'required|min:10',
        'age' => 'required|min:1'
    );

    public function formations() {
        return $this->belongsToMany(Formation::class);
    }
}
