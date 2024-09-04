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
            $table->string("member_id_number");                     //លេខអត្តសញ្ញាណបណ្ណ
            $table->string("member_name");                          //នាមត្រកូល និងនាមខ្លួន
            $table->string("member_gender");                        //ភេទ
            $table->date("member_birthday");                        //ឆ្នាំកំណើត
            $table->string("member_place_birth");                   //ទីកន្លែងកំណើត


            //ព័ត៍មានគណបក្ស
            $table->date("member_date_in");                         //ថ្ងៃចូលបក្ស
            $table->string("member_role");                          //តួនាទីបក្ស


            //ព័ត៍មានបោះឆ្នោត
            $table->string("member_province_election");            //រាជធានី ខេត្ត
            $table->string("member_commune_election");             //ឃុំ សង្កាត់
            $table->string("member_office_election");              //ការិយាល័យបោះឆ្នោត
            $table->string("member_id_number_docs");               //ប្រភេទឯកសារ
            $table->string("member_id_number_docs_number");        //អ.ខ​​​/ឯ.អ


            //ព័ត៍មានលំអិត
            $table->string("member_village_id");                   //ភូមិ
            $table->string("member_house_number");                 //ខ្នងផ្ទះ
            $table->string("member_family_number");                //គ្រួសារទី
            $table->string("member_others");                       //ទូរស័ព្ទ/ផ្សេងៗ
            $table->string("member_migration_in");                 // ចំណាកឃុំ
            $table->string("member_migration_out");                // ក្រៅ


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
