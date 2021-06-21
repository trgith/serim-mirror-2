<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceeding extends Model
{
    use HasFactory;


    protected $fillable = [
        'hour',
        'minutes',
        'day',
        'year',
        'office',
        'employee_id',
        'state_id',
        'record_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }

    public function proceedings()
    {
        return $this->hasMany(AnnexedProceeding::class);
    }
}
