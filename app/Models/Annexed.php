<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annexed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'area_id',
        'parent_id',
        'annexed_catalog_id',
        'content',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function areas()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function annexed_catalog_annexes()
    {
        return $this->belongsTo(AnnexedCatalog::class, 'annexed_catalog_id');
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
