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
        return view('web.index', compact('title', 'description', 'keywords'));
    }

    function about()
    {
        $title = "IBT Global Trading";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('web.about', compact('title', 'description', 'keywords'));
    }

    function service()
    {
        $title = "IBT Global Trading";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('web.service', compact('title', 'description', 'keywords'));
    }

    function contact()
    {
        $title = "IBT Global Trading";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('web.contact', compact('title', 'description', 'keywords'));
    }

    function priceChart()
    {
        $title = "IBT Global Trading - Precious Metals Prices";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('web.price-chart', compact('title', 'description', 'keywords'));
    }

    function legal()
    {
        $title = "IBT Global Trading";
        $description = "IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals";
        $keywords = "Trading, Import, and Export of Precious Metals";
        return view('web.legal-notice', compact('title', 'description', 'keywords'));
    }
}
