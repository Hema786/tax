<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Spatie\PdfToText\Pdf;
#use \Smalot\PdfParser\Parser;

class TaxuploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('taxupload.index');
    }
    
    public function upload(Request $request)
    {
        //request()->validate(['form16file'=>'required|mimes:pdf']);
        //if($files=$request->file('form16file')) {
            $files=$request->file('form16file');
            $despath = public_path('/uploads/form16files/');
            $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($despath, $filename);
            @chmod($despath.$filename,0777);
            //$pdftext = Pdf::getText($despath.$filename);
            
            //$pdftext = (new Pdf())->setPdf($despath.$filename)->text();
            
            //$pdftext = Pdf::getText($despath.$filename);
            
            //echo $pdftext;
            
            //die;
            
            
            $parser = new \Smalot\PdfParser\Parser(); 
            $pdf = $parser->parseFile($despath.$filename);
            $text = $pdf->getText(); 
            
            echo $text;

            $details  = $pdf->getDetails();
 
            foreach ($details as $property => $value) {
                if (is_array($value)) {
                    $value = implode(', ', $value);
                }
                echo $property . ' => ' . $value . "\n";
            }
            
            die;
            
        //}
        
        echo "iinnnn";
        echo "<br>";
        $a = $request->file('form16file');
        print_r($a); die;
        
        //echo "<pre>"; print_r($_POST); print_r($_FILE); die;
    }
}
