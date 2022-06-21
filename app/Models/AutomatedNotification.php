<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomatedNotification extends Model
{
    use HasFactory;
    protected $table = 'automated_notifications';
    protected $fillable = [
        'time',
        'intensity',
        'exercise_amount',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
    ];
}
