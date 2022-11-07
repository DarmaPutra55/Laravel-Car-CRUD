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
            $table->unique(['mechanic_id', 'service_id'], 'mechanic_service_unique_index');
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
            $table->dropForeign(['mechanic_id']);
            $table->dropForeign(['service_id']);

            $table->dropUnique('mechanic_service_unique_index');

            $table->dropColumn(['mechanic_id']);
            $table->dropColumn(['service_id']);
        });

        Schema::table('jobs', function(Blueprint $table){
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('mechanic_id')->constrained('staffs');
        });
    }
};
