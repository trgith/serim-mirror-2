<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'dependency_id',
        'department'
    ];

    public function dependency()
    {
        return $this->belongsTo(Dependency::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
