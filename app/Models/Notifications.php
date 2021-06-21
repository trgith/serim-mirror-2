<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'icon',
        'is_send',
        'noti_time',
        'remember_notification'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function typeNotifications()
    {
        return $this->hasMany(TypeNotification::class);
    }
}
