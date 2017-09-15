<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuiPersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('xiaocui.personnel_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

//        Schema::create(config('xiaocui/xiaocui.permissions_table'), function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email');
//            $table->string('password');
//            $table->timestamps();
//        });
//
//        Schema::create(config('xiaocui/xiaocui.modules_table'), function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email');
//            $table->string('password');
//            $table->timestamps();
//        });
//
//        Schema::create(config('xiaocui/xiaocui.groups_table'), function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email');
//            $table->string('password');
//            $table->timestamps();
//        });
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
