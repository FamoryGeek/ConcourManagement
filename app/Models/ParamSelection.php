<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParamSelection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function corp()
    {
        return $this->belongsTo(Corp::class);
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
