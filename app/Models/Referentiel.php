<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'validated', 'horaire'];
    public static $rules = array(
        'libelle' =>  'required|min:5',
        'validated' => 'required|min:3',
        'horaire' => 'required|min:3'
    );

    public function formations() {
        return $this->hasMany(Formation::class);
    }

    public function type() {
        return $this->hasOne(Type::class);
    }
}
