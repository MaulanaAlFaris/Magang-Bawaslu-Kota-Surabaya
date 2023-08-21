<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin_Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=SuperAdmin_Form::orderBy('username','desc')->paginate(10);
        return view('SuperAdmin.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SuperAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);
        Session::flash('level', $request->level);
        Session::flash('email', $request->email);
        

        $request->validate([
            'username' =>'required|unique:Super_Admin_Form,username',
            'password' => 'required',
            'level' => 'required',
            'name' => 'required',
            'email' => 'required'
        ],[
            'username.required'=>'Username wajib diisi',
            'username.unique'=>'Username yang digunkan sudah ada didalam database',
            'password.required'=>'Password wajib diisi',
            'level.required'=>'Level wajib diisi',
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
        ]);
        $data=[
            'username'=> $request->username,
            'password'=> $request->password,
            'level'=> $request->level,
            'email'=> $request->email,
            'name'=> $request->name,
        ];
        SuperAdmin_Form::create($data);
        return redirect()->to('SuperAdmin')->with('success','berhasil menambahkan Akun');
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
        $data = SuperAdmin_Form::where('username',$id)->first();
        return view('SuperAdmin.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'password' => 'required',
            'level' => 'required',
            'name' => 'required',
            'email' => 'required'
        ],[
            'password.required'=>'password sudah terupdate',
            'level.required'=>'level sudah terupdate',
            'name.required'=>'name sudah terupdate',
            'email.required'=>'email sudah terupdate'
        ]);
        $data=[
            'password'=> $request->password,
            'level'=> $request->level,
            'name'=> $request->name,
            'email'=> $request->email,
        ];
        SuperAdmin_Form::where('username',$id)->update($data);
        return redirect()->to('SuperAdmin')->with('success','berhasil mengupdate Akun');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SuperAdmin_Form::where('username',$id)->delete();
        return redirect()->to('SuperAdmin')->with('succes','berhasil melakukan delete data');
    }
}
