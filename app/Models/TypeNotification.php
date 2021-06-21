<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'notification',
        'notification_id'
    ];

    public function notification()
    {
        return $this->belongsTo(Notifications::class);
    }

    public $casts = [
        'notification' => 'string'
    ];
}
