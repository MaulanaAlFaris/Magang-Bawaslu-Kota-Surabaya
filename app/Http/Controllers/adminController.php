<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=admin::orderBy('username','desc')->paginate(2);
        return view('admin.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);
        Session::flash('wilayah', $request->wilayah);
        

        $request->validate([
            'username' =>'required|numeric|unique:admin,username',
            'password' => 'required',
            'wilayah' => 'required'
        ],[
            'username.required'=>'username wajib diisi',
            'username.unique'=>'username yang digunkan sudah ada didalam database',
            'password.required'=>'password wajib diisi',
            'wilayah.required'=>'wilayah wajib diisi'
        ]);
        $data=[
            'username'=> $request->username,
            'password'=> $request->password,
            'wilayah'=> $request->wilayah,
        ];
        admin::create($data);
        return redirect()->to('admin')->with('success','berhasil menambahkan data');
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
        $data = admin::where('username',$id)->first();
        return view('admin.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'password' => 'required',
            'wilayah' => 'required'
        ],[
            'password.required'=>'password sudah terupdate',
            'wilayah.required'=>'wilayah sudah terupdate'
        ]);
        $data=[
            'password'=> $request->password,
            'wilayah'=> $request->wilayah,
        ];
        admin::where('username',$id)->update($data);
        return redirect()->to('admin')->with('success','berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        admin::where('username',$id)->delete();
        return redirect()->to('admin')->with('succes','berhasil melakukan delete data');
    }
}
