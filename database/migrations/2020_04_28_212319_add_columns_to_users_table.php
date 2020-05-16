<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

                $table->char('phone', 20);
                $table->char('location', 20);
                $table->char('street', 20);
                $table->char('house', 20);


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
            $table->char('phone', 20);
            $table->char('location', 20);
            $table->char('street', 20);
            $table->char('house', 20);
        });
    }
}
