<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientForm extends Model
{
    use HasFactory;
    
    protected $table = 'client_forms';

    protected $fillable = [
        'username',
        'email',
        'password',
        'gender',
        'age',
        'height',
        'current_weight',
        'country',
        'calorie_intake',
        'medical_conditions',
        'dietary_restrictions',
        'fitness_goals',
        'meals_per_day',
        'exercise_days',
        'exercise_types',
        'event_preparation',
        'occupation',
        'sitting_hours',
        'comments',
        'water_intake',
        'sleep_hours',
        'motivation',
        'workout_preference',
        'gym_equipment',
        'challenges',
        'disliked_exercises',
        'busy_schedule',
        'expectations',
        'body_focus',
        'additional_info',
    ];
}
