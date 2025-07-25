@extends('gp247-core::layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Delivery Fleet</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.delivery-fleet.create') }}" class="btn btn-primary">Add Vehicle</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Driver Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->driver_name }}</td>
                                    <td>{{ $vehicle->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.delivery-fleet.edit', $vehicle->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.delivery-fleet.destroy', $vehicle->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
