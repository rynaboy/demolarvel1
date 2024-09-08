<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommuneModel extends Model
{
    protected $table = "tbllocation";

    protected $fillable = [
        "code",
        "khmer_name",
        "name",
        "type",
        "khmer_type"
    ];


    use HasFactory;
}
