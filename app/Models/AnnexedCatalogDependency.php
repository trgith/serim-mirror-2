<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnexedCatalogDependency extends Model
{
    protected $fillable = [
        'annexed_catalog_id',
        'area_id',
        'dependency_id',
        'user_id',
        'status'
    ];

    /*
    *
    * ! TODO Esto obtiene la información complementaria del anexo desde la tabla annexed_catalogs
    *
    */
    public function annexeds()
    {
        return $this->hasMany(AnnexedCatalog::class, 'id', 'annexed_catalog_id');
    }

    /*
    *
    * ! TODO Esto obtiene la información complementaria del area desde la tabla areas
    *
    */
    public function areas()
    {
        return $this->hasMany(Area::class, 'id', 'area_id');
    }

    /*
    *
    * ! TODO Esto obtiene la información complementaria del anexo desde la tabla annexed_catalogs
    *
    */
    public function annexedsData()
    {
        return $this->hasMany(Annexed::class, 'id', 'annexed_catalog_id');
    }
}
