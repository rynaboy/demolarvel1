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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("family_id");
            $table->integer("house_id");
            $table->string("member_name");
            $table->string("member_gender");
            $table->date("member_birthday");

            $table->date("member_date_in");
            $table->string("member_role");
            $table->string("member_id_number");

            $table->string("member_others");
            $table->string("member_profile_img");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
