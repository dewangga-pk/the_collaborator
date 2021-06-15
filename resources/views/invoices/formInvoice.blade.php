@extends('layouts.app')
@section('title-bar','Invoice List')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">Invoices</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="project">Project</label>
                    <select id="project" class="form-control">
                        <option selected>Choose...</option>
                        <option>Apartment</option>
                        <option>Mall</option>
                        <option>Regency</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="payment-method">Payment Method</label>
                    <input type="text" class="form-control" id="payment-method" placeholder="Cash">
                </div>
                <div class="form-group">
                    <label for="receiver-name">Order To</label>
                    <input type="text" class="form-control" id="receiver-name" placeholder="Toko Bangunan">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="receiver-city">City</label>
                        <input type="text" class="form-control" id="receiver-city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="receiver-district">Districts</label>
                        <input type="text" class="form-control" id="receiver-district" placeholder="Sumbersari">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="receivier-zip">Zip</label>
                        <input type="text" class="form-control" id="receivier-zip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="receiver-detailAdd">Detail Address</label>
                    <input type="text" class="form-control" id="receiver-detailAdd" placeholder="Jl.Bhayangkara 68">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Items</p>
                    </div>
                    <div class="col-6">
                        <p>Detail/Qty</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table" id="dynamic">
                            <tr>
                                <td class="col-md-6"><input type="text" placeholder="Items name" name="items[]" class="form-control"></td>
                                <td class="col-md-5"><input type="text" placeholder="Detail/Qty" name="qty[]" class="form-control"></td>
                                <td><button type="button" id="tambah" class="btn btn-success"><i class="fa fa-fw fa-plus-circle"></i></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="form-group mt-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Are you sure?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){

            var no =1;
            $('#tambah').click(function(){
                no++;
                $('#dynamic').append('<tr id="row'+no+'"><td class="col-md-6"><input type="text" placeholder="Items name" name="items[]" class="form-control"></td><td class="col-md-5"><input type="text" placeholder="Detail/Qty" name="qty[]" class="form-control"></td><td><button type="button" id="'+no+'" class="btn btn-danger btn_remove"><i class="fa fa-fw fa-minus-circle"></i></button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
    </script>
@endpush
