<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Default1Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('products_active1');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('products_active1')->after("img")->default("1");
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
            $table->dropColumn('products_active1');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('products_active1')->after("img")->default("1");
        });
    }
}
