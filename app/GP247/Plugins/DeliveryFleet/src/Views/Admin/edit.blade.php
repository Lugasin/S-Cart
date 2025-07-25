@extends('gp247-core::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Vehicle</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.delivery-fleet.update', $vehicle->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="driver_name">Driver Name</label>
                            <input type="text" name="driver_name" class="form-control" id="driver_name" value="{{ $vehicle->driver_name }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="available" {{ $vehicle->status == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="on-delivery" {{ $vehicle->status == 'on-delivery' ? 'selected' : '' }}>On Delivery</option>
                                <option value="unavailable" {{ $vehicle->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
