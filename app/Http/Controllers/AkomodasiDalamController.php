<?php

namespace App\Http\Controllers;

use App\AkomodasiDalam;
use Illuminate\Http\Request;

class AkomodasiDalamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akomodasidlm = AkomodasiDalam::all();
        return view('akomodasi.dalam', compact('akomodasidlm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required' ,
            'alamat' => 'required'
        ]);

		AkomodasiDalam::create([
			'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

		return redirect('akomodasi-dalam');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AkomodasiDalam  $akomodasiDalam
     * @return \Illuminate\Http\Response
     */
    public function edit(AkomodasiDalam $akomodasiDalam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AkomodasiDalam  $akomodasidlm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AkomodasiDalam $akomodasidlm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AkomodasiDalam  $akomodasiDalam
     * @return \Illuminate\Http\Response
     */
    public function destroy(AkomodasiDalam $akomodasidlm, $id)
    {
        AkomodasiDalam::where('id_dalam', $id)->first()->delete();
        return redirect('akomodasi-dalam');
    }
}
