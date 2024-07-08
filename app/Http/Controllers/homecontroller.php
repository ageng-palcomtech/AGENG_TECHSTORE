<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all()->where('status_product','Best Product');
        return view('pelanggan.home'  , compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    -- return view('pelanggan.home', compact('home')););
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        home::destroy('id', $id);
        return redirect('/home');

    }
}
