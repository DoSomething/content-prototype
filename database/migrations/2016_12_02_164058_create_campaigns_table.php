<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();

            $table->integer('time_commitment')->nullable();
            $table->boolean('staff_pick')->nullable();

            $table->timestamps();
        });

        Schema::create('campaign_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned();
            $table->string('title')->nullable();;
            $table->string('locale')->index();

            $table->unique(['campaign_id','locale']);
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_translations');
        Schema::dropIfExists('campaigns');
    }
}
