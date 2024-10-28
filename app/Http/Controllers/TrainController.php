<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function homepage() {
        $today = today()->toDateString();
        $trains_list = Train::where('data_partenza', $today)->get();
        return view('pages.home-page', compact('trains_list'));
    }
}
