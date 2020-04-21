<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commitment');
            $table->string('useremail');
            $table->string('cheerleader');
            $table->string('start');
            $table->string('end');
            $table->string('referee');
            $table->string('stake')->default(0);
            $table->string('donated');
            $table->string('filereport')->nullable(true);
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
        Schema::dropIfExists('commitment');
    }
}
