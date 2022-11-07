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
        Schema::table('cars', function(Blueprint $table){
            $table->foreignId('owner_id')->constrained('cars');
            $table->foreignId('status_id')->constrained('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function(Blueprint $table){
            $table->dropForeign(['owner_id']);
            $table->dropForeign(['status_id']);
        });
    }
};
