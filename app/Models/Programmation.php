<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function centre()
    {
        return $this->belongsTo(Centre::class);
    }
    public function corp()
    {
        return $this->belongsTo(Corp::class);
    }
}
