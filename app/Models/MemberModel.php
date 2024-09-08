<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table = "tblmember";

    protected $fillable = [
        // ព័ត៍មានបថម
        'member_id_number',
        'member_name',
        'member_gender',
        'member_birthday',
        'member_place_birth',

        // ព័ត៍មានគណបក្ស
        'member_date_in',
        'member_role',

        // ព័ត៍មានបោះឆ្នោត
        'member_province_election',
        'member_commune_election',
        'member_office_election',
        'member_id_number_docs',
        'member_id_number_docs_number',

        // ព័ត៍មានលំអិត
        'commune_select',
        'village_select',
        'member_house_number',
        'member_family_number',
        'member_others',
        'member_migration_in',
        'member_migration_out',
        'house_id' ,
        'house_name',
        'family_name'
    ];

    public $timestamps = true;
    use HasFactory;
}
