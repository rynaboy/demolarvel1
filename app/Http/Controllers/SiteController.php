<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getLocation()
    {
        $commune = DB::table('tbllocation')->where('type', 'commune')->get();
        $village = DB::table('tbllocation')->where('type', 'village')->get();

        $commune_data = [];

        foreach ($commune as $c) {
            $commune_data[$c->code] = [
                "name"     => $c->khmer_name,
                "code"     => $c->code,
                "villages" => []
            ];

            foreach ($village as $v) {
                if ($v->sub_of == $c->code) {
                    $commune_data[$c->code]['villages'][] = [
                        "name" => $v->khmer_name,
                        "code" => $v->code,
                    ];
                }
            }
        }

        $data = [
            "commune" => array_values($commune_data)
        ];

        return $data;

    }
    public function checkHouse($commune, $village, $house_name, $family_name)
    {
        $record = DB::table('tblhouse')
            ->where('commune_id', $commune)
            ->where('village_id', $village)
            ->where('house_name', $house_name)
            ->where('family_name', $family_name)
            ->first();

        if ($record) {
            return [
                'exists' => true,
                'id' => $record->id
            ];
        } else {
            return [
                'exists' => false,
                'id' => null
            ];
        }
    }


}
