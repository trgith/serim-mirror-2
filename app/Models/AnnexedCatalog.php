<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnexedCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'status'
    ];

    public function annexed()
    {
        return $this->hasMany(Annexed::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'annexed_catalog_areas');
    }

    public function dependencies()
    {
        return $this->belongsToMany(Dependency::class, 'annexed_catalog_dependency');
    }
}
