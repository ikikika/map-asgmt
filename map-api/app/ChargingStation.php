<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChargingStation extends Model
{
    protected $fillable = ['name', 'longitude', 'latitude'];
}
