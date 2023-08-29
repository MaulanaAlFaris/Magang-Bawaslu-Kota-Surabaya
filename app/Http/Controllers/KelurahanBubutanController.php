<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelurahan_Bubutan_Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KelurahanBubutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Kelurahan_Bubutan_Form::orderBy('tahapan','desc')->paginate(7);
        return view('content.kelurahan.Kecamatan_16_Bubutan.Kelurahan_Bubutan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kelurahan.Kecamatan_16_Bubutan.Kelurahan_Bubutan.create');
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
        Kelurahan_Bubutan_Form::create($data);
        return redirect()->to('KelurahanBubutan')->with('success','berhasil menambahkan data');
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
        $data = Kelurahan_Bubutan_Form::where('tahapan',$id)->first();
        return view('content.kelurahan.Kecamatan_16_Bubutan.Kelurahan_Bubutan.edit')->with('data', $data);
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
        Kelurahan_Bubutan_Form::where('tahapan',$id)->update($data);
        return redirect()->to('KelurahanBubutan')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan_Bubutan_Form::where('tahapan',$id)->delete();
        return redirect()->to('KelurahanBubutan')->with('succes','berhasil melakukan delete data');
    }
}
