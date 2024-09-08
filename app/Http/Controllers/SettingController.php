<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\Models\CommuneModel;
use App\Models\VillageModel;
class SettingController extends Controller
{
    public function commune(){

        $commune = CommuneModel::all();
        $title = "ឃុំ/សង្កាត់";

        $this->data['commune'] = $commune;
        $this->data['title']   = $title;
        return view("settings.location.commune", $this->data);

    }
    public function getCommuneAjax (Request $request) {
        $search = $request->input('search');
        $sortColumn = $request->input('sort_column', 'code');
        $sortDirection = $request->input('sort_direction', 'asc');
        $paginate      = $request->input("paginate");
        $paginate      =  $paginate ? $paginate : 10;

        $communes = CommuneModel::when($search, function ($query, $search) {
            return $query->where('code', 'like', "%{$search}%")
                         ->orWhere('khmer_name', 'like', "%{$search}%")
                         ->orWhere('name', 'like', "%{$search}%");
        })
        ->where("type","commune")
        ->orderBy($sortColumn, $sortDirection)
        ->paginate($paginate);

        return response()->json($communes);
    }
    public function getVillageAjax(Request $request){
        $search = $request->input('search');
        $sortColumn = $request->input('sort_column', 'code');
        $sortDirection = $request->input('sort_direction', 'asc');
        $paginate      = $request->input("paginate");
        $paginate      =  $paginate ? $paginate : 10;
        $commune_id    = $request->input("commune_id");

        $villages = CommuneModel::when($search, function ($query, $search) {
            return $query->where('code', 'like', "%{$search}%")
                         ->orWhere('khmer_name', 'like', "%{$search}%")
                         ->orWhere('name', 'like', "%{$search}%");
        })
        ->where('type', "village")
        ->where("sub_of", $commune_id)
        ->orderBy($sortColumn, $sortDirection)
        ->paginate($paginate);

        return response()->json($villages);
    }


    public function commune_store(Request $request){

        // Validate the request
        $validated = $request->validate([
            'code'       => 'required|string|max:255',
            'khmer_name' => 'required|string|max:255',
            'name'       => 'required|string|max:255',
        ]);

        // Prepare the data to be stored
        $data = [
            "code"       => $validated['code'],
            "khmer_name" => $validated['khmer_name'],
            "name"       => $validated['name'],
            "type"       => "commune",
            "khmer_type" => "ឃុំ/សង្កាត់"
        ];

        CommuneModel::create($data);

        return redirect()->back()->with('success', 'Commune created successfully.');
    }



    public function village_store(Request $request){

        // Validate the request
        $validated = $request->validate([
            'code'       => 'required|string|max:255',
            'khmer_name' => 'required|string|max:255',
            'name'       => 'required|string|max:255',
            'commune_id' => 'required||string'
        ]);

        // Prepare the data to be stored
        $data = [
            "code"       => $validated['code'],
            "khmer_name" => $validated['khmer_name'],
            "name"       => $validated['name'],
            "type"       => "village",
            "sub_of"    => $validated['commune_id'],
            "khmer_type" => "ភូមិ"
        ];

        // var_dump($data);die();

        VillageModel::create($data);

        return redirect()->back()->with('success', 'Village created successfully.');
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
        ["code" => "09040105", "khmer_name" => "ស្មាច់មានជ័យ", "name" => "Smach Mean Chey", "sub_of" => "90401"]
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
        $this->data['commune_id'] = $id;
        return view('settings.location.village',$this->data);
    }

}
