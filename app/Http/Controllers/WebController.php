<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "IBT Global Trading";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('index', compact('title', 'description', 'keywords'));
    }
}
