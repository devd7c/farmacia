<?php
/**
 * File name: 2019_08_29_213821_create_markets_table.php
 * Last modified: 2020.05.03 at 10:56:45
 * Author: D7C
 * Copyright (c) 2020
 *
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 127);
            $table->text('description')->nullable()->default('');
            $table->string('address', 255)->nullable();
            $table->string('latitude', 24);
            $table->string('longitude', 24);
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->text('information')->nullable();
            $table->double('admin_commission', 8, 2)->nullable()->default(0);
            $table->double('delivery_fee', 8, 2)->nullable()->default(0);
            $table->double('delivery_range', 8, 2)->nullable()->default(0);//added
            $table->double('default_tax', 8, 2)->nullable()->default(0); // //added
            $table->boolean('closed')->nullable()->default(0); // //added
            $table->boolean('available_for_delivery')->nullable()->default(1); //added
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
        Schema::drop('markets');
    }
}
