<?php

namespace App\Models;

use App\Models\Cadre;
use App\Models\Diplome;
use App\Models\TypeCandidat;
use App\Models\CompteCandidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidat extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];

     public function compte_candidats() {
        return $this->belongsTo(CompteCandidat::class);
     }

     public function diplome(){
        return $this->belongsTo(Diplome::class);
    }

    public function typeCandidat(){
        return $this->belongsTo(TypeCandidat::class);
    }

    public function cadre(){
        return $this->belongsTo(Cadre::class);
    }

    public function corp(){
        return $this->belongsTo(Corp::class);
    }


    public function note()
    {
        return $this->hasOne(Note::class);
    }
    public function concour()
    {
        return $this->belongsTo(Concour::class);
    }
    public function localite(){
        return $this->belongsTo(Localite::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
