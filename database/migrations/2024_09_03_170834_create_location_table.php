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
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("khmer_type"); // ខេត្ត ស្រុក​ ឃុំ ភូមិ ក្រុម
            $table->string("type");
            $table->string("code");
            $table->string("khmer_name");
            $table->string("name");
            $table->string("sub_of");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
