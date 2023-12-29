<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;

class PdfController extends Controller
{
    public function index(){
        $users=Product::all();
        return view('pdf',compact('users'));
    }

    public function export(){
        $users=Product::all();
        $pdf=Pdf::loadView('pdf',compact('users'));
        return $pdf->download('users.pdf');
    }
}
