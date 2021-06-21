<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnexedProceeding extends Model
{
    use HasFactory;
    protected $fillable = [
        'annexed_id',
        'proceeding_id',
        'date'
    ];

    public function annexed()
    {
        return $this->belongsTo(Annexed::class);
    }

    public function proceeding()
    {
        return $this->belongsTo(Proceeding::class);
    }
}
