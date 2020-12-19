<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incometax extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }

    public function scopeAdvance($query)
    {
        return $query->where('salary_amount',true);
    }
}
