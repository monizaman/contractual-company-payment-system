<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StuffDuty extends Model
{
    protected $table="stuff_duty";
    protected $fillable = ['contract_id', 'duty_date', 'approximate_date','approved_by_client','paid'];
}
