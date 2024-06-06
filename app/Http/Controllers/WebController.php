<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'message' => 'required',
                'captcha' => 'required|captcha',
            ],
            ['captcha.captcha' => 'Invalid captcha code.']
        );
        try {
            Mail::to('info@ibtglobalpreciousmetal.com')->cc('chichearie@gmail.com')->send(new ContactFormSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Contact form submitted successfully!");
    }
}
