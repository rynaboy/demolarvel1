<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ReportController extends Controller
{
     //Start របាយការណ៌ Report
     public function list_member_cpp_1(){
        $this->data['title'] = "បញ្ជីរាយនាមសមាជិកគណបក្សប្រជាជនកម្ពុជា";
        return view("reports.list_member_cpp_1", $this->data);
    }
    public function list_member_cpp_2(){
        $this->data['title'] = "បញ្ជីរាយនាមសមាជិកគណបក្សប្រជាជនកម្ពុជា";
        return view("reports.list_member_cpp_2", $this->data);
    }
    public function list_member_not_in_cpp(){
        $this->data['title'] = "បញ្ជីរាយនាមប្រជាពលរដ្ធពុំទាន់ចូលជាសមាជិកគណបក្សប្រជាជនកម្ពុជា";
        return view("reports.list_member_not_in_cpp", $this->data);
    }
     // End របាយការណ៌ Report
}
