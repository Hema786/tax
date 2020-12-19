<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use App\User;
use Gate;
use App\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Tax::paginate(15);
//        $users = User::all();
        return view('tax.create',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('tax.create',compact('users'));
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
        $salary = new Tax();
        $salary -> 	first_name = $request -> first_name;
        $salary -> middle_name = $request -> middle_name;
		$salary -> last_name = $request -> last_name;
		$salary -> gender = $request -> gender;
		$salary -> dob = $request -> dob;
		$salary -> pan_number = $request -> pan_number;
		$salary -> father_name = $request -> father_name;
		$salary -> marital_status = $request -> marital_status;
		$salary -> flat_number = $request -> flat_number;
		$salary -> premise_name = $request -> premise_name;
		$salary -> street = $request -> street;
		$salary -> pincode = $request -> pincode;
		$salary -> area = $request -> area;
		$salary -> city = $request -> city;
		$salary -> state = $request -> state;
		$salary -> country = $request -> country;
		$salary -> mobile_phone = $request -> mobile_phone;
		$salary -> email_primary = $request -> email_primary;
		$salary -> email_secondary = $request -> email_secondary;
		$salary -> employer_name = $request -> employer_name;
		$salary -> employer_type = $request -> employer_type;
		$salary -> salary_as_section = $request -> salary_as_section;
		$salary -> salary_as_perquisites = $request -> salary_as_perquisites;
		$salary -> salary_as_profit = $request -> salary_as_profit;
		$salary -> hra_exemption = $request -> hra_exemption;
		$salary -> lta_exemption = $request -> lta_exemption;
		$salary -> other_exemption = $request -> other_exemption;
		$salary -> standard_deduction = $request -> standard_deduction;
		$salary -> professional_tax = $request -> professional_tax;
		$salary -> tds_deduction = $request -> tds_deduction;
		$salary -> tan_deduction = $request -> tan_deduction;                 
		$salary -> interest_income_saving = $request -> interest_income_saving;
		$salary -> interest_income_deposite = $request -> interest_income_deposite;
		$salary -> other_income = $request -> other_income;
		$salary -> divident_income_domestic = $request -> divident_income_domestic;
		$salary -> divident_income_mutual = $request -> divident_income_mutual;
		$salary -> interest_income_ppf = $request -> interest_income_ppf;
		$salary -> other_excempt_income = $request -> other_excempt_income;
		$salary -> gross_agriculture = $request -> gross_agriculture;
		$salary -> expenditure_agriculture = $request -> expenditure_agriculture;
		$salary -> unabsorbed_agriculture = $request -> unabsorbed_agriculture;
		$salary -> net_agriculture = $request -> net_agriculture;
		$salary -> house_property_type = $request -> house_property_type;
		$salary -> interest_paid_loan = $request -> interest_paid_loan;
		$salary -> financial_year_date = $request -> financial_year_date;
		$salary -> total_interest_paid = $request -> total_interest_paid;
		
		$salary -> investment_under_section = $request -> investment_under_section;
		$salary -> interest_earned_saving_account = $request -> interest_earned_saving_account;
		$salary -> medical_insurance_premium = $request -> medical_insurance_premium;
		$salary -> health_checkup_fee = $request -> health_checkup_fee;
		$salary -> interest_on_higher_education = $request -> interest_on_higher_education;
		$salary -> contribution_amount = $request -> contribution_amount;
		$salary -> contribution_to_nps = $request -> contribution_to_nps;
		$salary -> employer_contribution = $request -> employer_contribution;
		
        $salary -> save();
        Toastr::success('Salary successfully added!','Success');
        return redirect()->route('tax');
    }
}
