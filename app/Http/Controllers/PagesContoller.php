<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rant;

class PagesContoller extends Controller
{
    public function main(Request $request) {
        $name = "Celisty";
        return view('main-page', compact('name'));
    }

    public function main_view() {
        $rant = Rant::all();
        return view('main-view',compact('rant'));
    }

    public function rant() {
        $rant = Rant::all();
        return view('paul', compact('rant'));
    }
}
