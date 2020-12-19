<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use App\User;
use Gate;
use App\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    /**
     * Display a index page with random 5 questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Read questions from Model method
        $pricingData = Pricing::getpricingData();
        return view('pricing.index')->with("pricingData",$pricingData);;
    }
}
