<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public static function getrandomquestionData(){
        $value=DB::table('faq')->orderBy('id', 'asc')->get()->random(5);
        return $value;
    }
}
