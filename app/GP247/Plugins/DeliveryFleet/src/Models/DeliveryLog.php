<?php

namespace App\GP247\Plugins\DeliveryFleet\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryLog extends Model
{
    protected $fillable = ['order_id', 'vehicle_id', 'status', 'location'];
}
