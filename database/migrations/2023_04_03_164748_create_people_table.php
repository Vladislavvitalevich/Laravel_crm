<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('pip');
            $table->string('age', 5);
            $table->string('count_family', 2);
            $table->string('age_children', 2);
            $table->boolean('study_children');
            $table->boolean('vpo');
            $table->string('gromada', 255);
            $table->string('w_y_live_now', 50);
            $table->boolean('have_work');
            $table->string('phone', 13);
            $table->boolean('volonter');
            $table->string('w_y_g_do', 1000);
            $table->string('h_m_time', 2);
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
        Schema::dropIfExists('people');
    }
}
