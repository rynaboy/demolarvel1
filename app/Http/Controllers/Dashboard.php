<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $title = "ទិន្នន័យសង្ខេប";
        return view("dashboard", ['title' => $title]);
    }
}
