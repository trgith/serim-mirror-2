<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{

    protected $fillable = [
        'status'
    ];


    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function dependencies()
    {
        return $this->hasMany(Dependency::class);
    }
}
