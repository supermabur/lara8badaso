<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatuanidTableQwah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('satuan_id', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('trtest_id')->unsigned();
			$table->bigInteger('mstsatuan_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('satuan_id', function (Blueprint $table) {
            $table->foreign('trtest_id')->references('id')->on('trtest')->onDelete('cascade')->onUpdate('restrict');
			$table->foreign('mstsatuan_id')->references('id')->on('mstsatuan')->onDelete('cascade')->onUpdate('restrict');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satuan_id');
    }
}
