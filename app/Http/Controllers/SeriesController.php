<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Friends',
            'How i Met Your Mother',
            'House'
        ];

        return view('series\index', compact('series'));

    }
}
?>