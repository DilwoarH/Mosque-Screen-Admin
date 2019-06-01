<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('screen_id');
            $table->string('logo_url')->nullable();
            $table->string('primary_colour')->default('#0f715d');
            $table->string('secondary_colour')->default('#0c5a4b');
            $table->string('primary_text_colour')->default('#fff');
            $table->string('secondary_text_colour')->default('#e4e4e4');
            $table->string('prayer_time_highlight_colour')->default('#ff3995');
            $table->string('clock_background_colour')->default('#fff');
            $table->string('time_format')->default('h:mm A');
            $table->string('slider_mode')->default('slider');
            $table->integer('slider_timeout')->default(8000);
            $table->text('text_donation_message')->nullable();
            $table->text('online_donation_message')->nullable();
            $table->text('mobile_silence_message')->nullable();
            $table->text('single_view_message')->nullable();
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
        Schema::dropIfExists('app_configs');
    }
}
