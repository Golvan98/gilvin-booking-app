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
            $table->tinytext('firstName')->nullable();
            $table->tinytext('lastName')->nullable();
            $table->tinytext('profession')->nullable();
            $table->mediumText('bio');
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
            'bio', 'firstName', 'lastName', 'profession', 
        ]);
    }
};
