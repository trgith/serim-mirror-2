<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
