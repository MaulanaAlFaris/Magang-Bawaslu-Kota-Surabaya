<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formKecamatanBawaslu;
use Illuminate\Support\Facades\Session;

class KecamatanController extends Controller
{
    public function index(){
        $data=formKecamatanBawaslu::orderBy('tahapan','desc')->paginate(10);
        return view('content.kecamatan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kecamatan.create');
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
            'tahapan.required'=>'Tahapan wajib diisi',
            'nama_pelaksana.required'=>'Nama pelaksana wajib diisi',
            'jabatan.required'=>'Jabatan wajib diisi',
            'nomor.required'=>'Nomor surat perintah wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'bentuk.required'=>'Bentuk wajib diisi',
            'tujuan.required'=>'Tujuan wajib diisi',
            'sasaran.required'=>'Sasaran wajib diisi',
            'waktu_dan_tempat.required'=>'Waktu dan  tempat wajib diisi',
            'uraian.required'=>'Uraian singkat hasil pengawasan wajib diisi'
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
        formKecamatanBawaslu::create($data);
        return redirect()->to('kecamatan')->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = formKecamatanBawaslu::where('tahapan',$id)->first();
        return view('content.kecamatan.edit')->with('data', $data);
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
            'nama_pelaksana.required'=>'Nama pelaksana sudah terupdate',
            'jabatan.required'=>'Jabatan sudah terupdate',
            'nomor'=>'Nomor surat perintah sudah terupdate',
            'alamat'=>'Alamat sudah terupdate',
            'bentuk'=>'Bentuk sudah terupdate',
            'tujuan'=>'Tujuan sudah terupdate',
            'sasaran'=>'Sasaran sudah terupdate',
            'waktu_dan_tempat'=>'Waktu dan  tempat sudah terupdate',
            'uraian'=>'Uraian singkat hasil pengawasan sudah terupdate'
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
        formKecamatanBawaslu::where('tahapan',$id)->update($data);
        return redirect()->to('kecamatan')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        formKecamatanBawaslu::where('tahapan',$id)->delete();
        return redirect()->to('kecamatan')->with('succes','berhasil melakukan delete data');
    }

}
