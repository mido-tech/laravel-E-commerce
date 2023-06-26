@extends('dashboard.Layout.app')



@section('main-content')


    <div class="container py-5">

        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>
                            New Orders
                            <a href="{{url('order-history')}}" class="btn btn-warning float-end">
                                Orders History
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="font-size: 16px">
                            <thead>
                                <tr>
                                    <th>Tracking Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>
                                            {{ $item->status == '0' ? 'Pending' : 'Completed' }}
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/view_order/' . $item->id) }}" class="btn btn-primary"
                                                style="font-size: 12px">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

        </div>

    </div>

@endsection

@push('custom-scripts')

@endpush
