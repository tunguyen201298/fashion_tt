<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone');       
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');     
            $table->string('birth_date');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');        
            $table->dropForeign(['role_id']);     
            $table->dropcolumn('role_id');      
            $table->dropColumn('birth_date');       

        });
    }
}
