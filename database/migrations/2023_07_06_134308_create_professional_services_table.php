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
        Schema::create('professional_services', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->timestamps();

            $table->foreignIdFor(\App\Models\Professional::class, 'by_professional_id')->nullable()
             ->references('id')
             ->on('professionals')
             ->onDelete('cascade');; /* first attempt to foreign id prof relship */
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_services');
    }
};
