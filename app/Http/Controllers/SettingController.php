<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function commune(){


        $title = "ឃុំ/សង្កាត់";
        return view("settings.location.commune",  ['title' => $title]);

    }

    public function village_data($commune_code)
{
    // Sample data array
    $datas = [
        ["code" => "09040301", "khmer_name" => "ស្ទឹងវែង", "name" => "Stueng Veaeng", "sub_of" => "90403"],
        ["code" => "09040302", "khmer_name" => "ព្រែកស្វាយ", "name" => "Preaek Svay", "sub_of" => "90403"],
        ["code" => "09040201", "khmer_name" => "ភូមិទី១", "name" => "Phum Ti Muoy", "sub_of" => "90402"],
        ["code" => "09040202", "khmer_name" => "ភូមិទី២", "name" => "Phum Ti Pir", "sub_of" => "90402"],
        ["code" => "09040203", "khmer_name" => "ភូមិទី៣", "name" => "Phum Ti Bei", "sub_of" => "90402"],
        ["code" => "09040204", "khmer_name" => "ភូមិទី៤", "name" => "Phum Ti Buon", "sub_of" => "90402"],
        ["code" => "09040101", "khmer_name" => "ភូមិទី១", "name" => "Phum Ti Muoy", "sub_of" => "90401"],
        ["code" => "09040102", "khmer_name" => "ភូមិទី២", "name" => "Phum Ti Pir", "sub_of" => "90401"],
        ["code" => "09040103", "khmer_name" => "ភូមិទី៣", "name" => "Phum Ti Bei", "sub_of" => "90401"],
        ["code" => "09040104", "khmer_name" => "បឹងឃុនឆាង", "name" => "Boeng Khun Chhang", "sub_of" => "90401"],
        ["code" => "09040105", "khmer_name" => "ស្មាច់មានជ័យ", "name" => "Smach Mean Chey", "sub_of" => "90401"],
    ];
    $filtered_data = [];

    foreach ($datas as $item) {
        if ($item['sub_of'] === $commune_code) {
            $filtered_data[] = $item;
        }
    }
    return $filtered_data;
}
    public function village($id )
    {
        $this->data['title'] = "បញ្ជីភូមិ";
        $this->data['village'] = $this->village_data($id);

        dd($this->data);
        return view('settings.location.village',$this->data);
        
    }

}
