<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::table('comments',function(Blueprint $table){
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->refrences('id')->on('users');

        $table->unsignedBigInteger('task_id');
        $table->foreign('task_id')->refrences('id')->on('tasks');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
