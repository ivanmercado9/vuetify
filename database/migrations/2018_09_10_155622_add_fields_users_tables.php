<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('user_name')->index()->unique();
          $table->string('employee_id')->nullable();
          $table->string('position')->nullable()->foreign()->references('title')->on('positions');
          $table->string('department')->nullable()->foreign()->references('title')->on('departments');
          $table->string('branch')->nullable()->foreign()->references('title')->on('branches');
          $table->string('group')->nullable()->foreign()->references('name')->on('groups');
          $table->string('language')->nullable();
          $table->string('default_menu')->nullable();
          $table->string('picture')->nullable(); //path to user picture
          $table->string('signature')->nullable(); //path to user signature
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('user_name');
          $table->dropColumn('employee_id');
          $table->dropColumn('position');
          $table->dropColumn('department');
          $table->dropColumn('branch');
          $table->dropColumn('group');
          $table->dropColumn('language');
          $table->dropColumn('default_menu');
          $table->dropColumn('picture');
          $table->dropColumn('signature');
        });
    }
}
