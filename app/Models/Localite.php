<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function centres() {
        return $this->hasMany(Centre::class);
    }
    public function candidats(){
        return $this->hasMany(Candidat::class);
    }
}
