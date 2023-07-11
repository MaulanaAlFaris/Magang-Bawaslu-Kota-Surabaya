<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\formBawaslu;
use Illuminate\Support\Facades\Session;

class formBawasluController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data=formBawaslu::orderBy('tahapan','desc')->paginate(10);
        return view('content.kota.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('tahpan', $request->tahapan);
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
            'tahpan' =>'required',
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
            'tahapan.required'=>'tahapan wajib diisi',
            'nama_pelaksana.required'=>'nama pelaksana wajib diisi',
            'jabatan.required'=>'jabatan wajib diisi',
            'nomor'=>'nomor surat perintah wajib diisi',
            'alamat'=>'alamat wajib diisi',
            'bentuk'=>'bentuk wajib diisi',
            'tujuan'=>'tujuan wajib diisi',
            'sasaran'=>'sasaran wajib diisi',
            'waktu_dan_tempat'=>'waktu dan  tempat wajib diisi',
            'uraian'=>'uraian singkat hasil pengawasan wajib diisi'
        ],
    );
    $data=[
        'tahapan'=>$request->tahapan,
        'nama_pelaksana', $request->nama_pelaksana,
        'jabatan', $request->jabatan,
        'nomor', $request->nomor,
        'alamat', $request->alamat,
        'bentuk', $request->bentuk,
        'tujuan', $request->tujuan,
        'sasaran', $request->sasaran,
        'waktu_dan_tempat', $request->waktu_dan_tempat,
        'uraian', $request->uraian        

    ];
    formBawaslu::create($data);
    return redirect()->to('formBawaslu')->with('success','berhasil menambahkan data');
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
        $data = formBawaslu::where('tahapan',$id)->first();
        return view('content.kota.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelaksana'=>'required',
            'jabatan'=>'required',
            'nomor'=>'required',
            'alamat'=>'required',
            'bentuk'=>'required',  
            'tujuan'=>'required',  
            'sasaran'=>'required', 
            'waktu_dan_tempat'=>'required',
            'uraian'=>'required',
        ],[

        ]);
        $data=[
            'nama_pelaksana', $request->nama_pelaksana,
            'jabatan', $request->jabatan,
            'nomor', $request->nomor,
            'alamat', $request->alamat,
            'bentuk', $request->bentuk,
            'tujuan', $request->tujuan,
            'sasaran', $request->sasaran,
            'waktu_dan_tempat', $request->waktu_dan_tempat,
            'uraian', $request->uraian
        ];
        formBawaslu::where('tahapan',$id)->update($data);
        return redirect()->to('formBawaslu')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        formBawaslu::where('tahapan',$id)->delete();
        return redirect()->to('formBawaslu')->with('succes','berhasil melakukan delet data');
    }
}

