<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annexed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function depencies_annexes()
    {
        return $this->hasMany(DependencyAnnexed::class);
    }

    public function annexes_procedings()
    {
        return $this->hasMany(AnnexedProceeding::class);
    }

}
