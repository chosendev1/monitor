<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('middle_name',50);
            $table->string('last_name',50);
            $table->string('student_number',20);
            $table->date('date_of_birth');
           // $table->date('gender');
            $table->string('physical_address',50);
            $table->string('contact_person_names',50);
            $table->string('relationship_to_student',20);// eg father, guardian,brother
            $table->string('contact_person_first_phone_number',15);
            $table->string('contact_person_second_phone_number',15);
            $table->string('contact_person_email_address',100);
            $table->date('date_of_registration');
            $table->string('search_term',150);// names, physical address, contact names
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
        Schema::dropIfExists('students');
    }
}
