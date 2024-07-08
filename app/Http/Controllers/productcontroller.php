<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('products.product'  , compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [

            'nama_product'=>'required',
            'jumlah_product'=>'required|integer',
            'harga_product'=>'required|integer|',
            'supplier_product'=>'required|unique:products',
            'status_product'=>'required',
            'foto_product'=>'required|mimes:jpg,png,gif,jpeg|image|max:4096',

            ],

            [

                 'nama_product.required'=>'wajib di isi',
                'jumlah_product.required'=>'wajib di isi',
                'harga_product.required'=>'wajib di isi',
               'supplier_product.required'=>'wajib di isi',
                'status_product.unique'=>'wajib di isi',
                'foto_product.required'=>'wajib di isi',
                'foto_product.mimes'=>'wajib extensi',
                'foto_product.image'=>'wajib harus gambar',
                'foto_product.max'=>'wajib maxisamal',



            ]
            );


        $path = $request->file('foto_product')->store('public/uploads');

        $product = new product();
        $product ->nama_product = $request['nama_product'];
        $product ->jumlah_product = $request['jumlah_product'];
        $product ->harga_product = $request['harga_product'];
        $product ->supplier_product = $request['supplier_product'];
        $product ->status_product = $request['status_product'];
        $product ->foto_product= basename($path);
        $product ->save();

        return redirect('/product');
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
        $product = product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [

                'nama_product'=>'required',
                'jumlah_product'=>'required|integer',
                'harga_product'=>'required|integer',
                'supplier_product'=>'required',
                'status_product'=>'required',
                'foto_product'=>'required|mimes:jpg,png,gif,jpeg|image|max:4096',

                ],

                [

                     'nama_product.required'=>' nama product wajib di isi',
                    'jumlah_product.required'=>'jumlah wajib di isi',
                    'harga_product.required'=>'harga wajib di isi',
                   'supplier_product.required'=>'supplier wajib di isi',
                    'status_product.unique'=>'status wajib di isi',
                    'foto_product.required'=>'wajib di isi',
                    'foto_product.mimes'=>'wajib extensi',
                    'foto_product.image'=>'wajib harus gambar',
                    'foto_product.max'=>'wajib maxisamal',



                ]
                );
                if ($request->foto_admin){
                    if($request->foto_lama){
                        Storage::delete($request->foto_admin);
                    }
                        $path = $request->file('foto_admin')->store('public/uploads');
                    } else {
                        $path = $request->foto_lama;
                    }


            $path = $request->file('foto_product')->store('public/uploads');

            $product =  product::find($id);
            $product ->nama_product = $request['nama_product'];
            $product ->jumlah_product = $request['jumlah_product'];
            $product ->harga_product = $request['harga_product'];
            $product ->supplier_product = $request['supplier_product'];
            $product ->status_product = $request['status_product'];
            $product ->foto_product= basename($path);
            $product ->save();

            return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy('id', $id);
        return redirect('/product');
    }
}
