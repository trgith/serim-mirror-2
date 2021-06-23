<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_dependency',
        'address',
        'exterior_number',
        'interior_number',
        'telephone',
        'municipality_id'
    ];

    public function municipality()
    {
        return $this->belongsTo(Municipality::class, 'municipality_id');
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function depencies_annexes()
    {
        return $this->hasMany(DependencyAnnexed::class);
    }

    public function annexeds()
    {
        return $this->belongsToMany(AnnexedCatalog::class, 'annexed_catalog_dependencies');
    }
}
