<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function commune(){


        $title = "ឃុំ/សង្កាត់";
        return view("settings.location.commune",  ['title' => $title]);

    }
}
