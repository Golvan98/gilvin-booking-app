<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Professional;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('appointment_schedule');
            $table->tinytext('appointment_status');
            $table->timestamps();


            $table->foreignIdFor(\App\Models\Professional::class, 'by_professional_id')->constrained('professionals')->nullable(); /* first attempt to foreign id prof relship */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
