<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
class PDFController extends Controller
{
    public function employee(){
    	$emp=Employee::all();
    	return view('employee',compact('emp'));
    }
    public function downloadPDF(){
    	$employees=Employee::all();
    	$pdf=PDF::loadView('employee',compact('employees'));
    	return $pdf->download('employees.pdf');
    }
}
