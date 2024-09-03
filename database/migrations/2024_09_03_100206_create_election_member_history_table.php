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
        Schema::create('election_member_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // ការិ.
            $table->string("emh_office_number");
            // លរ.
            $table->string("emh_no");
            // អត្ត.
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('election_member_history');
    }
};
