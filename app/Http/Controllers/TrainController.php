<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function homepage() {
        $trains_list = Train::all();
        return view('pages.home-page', compact('trains_list'));
    }
}
