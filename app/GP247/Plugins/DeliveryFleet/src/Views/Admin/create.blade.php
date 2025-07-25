@extends('gp247-core::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Vehicle</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.delivery-fleet.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="driver_name">Driver Name</label>
                            <input type="text" name="driver_name" class="form-control" id="driver_name" placeholder="Enter driver name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
