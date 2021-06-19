<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'full_name'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function proceedings()
    {
        return $this->hasMany(Proceeding::class);
    }
}
