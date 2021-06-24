<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependencyAnnexed extends Model
{
    use HasFactory;

    protected $fillable = [
        'dependency_id',
        'annexed_id',
        'status'
    ];

    protected $casts = [
        'status' => 'string'
    ];

    public function annexed()
    {
        return $this->belongsTo(AnnexedCatalog::class);
    }

    public function dependency()
    {
        return $this->belongsTo(Dependency::class);
    }

}
