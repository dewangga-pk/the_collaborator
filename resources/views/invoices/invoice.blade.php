@extends('layouts.app')
@section('title-bar','Invoice')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/invoices.css')}}">
@endpush
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-lg-8 mb-4 offset-lg-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="invoice-title">--}}
{{--                                    <h2>Invoice</h2><h3 class="float-md-right">Order # 12345</h3>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <address>--}}
{{--                                            <strong>Billed To:</strong><br>--}}
{{--                                            John Smith<br>--}}
{{--                                            1234 Main<br>--}}
{{--                                            Apt. 4B<br>--}}
{{--                                            Springfield, ST 54321--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 text-md-right">--}}
{{--                                        <address>--}}
{{--                                            <strong>Shipped To:</strong><br>--}}
{{--                                            Jane Smith<br>--}}
{{--                                            1234 Main<br>--}}
{{--                                            Apt. 4B<br>--}}
{{--                                            Springfield, ST 54321--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <address>--}}
{{--                                            <strong>Payment Method:</strong><br>--}}
{{--                                            Visa ending **** 4242<br>--}}
{{--                                            jsmith@email.com--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 text-md-right">--}}
{{--                                        <address>--}}
{{--                                            <strong>Order Date:</strong><br>--}}
{{--                                            March 7, 2014<br><br>--}}
{{--                                        </address>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <h3 class="panel-title"><strong>Order summary</strong></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-body">--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-condensed">--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <td><strong>Item</strong></td>--}}
{{--                                                    <td class="text-center"><strong>Price</strong></td>--}}
{{--                                                    <td class="text-center"><strong>Quantity</strong></td>--}}
{{--                                                    <td class="text-right"><strong>Totals</strong></td>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->--}}
{{--                                                <tr>--}}
{{--                                                    <td>BS-200</td>--}}
{{--                                                    <td class="text-center">$10.99</td>--}}
{{--                                                    <td class="text-center">1</td>--}}
{{--                                                    <td class="text-right">$10.99</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>BS-400</td>--}}
{{--                                                    <td class="text-center">$20.00</td>--}}
{{--                                                    <td class="text-center">3</td>--}}
{{--                                                    <td class="text-right">$60.00</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>BS-1000</td>--}}
{{--                                                    <td class="text-center">$600.00</td>--}}
{{--                                                    <td class="text-center">1</td>--}}
{{--                                                    <td class="text-right">$600.00</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="thick-line"></td>--}}
{{--                                                    <td class="thick-line"></td>--}}
{{--                                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>--}}
{{--                                                    <td class="thick-line text-right">$670.99</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="no-line"></td>--}}
{{--                                                    <td class="no-line"></td>--}}
{{--                                                    <td class="no-line text-center"><strong>Shipping</strong></td>--}}
{{--                                                    <td class="no-line text-right">$15</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="no-line"></td>--}}
{{--                                                    <td class="no-line"></td>--}}
{{--                                                    <td class="no-line text-center"><strong>Total</strong></td>--}}
{{--                                                    <td class="no-line text-right">$685.99</td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            INVOICE
                        </td>

                        <td>
                            ORDER #: 12345<br>
                            27/06/2021
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Sparksuite, Inc.<br>
                            12345 Sunny Road<br>
                            Sunnyville, CA 12345
                        </td>

                        <td>
                            Acme Corp.<br>
                            John Doe<br>
                            john@example.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
                Check #
            </td>
        </tr>

        <tr class="details">
            <td>
                Check
            </td>

            <td>
                1000
            </td>
        </tr>

        <tr class="heading">
            <td>
                Item
            </td>

            <td>
                Quantity
            </td>
        </tr>

        <tr class="item">
            <td>
                Semen
            </td>

            <td>
                1000 kg
            </td>
        </tr>

        <tr class="item">
            <td>
                Batu Bata
            </td>

            <td>
                30000 bata
            </td>
        </tr>

        <tr class="item last">
            <td>
                Pasir
            </td>

            <td>
                10 meter kubik
            </td>
        </tr>
    </table>
</div>

    <div class="row mt-4 d-flex justify-content-center">
        <a class="btn btn-primary" href="/invoices/invoice/print_pdf">Print PDF</a>
    </div>
@endsection
