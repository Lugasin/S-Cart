<?php

namespace App\GP247\Plugins\DeliveryFleet\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\GP247\Plugins\DeliveryFleet\Models\DeliveryVehicle;
use Illuminate\Http\Request;

class DeliveryFleetController extends Controller
{
    public function index()
    {
        $vehicles = DeliveryVehicle::all();
        return view('delivery-fleet::Admin.index', compact('vehicles'));
    }

    public function create()
    {
        return view('delivery-fleet::Admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'driver_name' => 'required|string|max:255',
        ]);

        DeliveryVehicle::create($request->all());

        return redirect()->route('admin.delivery-fleet.index')
            ->with('success', 'Vehicle created successfully.');
    }

    public function edit(DeliveryVehicle $vehicle)
    {
        return view('delivery-fleet::Admin.edit', compact('vehicle'));
    }

    public function update(Request $request, DeliveryVehicle $vehicle)
    {
        $request->validate([
            'driver_name' => 'required|string|max:255',
        ]);

        $vehicle->update($request->all());

        return redirect()->route('admin.delivery-fleet.index')
            ->with('success', 'Vehicle updated successfully.');
    }

    public function destroy(DeliveryVehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('admin.delivery-fleet.index')
            ->with('success', 'Vehicle deleted successfully.');
    }
}
