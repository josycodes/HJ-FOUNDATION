<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->id();
            $table->string('sitename');
            $table->string('sitename1');
            $table->string('sitedomain');
            $table->string('sitefacebook');
            $table->String('siteinstagram');
            $table->string('sitetwitter');
            $table->string('sitelinkedin');
            $table->string('siteaddress');
            $table->string('sitephone');
            $table->string('siteemail');
            $table->string('sitelogo');
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
        Schema::dropIfExists('basics');
    }
}
