<?php

namespace App\Http\Controllers;

use App\Homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homestay.index',[
          'data' => Homestay::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homestay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homestay = new Homestay($request->all());
        if ($homestay->save()) {
          return redirect()->route('homestay.index');
        }
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(Homestay $homestay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(Homestay $homestay)
    {
        return view('homestay.edit',compact('homestay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homestay $homestay)
    {
        $homestay->nama = $request->nama;
        $homestay->alamat = $request->alamat;
        $homestay->no_telp = $request->no_telp;
        $homestay->deskripsi = $request->deskripsi;
        $homestay->harga = $request->harga;
        $homestay->status = $request->status;
        $homestay->save();
        return redirect(route('homestay.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        $homestay->delete();
        return redirect(route('homestay.index'));
    }
}
