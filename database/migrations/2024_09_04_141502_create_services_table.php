<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('startDate');
            $table->string('endDate');
            $table->string('postDate');
            $table->integer('typeOfService');
            $table->string('description');
            $table->unsignedBigInteger('idClient');
            $table->unsignedBigInteger('idUser');
            $table->float('serviceValue');
            $table->boolean('complited');
            $table->text('comment'); //Explicação.. Ex. pq não foi concluído o serviço na data?
            // $table->timestamps();
            $table->foreign('idClient')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
