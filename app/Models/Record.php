<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_generation',
        'url'
    ];

    public function proceedings()
    {
        return $this->hasMany(Proceeding::class);
    }
}
