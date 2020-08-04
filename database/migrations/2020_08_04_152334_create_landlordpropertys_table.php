<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordpropertysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlordpropertys', function (Blueprint $table) {
            $table->id();

            $table->string('mobno');
            $table->string('category');
            $table->string('flat');
            $table->string('floor');
            $table->string('bunglow');
            $table->double('builtuparea');
            $table->double('carpetarea');
            $table->longtext('description');
            $table->string('location');
            $table->string('watersupply');
            $table->string('electricity');
            $table->string('parking');
            $table->string('status');
            $table->string('rentamout');

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
        Schema::dropIfExists('landlordpropertys');
    }
}
