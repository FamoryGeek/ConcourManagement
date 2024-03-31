<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function localite() {
        return $this->belongsTo(Localite::class);
    }
}
