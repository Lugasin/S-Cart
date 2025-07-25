<?php

namespace App\GP247\Plugins\DeliveryFleet\Controllers\Front;

use App\Http\Controllers\Controller;
use App\GP247\Plugins\DeliveryFleet\Models\DeliveryLog;
use Illuminate\Http\Request;

class DeliveryFleetController extends Controller
{
    public function track(Request $request)
    {
        $orderId = $request->input('order_id');
        $log = DeliveryLog::where('order_id', $orderId)->latest()->first();

        if (!$log) {
            return view('delivery-fleet::Front.track')->with('error', 'No tracking information found for this order.');
        }

        return view('delivery-fleet::Front.track', compact('log'));
    }
}
