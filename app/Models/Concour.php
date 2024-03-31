<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concour extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function corp()
    {
        return $this->belongsTo(Corp::class);
    }
}
