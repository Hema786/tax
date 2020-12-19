<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    public static function getpricingData(){
        $value=DB::table('pricingplan')->orderBy('id', 'asc')->get();
        return $value;
    }
}
