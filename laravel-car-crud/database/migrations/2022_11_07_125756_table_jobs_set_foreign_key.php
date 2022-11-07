<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function(Blueprint $table){
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('mechanic_id')->constrained('staffs');
            $table->foreignId('job_status_id')->constrained('job_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function(Blueprint $table){
            $table->dropForeign(['service_id']);
            $table->dropForeign(['car_id']);
            $table->dropForeign(['mechanic_id']);
            $table->dropForeign(['job_status_id']);

            $table->dropColumn(['service_id']);
            $table->dropColumn(['car_id']);
            $table->dropColumn(['mechanic_id']);
            $table->dropColumn(['job_status_id']);
        });
    }
};
