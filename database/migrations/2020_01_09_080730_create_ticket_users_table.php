<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tId')->unique();
            $table->string('fName');
            $table->string('mName');
            $table->string('lName');
            $table->string('address');
            $table->double('phoneNumber',15,0);
            $table->string('email')->unique();
            $table->integer('noOfTickets');
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
        Schema::dropIfExists('ticket_users');
    }
}
