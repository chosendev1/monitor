<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name',50);
            $table->string('school_type',20);
            $table->string('physical_address',100);
            $table->string('school_phone_number',50);
            $table->string('school_email_address',50);
            $table->string('director_name',50);
            $table->string('director_first_phone_number',50);
            $table->string('director_second_phone_number',50);
            $table->string('director_email_address',50);
            $table->string('headmaster_name',50);
            $table->string('headmaster_first_phone_number',50);
            $table->string('headmaster_second_phone_number',50);
            $table->string('headmaster_email_address',50);
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
        Schema::dropIfExists('schools');
    }
}
