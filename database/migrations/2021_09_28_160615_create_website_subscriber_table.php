<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_subscriber', function (Blueprint $table) {
            $table->unsignedBigInteger('website_id');
            $table->unsignedBigInteger('subscriber_id');

            // foreign keys
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subscriber_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_subscriber');
    }
}
