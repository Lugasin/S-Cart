<?php

namespace App\Models\GP247\Plugins\DeliveryFleet\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryVehicle extends Model
{
    protected $fillable = ['driver_name', 'current_location', 'status'];
}
