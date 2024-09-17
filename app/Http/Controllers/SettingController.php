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


        VillageModel::create($data);

        return redirect()->back()->with('success', 'Village created successfully.');
    }

    public function village($id )
    {
        $this->data['title'] = "បញ្ជីភូមិ";
        $this->data['commune_id'] = $id;
        return view('settings.location.village',$this->data);
    }

     // account_pages_profile
     public function account_pages_profile(){
        $this->data['title'] = "អ្នកប្រើប្រាស់ក្នុងប្រព័ន្ធ";
        return view("settings.location.account_pages_profile", $this->data);
    }
}
