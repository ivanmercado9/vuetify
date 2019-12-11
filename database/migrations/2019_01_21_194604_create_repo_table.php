<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_number')->nullable();
            $table->string('branch')->nullable();
            $table->string('plate')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->integer('year')->nullable();
            $table->string('vin')->nullable();
            $table->integer('millage')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('lot')->nullable();
            $table->boolean('repairing')->nullable();
            $table->string('repair_shop')->nullable();
            $table->dateTime('repair_start_date')->nullable();
            $table->dateTime('repair_end__date')->nullable();
            $table->decimal('repair_cost')->nullable();
            $table->decimal('repo_balance')->nullable();
            $table->dateTime('request_premium_date')->nullable();
            $table->dateTime('received_premium_date')->nullable();
            $table->string('classification')->nullable();
            $table->string('reason')->nullable();
            $table->dateTime('repo_date')->nullable();
            $table->string('repo_by')->nullable();
            $table->decimal('unearned_premium')->nullable();
            $table->decimal('kbb_value')->nullable();
            $table->dateTime('kbb_date')->nullable();
            $table->decimal('wholesale_value')->nullable();
            $table->dateTime('wholesale_date')->nullable();
            $table->decimal('books_value')->nullable();
            $table->dateTime('books_date')->nullable();
            $table->decimal('sold_value')->nullable();
            $table->dateTime('sold_date')->nullable();
            $table->string('sold_by')->nullable();
            $table->decimal('sold_incentive')->nullable();
            $table->decimal('loss_value')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('repo');
    }
}
