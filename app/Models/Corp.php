<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function specialites(){
        return $this->hasMany(Specialite::class);
    }
    public function cadre(){
        return $this->belongsTo(Cadre::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function concours(){
        return $this->belongsToMany(Concour::class);
    }
    public function programmations()
    {
        return $this->hasMany(Programmation::class);
    }

    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }
}
