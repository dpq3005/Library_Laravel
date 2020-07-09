<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->id('BookID');
            $table->integer('TransactionID');
            $table->integer('AuthorID');
            $table->integer('CategoryID');
            $table->string('Name');
            $table->integer('View');
            $table->string('Status');
            $table->integer('InStock');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::drop('books');
    }
}
