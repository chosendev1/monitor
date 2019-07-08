<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('first_name',50);
            $table->string('middle_name',50);
            $table->string('last_name',50);
            $table->string('teacher_number',20);
            $table->date('date_of_birth');
            $table->string('maritual_status',10);
            $table->string('religion',30);
            $table->string('physical_address',50);
            $table->string('first_phone_number',20)->unique();
            $table->string('second_phone_number',20)->unique();
            $table->string('email_address',100);
            $table->date('subjects_taught');
            $table->date('date_of_registration');
            $table->string('search_term',150);
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
        Schema::dropIfExists('teachers');
    }
}
