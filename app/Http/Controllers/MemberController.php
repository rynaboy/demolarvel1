<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use App\Models\MemberModel;
use App\Models\HouseModel;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "បញ្ជូលទិន្នន័យសមាជិក";
        return view("member.create", ['title' => $title]);
    }

    public function list(){

        $this->data['title'] = "បញ្ជីសមាជិក";
        return view("member.list", $this->data);
    }
    public function getMembersAjax(Request $request)
    {
        $search = $request->input('search');
        $sortColumn = $request->input('sort_column', 'id');
        $sortDirection = $request->input('sort_direction', 'asc');
        $paginate = $request->input('paginate', 50);

        $validSortColumns = ['id', 'member_id_number', 'member_name'];

        // Validate sort column
        if (!in_array($sortColumn, $validSortColumns)) {
            $sortColumn = 'id';
        }

        // Validate sort direction
        if (!in_array($sortDirection, ['asc', 'desc'])) {
            $sortDirection = 'asc';
        }

        $members = MemberModel::select(
            'id',
            'member_id_number as number',
            'member_name as name',
            'member_gender as gender',
            'member_birthday as birthday',
            'member_place_birth as place_birth',
            'member_date_in as date_in',
            'member_id_number_docs as id_number_docs',
            'member_id_number_docs_number as number_docs_number',
            'member_role', 'member_office_election as office_election',
            'member_others as other',
            'member_id_number as id_number'
        )
        ->when($search, function ($query, $search) {
            return $query->where('member_id_number', 'like', "%{$search}%")
                         ->orWhere('member_name', 'like', "%{$search}%");
        })
        ->orderBy($sortColumn, $sortDirection)
        ->paginate($paginate);

        return response()->json($members);
    }






    public function create()
    {
        $site = new SiteController;
        $location = $site->getLocation();
        $location = $location['commune'];

        $this->data['commune'] = $location;
        $this->data['title'] = "បញ្ជូលទិន្នន័យសមាជិក";
        return view("member.create",  $this->data);
    }

    public function create_new_member(Request $req){

        $validated = $req->validate([
            // ព័ត៍មានបថម
            'member_id_number' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'member_gender' => 'required|in:1,2', // Assuming 1 is Male and 2 is Female
            'member_birthday' => 'required|date',
            'member_place_birth' => 'required|string|max:255',

            // ព័ត៍មានគណបក្ស
            'member_date_in' => 'nullable|date',
            'member_role' => 'nullable|in:1,2,3', // Assuming 1 is Member, 2 is Deputy, 3 is Head

            // ព័ត៍មានបោះឆ្នោត
            'member_province_election' => 'nullable|string|max:255',
            'member_commune_election' => 'nullable|string|max:255',
            'member_office_election' => 'nullable|string|max:255',
            'member_id_number_docs' => 'nullable|in:1,2', // Assuming 1 is Document A and 2 is Document B
            'member_id_number_docs_number' => 'nullable|string|max:255',

            // ព័ត៍មានលំអិត
            'member_commune_id' => 'nullable|string|max:255', // Adjust as necessary
            'member_village_id' => 'nullable|string|max:255', // Adjust as necessary
            'member_house_number' => 'nullable|string|max:255',
            'member_family_number' => 'nullable|integer',
            'member_others' => 'nullable|string|max:255',
            'member_migration_in' => 'nullable|string|max:255',
            'member_migration_out' => 'nullable|boolean', // Checkbox can be true or false
        ]);


        // dd($validated);die();
        $member_data = $validated;
        // dd($validated);die();
        $house_data  = [
            "house_name" => $validated['member_house_number'],
            "family_name"=> $validated['member_family_number'],
            "commune_id" => $validated['member_commune_id'],
            "village_id" => $validated['member_village_id']
        ];

        if($validated['member_house_number'] && $validated['member_family_number']){
            $site = new SiteController();
            $check_house = $site->checkHouse($validated['member_commune_id'], $validated['member_village_id'],$validated['member_house_number'] ,$validated['member_family_number']);
            if($check_house['exists'] == false){
                $house  = new HouseModel($house_data);
                $house->save();
                $member_data['house_id'] = $house->id;
            }else{
                $member_data['house_id'] = $check_house['id'];
            }

            $member_data['house_name'] = $validated['member_house_number'];
            $member_data['family_name']= $validated['member_family_number'];

        }
        $member = new MemberModel($member_data);
        $member->save();

       return redirect("members/list");




    }





}
