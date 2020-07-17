<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string("image1")->after("name")->nullable;
            $table->string("image2")->after("image1")->nullable;
            $table->string("image3")->after("image2")->nullable;
            $table->string("image4")->after("image3")->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn("image1");
            $table->dropColumn("image2");
            $table->dropColumn("image3");
            $table->dropColumn("image4");
        });
    }
}