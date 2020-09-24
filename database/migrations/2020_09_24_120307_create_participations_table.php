<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id');
            $table->foreignId('team_id');
            $table->integer('goals');
            $table->boolean('is_home');
            $table->timestamps();

            $table->foreign('match_id')
                ->references('id')
                ->on('match')
                ->onDelete('cascade');

            $table->foreign('team_id')
                ->references('id')
                ->on('team')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
