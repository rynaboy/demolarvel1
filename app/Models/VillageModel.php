<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageModel extends Model
{
    protected $table = "tbllocation";

    protected $fillable = [
        "code",
        "khmer_name",
        "name",
        "type",
        "khmer_type",
        "sub_of"
    ];

    use HasFactory;
}
