<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Proceedings;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'region',
        'status'
    ];

    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }

    public function proceedings()
    {
        return $this->hasMany(Proceeding::class);
    }
}
