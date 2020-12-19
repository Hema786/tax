<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use App\User;
use Gate;
use App\Incometax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;

class IncometaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Incometax::paginate(15);
//        $users = User::all();
        return view('incometax.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('incometax.create',compact('users'));
    }
	
	public function result()
    {
        $users = User::all();
        return view('incometax.result',compact('users'));
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
        $salary = new Rent();
        $salary -> 	total_income = $request -> total_income;
        $salary -> hra_recieved = $request -> hra_recieved;
		$salary -> rent_recieved = $request -> rent_recieved;

		
        $salary -> save();
        Toastr::success('incometax successfully added!','Success');
        return view('incometax.result')->with(['reg'=>$salary]);
    }
}
