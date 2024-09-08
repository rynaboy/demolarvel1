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
        // dd($house_data);die();





        // dd($validated);die();


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

       return redirect()->back()->with('success', 'Members created successfully.');




    }


    public function store(Request $request)
    {
        //
    }


    public function show(member $member)
    {
        //
    }


    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
