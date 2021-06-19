<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $table = 'person';
    protected $fillable = [
        'user_id',
        'full_name',
        'email_institutional',
        'telephone',
        'address',
        'colony',
        'exterior_number',
        'interior_number',
        'cp',
        'references',
        'image',
        'status'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
