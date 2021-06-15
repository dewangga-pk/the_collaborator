@extends('layouts.app')
@section('title-bar','Project List')
@push('styles')
    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Client</th>
                            <th>Due Date</th>
                            <th>Progress</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Regency</td>
                            <td>Tiger Nixon</td>
                            <td>2008/11/28</td>
                            <td>
                                <div class="progress mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Delete">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                                <a href="/projects/project/overview" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" title="View">
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Apartment</td>
                            <td>Garrett Winters</td>
                            <td>2009/10/09</td>
                            <td>
                                <div class="progress mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Delete">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                                <a href="/projects/project/overview" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" title="View">
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Mall</td>
                            <td>Ashton Cox</td>
                            <td>2011/05/03</td>
                            <td>
                                <div class="progress mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Delete">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                                <a href="/projects/project/overview" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" title="View">
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                            </td>
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
