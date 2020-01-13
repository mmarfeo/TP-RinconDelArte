<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// con este archivo de migracion, ponemos las columnas y datos que queremos en la bd
// para que nos cree esta estrucutura de archivo podemos usa php artisan make:migration create_NombreDeLaTabla_table
// completamos los datos en la funcion up y down y luego corremos el comando php artisan migrate, para que afecte a la base de datos.

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //con el comando php artisan migrate:refresh actualiza la base de datos
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('usuario');
            $table->string('email')->unique();
            $table->string('avatar')->default("foto-vacia.jpg");
            $table->boolean('users_active1')->default("1");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
