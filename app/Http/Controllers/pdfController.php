<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kota_Surabaya_Form;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class pdfController extends Controller
{
    public function generatePdf(){
        $data = Kota_Surabaya_Form::all();
        
        $html = view('content.kota.Kota_Surabaya.index')->with('data',$data)->render();

        $pdf = PDF::loadHTML($html);

        $pdf->setPaper('A4','Potrait');

        $pdfContent = $pdf->output();

        file_put_contents('Kota.pdf',$pdfContent);

        return $pdf->download('kotaSurabya.pdf');
    }
}
