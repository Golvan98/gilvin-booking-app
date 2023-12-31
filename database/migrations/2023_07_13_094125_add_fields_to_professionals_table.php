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
        Schema::table('professionals', function (Blueprint $table) {
            $table->string('password');
            $table->rememberToken();
            $table->string('email')->unique();
            $table->string('profilepic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       /* Schema::table('professionals', function (Blueprint $table) {
            //
        }); */

        Schema::dropColumns('professionals', [
            'password', 'email', 'profilepic'
        ]);
    }
};
