<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnexedCatalogDependency extends Model
{

    protected $fillable = [
        'annexed_catalog_id',
        'dependency_id',
        'user_id',
        'status'
    ];

}
