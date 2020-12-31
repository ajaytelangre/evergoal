<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use PDF;

class InvoiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function invoice_report()
    {
       $html="<h1>Hello</h1>";
       $pdf=PDF::loadView('test');
       return $pdf->stream();
      
    }
}
