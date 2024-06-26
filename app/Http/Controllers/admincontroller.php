<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\suport\facades\Hash;
use Illuminate\Http\Request;

class admincontroller extends Controller
{

    public function index()
    {
        return view('admins.admin');
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(request $request)
    {
        $request->validate(
            [

            'nama_admin'=>'required',
            'jk_admin'=>'required',
            'nohp_admin'=>'required',
            'email_admin'=>'required|unique:admins',
            'password_admin'=>'required',
            'alamat_admin'=>'required',
            'jabatan_admin'=>'required',
            'foto_admin'=>'required|mimes:jpg,png,gif,jpeg|imgae|max:2048',

            ],

            [

            'nama_admin.required'=>'wajib di isi',
            'jk_admin.required'=>'wajib di isi',
            'nohp_admin.required'=>'wajib di isi',
            'email_admin.required'=>'wajib di isi',
            'email_admin.unique'=>'wajib di isi',
            'password_admin.required'=>'wajib di isi',
            'alamat_admin.required'=>'wajib di isi',
            'jabatan_admin.required'=>'wajib di isi',
            'foto_admin.required'=>'wajib di isi',
            'foto_admin.mimes'=>'wajib di isi',
            'foto_admin.image'=>'wajib di isi',
            'foto_admin.max'=>'wajib di isi',



            ]
            );


        $path = $request->file('foto_admin')->store('public/uploads');

        $admin = new Admin();
        $admin ->nama_admin = $request['nama_admin'];
        $admin ->jk_admin = $request['jk_admin'];
        $admin ->nohp_admin = $request['nohp_admin'];
        $admin ->email_admin = $request['email_admin'];
        $admin ->password = Hash::make ($request['password_admin']);
        $admin ->alamat_admin = $request['alamat_admin'];
        $admin ->foto_admin= basename($path);
        $admin ->save();

        return redirect('/admin');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        admins::destroy('id', $id);
        return redirect('/admin);
    }
}
