<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelurahan_KlampisNgasem_Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;

class KelurahanKlampisNgasemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Kelurahan_KlampisNgasem_Form::orderBy('tahapan','desc')->paginate(7);
        return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.create');
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
            'uraian'=>$request->uraian,
            'tanggal'=>$request->tanggal,
            'penomoran_judul'=>$request->penomoran_judul,
            'peristiwa'=>  $request->peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['peristiwa'],
            'tempat_kejadian_peristiwa'=>  $request->tempat_kejadian_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['tempat_kejadian_peristiwa'],
            'pelaku_peristiwa'=>  $request->pelaku_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['pelaku_peristiwa'],
            'alamat_peristiwa'=>  $request->alamat_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_peristiwa'],
            'nama_saksi_1'=>  $request->nama_saksi_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['nama_saksi_1'],
            'alamat_saksi_1'=>  $request->alamat_saksi_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_saksi_1'],
            'nama_saksi_2'=>  $request->nama_saksi_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['nama_saksi_2'],
            'alamat_saksi_2'=>  $request->alamat_saksi_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_saksi_2'],
            'alat_bukti_1'=>  $request->alat_bukti_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_1'],
            'alat_bukti_2'=>  $request->alat_bukti_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_2'],
            'alat_bukti_3'=>  $request->alat_bukti_3 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_3'],
            'barang_bukti_1'=>  $request->barang_butki_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_1'],
            'barang_bukti_2'=>  $request->barang_butki_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_2'],
            'barang_bukti_3'=>  $request->barang_butki_3 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_3'],
            'uraian_singkat_dugaan'=>  $request->uraian_singkat_dugaan ?: Kelurahan_KlampisNgasem_Form::$defaults['uraian_singkat_dugaan'],
            'fakta'=>  $request->fakta ?: Kelurahan_KlampisNgasem_Form::$defaults['fakta'],
            'analisa'=>  $request->analisa ?: Kelurahan_KlampisNgasem_Form::$defaults['analisa'],
            'peserta_pemilu_sengketa'=>  $request->peserta_pemilu_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['peserta_pemilu_sengketa'],
            'tempat_sengketa'=>  $request->tempat_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['tempat_sengketa'],
            'waktu_sengketa'=>  $request->waktu_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['waktu_sengketa'],
            'bentuk_objek'=>  $request->bentuk_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['bentuk_objek'],
            'identitas_objek'=> $request->identitas_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['identitas_objek'],
            'hari_objek'=>  $request->hari_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['hari_objek'],
            'kerugian_objek'=>  $request->kerugian_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['kerugian_objek'],
            'uraian_objek'=>  $request->uraian_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['uraian_objek'],

        ];
        Kelurahan_KlampisNgasem_Form::create($data);
        return redirect()->to('KelurahanKlampisNgasem')->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kelurahan_KlampisNgasem_Form::where('tahapan',$id)->first();
        return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kelurahan_KlampisNgasem_Form::where('tahapan',$id)->first();
        return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.edit')->with('data', $data);
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
            'nama_pelaksana'=>$request->nama_pelaksana,
            'jabatan'=>$request->jabatan,
            'nomor'=>$request->nomor,
            'alamat'=>$request->alamat,
            'bentuk'=>$request->bentuk,
            'tujuan'=>$request->tujuan,
            'sasaran'=>$request->sasaran,
            'waktu_dan_tempat'=>$request->waktu_dan_tempat,
            'uraian'=>$request->uraian,
            'tanggal'=>$request->tanggal,
            'penomoran_judul'=>$request->penomoran_judul,
            'peristiwa'=>  $request->peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['peristiwa'],
            'tempat_kejadian_peristiwa'=>  $request->tempat_kejadian_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['tempat_kejadian_peristiwa'],
            'pelaku_peristiwa'=>  $request->pelaku_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['pelaku_peristiwa'],
            'alamat_peristiwa'=>  $request->alamat_peristiwa ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_peristiwa'],
            'nama_saksi_1'=>  $request->nama_saksi_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['nama_saksi_1'],
            'alamat_saksi_1'=>  $request->alamat_saksi_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_saksi_1'],
            'nama_saksi_2'=>  $request->nama_saksi_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['nama_saksi_2'],
            'alamat_saksi_2'=>  $request->alamat_saksi_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['alamat_saksi_2'],
            'alat_bukti_1'=>  $request->alat_bukti_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_1'],
            'alat_bukti_2'=>  $request->alat_bukti_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_2'],
            'alat_bukti_3'=>  $request->alat_bukti_3 ?: Kelurahan_KlampisNgasem_Form::$defaults['alat_bukti_3'],
            'barang_bukti_1'=>  $request->barang_butki_1 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_1'],
            'barang_bukti_2'=>  $request->barang_butki_2 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_2'],
            'barang_bukti_3'=>  $request->barang_butki_3 ?: Kelurahan_KlampisNgasem_Form::$defaults['barang_bukti_3'],
            'uraian_singkat_dugaan'=>  $request->uraian_singkat_dugaan ?: Kelurahan_KlampisNgasem_Form::$defaults['uraian_singkat_dugaan'],
            'fakta'=>  $request->fakta ?: Kelurahan_KlampisNgasem_Form::$defaults['fakta'],
            'analisa'=>  $request->analisa ?: Kelurahan_KlampisNgasem_Form::$defaults['analisa'],
            'peserta_pemilu_sengketa'=>  $request->peserta_pemilu_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['peserta_pemilu_sengketa'],
            'tempat_sengketa'=>  $request->tempat_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['tempat_sengketa'],
            'waktu_sengketa'=>  $request->waktu_sengketa ?: Kelurahan_KlampisNgasem_Form::$defaults['waktu_sengketa'],
            'bentuk_objek'=>  $request->bentuk_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['bentuk_objek'],
            'identitas_objek'=> $request->identitas_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['identitas_objek'],
            'hari_objek'=>  $request->hari_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['hari_objek'],
            'kerugian_objek'=>  $request->kerugian_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['kerugian_objek'],
            'uraian_objek'=>  $request->uraian_objek ?: Kelurahan_KlampisNgasem_Form::$defaults['uraian_objek'],
        ];
        Kelurahan_KlampisNgasem_Form::where('tahapan',$id)->update($data);
        return redirect()->to('KelurahanKlampisNgasem')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan_KlampisNgasem_Form::where('tahapan',$id)->delete();
        return redirect()->to('KelurahanKlampisNgasem')->with('succes','berhasil melakukan delete data');
    }

    public function pdf(string $id, Repository $config, Filesystem $files, Factory $view, Request $request)
    {
        $data = Kelurahan_KlampisNgasem_Form::where('tahapan', $id)->first();

        $dompdf = new Dompdf();


        // Set options for Dompdf
        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);

        // Load the view into Dompdf
        $pdf = Pdf::loadView('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.pdf', ['data' => $data]);

        if ($request->input('download')) {
            return $pdf->download("KelurahanKlampisNgasem_{$id}.pdf");
        } else {
            return $pdf->stream();
        }
    }

    public function searchKelKlampisNgasem(Request $request)
    {
        $searchKeyword = $request->input('keyword');

    if ($searchKeyword) {
        $data = Kelurahan_KlampisNgasem_Form::where('nama_pelaksana', 'LIKE', "%$searchKeyword%")
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
            return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.index')
                ->with('data', $data)
                ->with('error', 'Data tidak ditemukan');
        }
    } else {
        $data = Kelurahan_KlampisNgasem_Form::orderBy('tahapan', 'desc')->paginate(7);
    }

    return view('content.kelurahan.Kecamatan_13_Sukolilo.Kelurahan_Klampis_Ngasem.index')->with('data', $data);
    }
}
