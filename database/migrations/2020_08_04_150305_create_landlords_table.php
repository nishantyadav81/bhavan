<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->string('mobno');
            $table->string('aadharcard');
            $table->date('dob');
            $table->string('pan');
            $table->string('mobno2');
            $table->longtext('address');
            $table->longtext('remark');
            $table->string('accno');
            $table->string('ifsc');
            $table->string('accholdername');
            $table->string('pic');

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
        Schema::dropIfExists('landlords');
    }
}
