<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        #Estructura tabla Notes
        Schema::create('notes', function (Blueprint $table) {
            
            #Campos tabla Notes
            $table->id();
            $table->string('excerpt');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
