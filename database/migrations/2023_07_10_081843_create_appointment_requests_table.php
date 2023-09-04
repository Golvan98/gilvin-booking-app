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
        Schema::create('appointment_requests', function (Blueprint $table) {
            $table->id();
            $table->longText('request');
            $table->dateTime('request_schedule_start');
            $table->dateTime('request_schedule_end');
            $table->tinyText('request_status');
            $table->timestamps();
           
            $table->foreignIdFor(\App\Models\Professional::class, 'by_professional_id')->constrained('professionals')->nullable()->onDelete('cascade');
            $table->foreignIdFor(\App\Models\User::class, 'by_user_id')->constrained('users')->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_requests');
    }
};
