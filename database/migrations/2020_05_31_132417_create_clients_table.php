<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            //Add a contacts Column

            $table->id()->autoIncrement();
            $table->string('name');//Name of the client
            $table->string('email');//Email of the client
            $table->string('address');//Physical address of the client
            $table->string('Kra_pin');//KRA PIN of the client
            $table->integer('national_ID');//National ID
            $table->string('registration_no');//Vehicle registration
            $table->string('policy_no');//policy number for the vehiclejj
            $table->string('make_of_car');//Make and model of the car
            $table->string('color');//color of the car
            $table->string('cover_type');//Cover taken by the client
            $table->integer('year_of_manufacture');//Manufacture
            $table->string('chasis_no');//chasis of the vehicle
            $table->string('engine_no');//engine number of the caar
            $table->integer('cubic_capacity');// cc of the car
            $table->integer('basic_rate');//in percentage
            $table->integer('excess_protector'); // "
            $table->integer('political_risk');//in percetage
            $table->date('commencement_date');//date when the policy started
            $table->date('expiry_date');//expiry of the policy
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
        Schema::dropIfExists('clients');
    }
}
