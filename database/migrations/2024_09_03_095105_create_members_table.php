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

            //ព័ត៍មានបថម
            $table->string("member_id_number"); //លេខអត្តសញ្ញាណបណ្ណ
            $table->string("member_name");      //នាមត្រកូល និងនាមខ្លួន
            $table->string("member_gender");    //ភេទ
            $table->date("member_birthday");    //ឆ្នាំកំណើត


            //ព័ត៍មានគណបក្ស
            $table->date("member_date_in");     //ថ្ងៃចូលបក្ស
            $table->string("member_role");      //តួនាទីបក្ស


            //ព័ត៍មានបោះឆ្នោត
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
