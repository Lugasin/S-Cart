@extends('gp247-shop::layouts.customer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Track Your Order</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('delivery-fleet.track') }}">
                            <div class="form-group">
                                <label for="order_id">Order ID</label>
                                <input type="text" name="order_id" id="order_id" class="form-control" placeholder="Enter your order ID">
                            </div>
                            <button type="submit" class="btn btn-primary">Track</button>
                        </form>

                        @if (isset($log))
                            <hr>
                            <h4>Tracking Information</h4>
                            <p><strong>Status:</strong> {{ $log->status }}</p>
                            <p><strong>Location:</strong> {{ $log->location }}</p>
                            <p><strong>Last Updated:</strong> {{ $log->created_at->format('Y-m-d H:i:s') }}</p>
                        @elseif (isset($error))
                            <hr>
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
