<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function annexes()
    {
        return $this->belongsToMany(AnnexedCatalog::class, 'annexed_catalog_areas');
    }
}
