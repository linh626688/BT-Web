<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLopMonHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop_mon_hocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('file');
            $table->integer('id_subject')->unsigned();
            $table->integer('id_season')->unsigned();
            $table->integer('id_year')->unsigned();

            $table->timestamps();

            $table->foreign('id_subject')
                ->references('id')->on('mon_hocs')
                ->onDelete('cascade');
            $table->foreign('id_season')
                ->references('id')->on('hoc_kis')
                ->onDelete('cascade');
            $table->foreign('id_year')
                ->references('id')->on('nam_hocs')
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
        Schema::drop('lop_mon_hocs');
    }
}
