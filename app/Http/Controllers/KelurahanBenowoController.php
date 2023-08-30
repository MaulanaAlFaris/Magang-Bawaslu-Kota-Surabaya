<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelurahan_Benowo_Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;

class KelurahanBenowoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Kelurahan_Benowo_Form::orderBy('tahapan','desc')->paginate(7);
        return view('content.kelurahan.Kecamatan_28_Pakal.Kelurahan_Benowo.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kelurahan.Kecamatan_28_Pakal.Kelurahan_Benowo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('tahapan', $request->tahapan);
        Session::flash('nama_pelaksana', $request->nama_pelaksana);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('nomor', $request->nomor);
        Session::flash('alamat', $request->alamat);
        Session::flash('bentuk', $request->bentuk);
        Session::flash('tujuan', $request->tujuan);
        Session::flash('sasaran', $request->sasaran);
        Session::flash('waktu_dan_tempat', $request->waktu_dan_tempat);
        Session::flash('uraian', $request->uraian);

        $request->validate([
            'tahapan' =>'required',
            'nama_pelaksana'=>'required',
            'jabatan'=>'required',
            'nomor'=>'required',
            'alamat'=>'required',
            'bentuk'=>'required',
            'tujuan'=>'required',
            'sasaran'=>'required',
            'waktu_dan_tempat'=>'required',
            'uraian'=>'required',
            
        ],
        [
            'tahapan.required'=>'Tahapan yang diawasi wajib diisi',
            'nama_pelaksana.required'=>'Nama pelaksana Tugas Pengawasan wajib diisi',
            'jabatan.required'=>'Jabatan wajib diisi',
            'nomor.required'=>'Nomor Surat Perintah Tugas wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'bentuk.required'=>'Bentuk wajib diisi',
            'tujuan.required'=>'Tujuan wajib diisi',
            'sasaran.required'=>'Sasaran wajib diisi',
            'waktu_dan_tempat.required'=>'Waktu dan Tempat wajib diisi',
            'uraian.required'=>'Uraian Singkat Hasil Pengawasan wajib diisi'
        ],
    );
        $data=[
            'tahapan'=>$request->tahapan,
            'nama_pelaksana'=>$request->nama_pelaksana,
            'jabatan'=>$request->jabatan,
            'nomor'=>$request->nomor,
            'alamat'=>$request->alamat,
            'bentuk'=>$request->bentuk,
            'tujuan'=>$request->tujuan,
            'sasaran'=>$request->sasaran,
            'waktu_dan_tempat'=>$request->waktu_dan_tempat,
            'uraian'=>$request->uraian        

        ];
        Kelurahan_Benowo_Form::create($data);
        return redirect()->to('KelurahanBenowo')->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kelurahan_Benowo_Form::where('tahapan',$id)->first();
        return view('content.kelurahan.Kecamatan_28_Pakal.Kelurahan_Benowo.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelaksana' => 'required',
            'jabatan' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'bentuk' => 'required',
            'tujuan' => 'required',
            'sasaran' => 'required',
            'waktu_dan_tempat' => 'required',
            'uraian' => 'required',
        ],[
            'nama_pelaksana.required'=>'Nama Pelaksana Tugas Pengawasan sudah terupdate',
            'jabatan.required'=>'Jabatan sudah terupdate',
            'nomor'=>'Nomor Surat Perintah Tugas sudah terupdate',
            'alamat'=>'Alamat sudah terupdate',
            'bentuk'=>'Bentuk sudah terupdate',
            'tujuan'=>'Tujuan sudah terupdate',
            'sasaran'=>'Sasaran sudah terupdate',
            'waktu_dan_tempat'=>'Waktu dan Tempat sudah terupdate',
            'uraian'=>'Uraian Singkat Hasil Pengawasan sudah terupdate'
        ]);
        $data=[
            'tahapan'=>$request->tahapan,
            'nama_pelaksana'=>  $request->nama_pelaksana,
            'jabatan'=>  $request->jabatan,
            'nomor'=>  $request->nomor,
            'alamat'=>  $request->alamat,
            'bentuk'=>  $request->bentuk,
            'tujuan'=>  $request->tujuan,
            'sasaran'=>  $request->sasaran,
            'waktu_dan_tempat'=>  $request->waktu_dan_tempat,
            'uraian'=>  $request->uraian   
        ];
        Kelurahan_Benowo_Form::where('tahapan',$id)->update($data);
        return redirect()->to('KelurahanBenowo')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan_Benowo_Form::where('tahapan',$id)->delete();
        return redirect()->to('KelurahanBenowo')->with('succes','berhasil melakukan delete data');
    }

    public function pdf(string $id, Repository $config, Filesystem $files, Factory $view, Request $request)
    {
        $data = Kelurahan_Benowo_Form::where('tahapan', $id)->first();

        $dompdf = new Dompdf();

        
        // Set options for Dompdf
        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);

        // Load the view into Dompdf
        $pdf = Pdf::loadView('content.kota.Kota_Surabaya.pdf', ['data' => $data]);

        if ($request->input('download')) {
            return $pdf->download("KotaSurabaya_{$id}.pdf");
        } else {
            return $pdf->stream();
        }
    }

    public function search(Request $request)
    {
        $searchKeyword = $request->input('keyword');

    if ($searchKeyword) {
        $data = Kelurahan_Benowo_Form::where('nama_pelaksana', 'LIKE', "%$searchKeyword%")
            ->orWhere('jabatan', 'LIKE', "%$searchKeyword%")
            ->orWhere('nomor', 'LIKE', "%$searchKeyword%")
            ->orWhere('alamat', 'LIKE', "%$searchKeyword%")
            ->orWhere('bentuk', 'LIKE', "%$searchKeyword%")
            ->orWhere('tujuan', 'LIKE', "%$searchKeyword%")
            ->orWhere('sasaran', 'LIKE', "%$searchKeyword%")
            ->orWhere('waktu_dan_tempat', 'LIKE', "%$searchKeyword%")
            ->orWhere('uraian', 'LIKE', "%$searchKeyword%")
            ->orWhere('tahapan', 'LIKE', "%$searchKeyword%")
            ->orderBy('tahapan', 'desc')
            ->paginate(7);

        if ($data->isEmpty()) {
            return view('content.kota.Kota_Surabaya.index')
                ->with('data', $data)
                ->with('error', 'Data tidak ditemukan');
        }
    } else {
        $data = Kelurahan_Benowo_Form::orderBy('tahapan', 'desc')->paginate(7);
    }

    return view('content.kota.Kota_Surabaya.index')->with('data', $data);
    }
}
