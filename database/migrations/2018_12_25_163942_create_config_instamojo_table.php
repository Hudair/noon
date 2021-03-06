<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigInstamojoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_instamojo', function (Blueprint $table) {
            $table->integer('shop_id')->unsigned()->index();
            $table->text('api_key')->nullable();
            $table->text('auth_token')->nullable();
            $table->boolean('sandbox')->nullable()->default(true);
            $table->timestamps();

            $table->primary('shop_id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_instamojo');
    }
}
