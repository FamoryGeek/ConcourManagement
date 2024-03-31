<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadre extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function candidat(){
        return $this->hasMany(Candidat::class);
    }

    public function corps(){
        return $this->hasMany(Corp::class);
    }
}
