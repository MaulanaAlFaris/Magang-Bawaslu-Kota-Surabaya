<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Support\Facades\Session;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = form::orderBy('tahapan yang diawasi','desc')->paginate(10);
        return view('content.kota.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('tahpan yang diawasi', $request->tahapan);
        Session::flash('nama pelaksana tugas pengawasan', $request->nama);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('nomor surat perintah tugas', $request->nomor);
        Session::flash('alamat', $request->alamat);
        Session::flash('bentuk', $request->bentuk);
        Session::flash('tujuan', $request->tujuan);
        Session::flash('sasaran', $request->sasaran);
        Session::flash('waktu dan tempat', $request->waktu);
        Session::flash('uraian singkat hasil pengawasan', $request->uraian);

        $request->validate([
            'tahpan yang diawasi' =>'required',
            'nama pelaksana tugas pengawasan'=>'required',
            'jabatan'=>'required',
            'nomor surat perintah tugas'=>'required',
            'alamat'=>'required',
            'bentuk'=>'required',
            'tujuan'=>'required',
            'sasaran'=>'required',
            'waktu dan tempat'=>'required',
            'uraian singkat hasil pengawasan'=>'required',
            
        ],
        [
            'tahapan yang diawasi.required'=>'tahapan wajib diisi',
            'nama pelaksana tugas pengawasan.required'=>'nama pelaksana wajib diisi',
            'jabatan.required'=>'jabatan wajib diisi',
            'nomor surat perintah tugas'=>'nomor surat perintah wajib diisi',
            'alamat'=>'alamat wajib diisi',
            'bentuk'=>'bentuk wajib diisi',
            'tujuan'=>'tujuan wajib diisi',
            'sasaran'=>'sasaran wajib diisi',
            'waktu dan tempat'=>'waktu dan  tempat wajib diisi',
            'uraian singkat hasil pengamatan'=>'uraian singkat hasil pengawasan wajib diisi'
        ],
    );
    $data=[
        'tahapan yang diawasi'=>$request->tahapan,
        'nama pelaksana tugas pengawasan', $request->nama,
        'jabatan', $request->jabatan,
        'nomor surat perintah tugas', $request->nomor,
        'alamat', $request->alamat,
        'bentuk', $request->bentuk,
        'tujuan', $request->tujuan,
        'sasaran', $request->sasaran,
        'waktu dan tempat', $request->waktu,
        'uraian singkat hasil pengawasan', $request->uraian        

    ];
    form::create($data);
    return redirect()->to('form')->with('success','berhasil menambahkan data');
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
        $data = form::where('tahapan yang diawasi',$id)->first();
        return view('admin.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
