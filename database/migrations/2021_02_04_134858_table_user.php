<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table->increments('id');               //主键自增
        $table->string('name')->unique();       //'name'列唯一
        $table->string('password');             //'password'
        $table->string('email')->unique();      //'email'唯一
        $table->timestamps();                   //自动生成时间戳记录创建更新时间

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
