@extends('layouts.dashboard')

@section('admin_content')
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="row py-4">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header"><i class="fa fa-globe"></i> {{ $order->order_number }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Date: {{ $order->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong>{{ $order->user->name }}</strong><br>Email: {{ $order->user->email }}</address>
                        </div>
                        <div class="col-4">Ship To
                            <address><strong>{{ $order->name }}</strong><br>{{ $order->location }}<br>{{ $order->address }}, {{ $order->house }} <br>{{ $order->phone}}<br></address>
                        </div>
                        <div class="col-4">
                            <b>Order ID:</b> {{ $order->order_number }}<br>
                            <b>Amount:</b> KES {{ round($order->grand_total, 2) }}<br>

                            <b>Order Status:</b> {{ $order->status }}<br>
                            @if ($order->status == 'pending')
                                <form method="post" action="/orders/{{$order->order_number}}/completed">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-secondary">Complete Order</button>
                                </form>

                            @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->product->name }}</td>

                                            <td>{{ $item->quantity }}</td>
                                            <td>KES {{ round($item->price, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
            </div>
@endsection
