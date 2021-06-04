<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parqueadero;
class PDFController extends Controller
{
    public function PDFPark(){
    	$parqueaderos= Parqueadero::all();
    	$pdf= \PDF::loadView('tabla', compact('parqueaderos'));
    	return $pdf->download('tabla.pdf');
    }
}
