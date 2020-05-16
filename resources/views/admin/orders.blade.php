@extends('layouts.dashboard')

@section('admin_content')
    <div class="col-lg-12 col-md-12 col-sm-12 my-4">
    <table class="table table-hover table-bordered responsive" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Order Number </th>
                            <th> Placed By </th>
                            <th class="text-center"> Total Amount </th>
                            <th class="text-center"> Items Qty </th>

                            <th class="text-center"> Status </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td class="text-center">KES {{ $order->grand_total }}</td>
                                <td class="text-center">{{ $order->item_count }}</td>

                                <td class="text-center">
                                    @if ($order->status == 'completed')
                                        <span class="badge badge-success">Completed</span>
                                    @else
                                        <span class="badge badge-danger">Pending</span>
                                    @endif

                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="/orders/{{$order->order_number}}" class="btn btn-sm btn-primary"><i class="fa fa-edit">View</i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
    </div>

@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush

