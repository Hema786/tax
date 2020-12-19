<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use App\User;
use Gate;
use App\Taxplanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;

class TaxplannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Taxplanner::paginate(15);
//        $users = User::all();
        return view('taxplanner.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('taxplanner.create',compact('users'));
    }
	
	public function result()
    {
        $users = User::all();
        return view('taxplanner.result',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
           // 'salary_amount' => 'required',
        ]);
        $salary = new Hra();
        $salary -> 	basic_salary = $request -> basic_salary;
        $salary -> dearness_allowance = $request -> dearness_allowance;
		$salary -> hra_recieved = $request -> hra_recieved;
		$salary -> total_rent_paid = $request -> total_rent_paid;
		$salary -> live_location = $request -> live_location;
		$salary -> email_address = $request -> email_address;
		
        $salary -> save();
        Toastr::success('Taxplanner successfully added!','Success');
        return view('taxplanner.result')->with(['reg'=>$salary]);
    }
}
