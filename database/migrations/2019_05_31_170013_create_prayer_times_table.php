<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrayerTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('screen_id');
            $table->date('date');
            $table->time('fajr_begin');
            $table->time('fajr_jamaah');
            $table->time('sunrise');
            $table->time('zuhr_begin');
            $table->time('zuhr_jamaah');
            $table->time('asr_mithl_1_begin');
            $table->time('asr_mithl_2_begin');
            $table->time('asr_jamaah');
            $table->time('maghrib_begin');
            $table->time('maghrib_jamaah');
            $table->time('isha_begin');
            $table->time('isha_jamaah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prayer_times');
    }
}
