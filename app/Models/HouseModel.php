<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseModel extends Model
{
    protected $table = "tblhouse";

    protected $fillable = [
        "id",
        "house_name",
        "family_name",
        "commune_id",
        "village_id",

    ];
    use HasFactory;
}
