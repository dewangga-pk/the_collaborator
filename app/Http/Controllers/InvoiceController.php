<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
class InvoiceController extends Controller
{
    public function print_pdf(){
        $pdf = PDF::loadview('invoices/invoicePrint')->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
