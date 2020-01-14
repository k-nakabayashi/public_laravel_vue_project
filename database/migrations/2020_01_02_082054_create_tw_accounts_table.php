<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwAccountsTable extends Migration
{

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->nullable()->unique();;
            $table->bigInteger('user_id')->nullable()->unique();;
            $table->string('screen_name')->nullable();
            $table->text('oauth_token')->nullable();;
            $table->text('oauth_token_secret')->nullable();;
            $table->timestamps();
            $table->boolean('delete_flag')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_accounts');
    }
}
