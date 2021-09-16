<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idNumber');
            $table->string('username');
            $table->string('password_hash');
            $table->string('email');
            $table->string('fullName');
            $table->integer('gender'); //1.nam --  2.nữ
            $table->text('imgIdCardFront');
            $table->text('imgIdCardBack');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            $table->string('ward');
            $table->string('district');
            $table->string('city');
            $table->timestamps();
            $table->integer('status')->default(0); //1,đã duyệt | 0,đang chờ duyệt | -1,từ chối
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
