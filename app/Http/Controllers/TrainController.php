<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function homepage() {
        $trains_list = Train::all();
        @dd($trains_list);
        return view('pages.home-page', compact('trains_list'));
    }
}
