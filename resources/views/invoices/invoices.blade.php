@extends('layouts.app')
@section('title-bar','Invoice List')
@push('styles')
    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Project</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td><a href="/invoices/invoice">INV3005</a></td>
                        <td>Regency</td>
                        <td>
                            <span class="badge badge-info">In Order</span>
                        </td>
                        <td>2008/11/28</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>INV1211</td>
                        <td>Mall</td>
                        <td>
                            <span class="badge badge-danger">Canceled</span>
                        </td>
                        <td>2009/10/09</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>INV4111</td>
                        <td>Apartment</td>
                        <td>
                            <span class="badge badge-success">Completed</span>
                        </td>
                        <td>2011/05/03</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endpush
