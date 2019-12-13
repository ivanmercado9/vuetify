<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllInitialFrontDeskTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('positions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description')->nullable();
          $table->timestamps();
      });
      Schema::create('branches', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description')->nullable();
          $table->text('location')->nullable();
          $table->timestamps();
      });
      Schema::create('departments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description')->nullable();
          $table->timestamps();
      });
      Schema::create('services', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description');
          $table->integer('minutes_to_complete');
          $table->integer('parent_service_id');
          $table->integer('departments_id'); //Allowed departments to view service
          $table->timestamps();
      });
      Schema::create('statuses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description')->nullable();
          $table->timestamps();
      });
      Schema::create('heard_about_us', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->index()->unique();
          $table->text('description')->nullable();
          $table->timestamps();
      });
      Schema::create('referred_log', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('tickets_id');
          $table->dateTime('referred_time');
          $table->string('from_user')->foreign()->references('name')->on('users');
          $table->ipAddress('from_station')->nullable();
          $table->text('from_comments')->nullable();
          $table->string('to_user')->foreign()->references('name')->on('users');
          $table->ipAddress('called_station')->nullable();
          $table->dateTime('called_time')->nullable();
          $table->timestamps();
      });
      Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('turn_number')->nullable();  //Turn number of the day. It resets daily.
            $table->dateTime('registered_time');
            $table->integer('registered_by_user')->foreign()->references('id')->on('users');
            $table->ipAddress('registered_by_station')->nullable();
            $table->text('registered_by_comments')->nullable();
            $table->dateTime('called_time')->nullable();
            $table->integer('called_by_user')->nullable();
            $table->ipAddress('called_by_station')->nullable();
            $table->dateTime('finished_time')->nullable();
            $table->integer('finished_by_user')->nullable();
            $table->text('finished_by_comments')->nullable();
            $table->ipAddress('finished_by_station')->nullable();
            $table->string('client_number')->nullable();
            $table->string('client_name')->nullable();
            $table->smallInteger('heard_about_us_id')->foreign()->references('id')->on('heard_about_us');
            $table->string('heard_about_us_message')->nullable();
            $table->string('branch_id')->nullable();
            $table->integer('referred_to')->nullable();
            $table->integer('last_referred_to_user')->nullable();
            $table->boolean('express')->nullable();
            $table->smallInteger('status_id')->foreign()->references('id')->on('statuses');
            $table->decimal('diff_registered_called_time')->nullable();
            $table->decimal('diff_called_finished_time')->nullable();
            $table->boolean('appointment')->nullable();
            $table->smallInteger('urgency_id')->nullable();
            $table->timestamps();
        });
        Schema::create('attendance_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_id')->foreign()->references('id')->on('tickets');
            $table->unsignedInteger('service_id')->foreign()->references('id')->on('services');
            $table->timestamps();
        });

        Schema::create('users_info', function (Blueprint $table) {
            $table->integer('user_id')->foreign()->references('id')->on('users');
            $table->integer('position_id')->foreign()->references('id')->on('positions');
            $table->integer('department_id')->foreign()->references('id')->on('departments');
            $table->integer('branch_id')->foreign()->references('id')->on('branches');
            $table->string('group')->foreign()->references('name')->on('groups');
            $table->string('language');
            $table->string('default_menu');
            $table->string('picture'); //path to user picture
            $table->string('signature'); //path to user signature
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
        Schema::dropIfExists('positions');
        Schema::dropIfExists('branches');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('services');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('heard_about_us');
        Schema::dropIfExists('referred_log');
        Schema::dropIfExists('attendance');
        Schema::dropIfExists('attendance_services');
        Schema::dropIfExists('users_info');
    }
}
