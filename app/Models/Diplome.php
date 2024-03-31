<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function candidats(){
        return $this->hasMany(Candidat::class);
    }
}
