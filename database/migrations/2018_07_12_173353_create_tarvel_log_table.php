<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarvelLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_logs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('travel_plan_id')->index()->comment('旅行计划id');

            $table->string('name')->default('')->comment('抵达点的名字');
            $table->string('address')->default()->comment('抵达点的地址');

            $table->string('latitude')->default('')->comment('抵达点地理维度');
            $table->string('longitude')->default('')->comment('抵达点地理经度');

            $table->timestamp('created_at')->nullable()->index();
            $table->timestamp('updated_at')->nullable()->index();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_logs');
    }
}
