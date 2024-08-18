<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
public function downloadPDF()
{
$data = [
'clientName' => 'John Doe', // Example data, pass your actual data
// Add more data as needed
];

$pdf = Pdf::loadView('pdf.invoice', $data);

// Set paper size to A4
$pdf->setPaper('A4', 'portrait');

// Stream the PDF to the browser
return $pdf->download('invoice.pdf');
}
}
