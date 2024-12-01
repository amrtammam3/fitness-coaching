<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('client_forms', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->integer('age');
            $table->string('height');
            $table->string('current_weight');
            $table->string('country');
            $table->string('calorie_intake');
            $table->text('medical_conditions');
            $table->text('dietary_restrictions');
            $table->text('fitness_goals');
            $table->integer('meals_per_day');
            $table->integer('exercise_days');
            $table->text('exercise_types');
            $table->string('event_preparation');
            $table->string('occupation');
            $table->integer('sitting_hours');
            $table->text('comments');
            $table->string('water_intake');
            $table->integer('sleep_hours');
            $table->text('motivation');
            $table->string('workout_preference');
            $table->string('gym_equipment');
            $table->text('challenges');
            $table->text('disliked_exercises');
            $table->text('busy_schedule');
            $table->text('expectations');
            $table->text('body_focus');
            $table->text('additional_info');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_forms');
    }
};
