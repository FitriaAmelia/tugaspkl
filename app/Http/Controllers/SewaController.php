<?php

namespace App\Http\Controllers;

use App\Models\driver;
use App\Models\mobil;
use App\Models\penyewa;
use App\Models\sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = sewa::with('mobils')->get();
        $sewa = sewa::with('drivers')->get();
        $sewa = sewa::with('penyewas')->get();
        return view('admin.sewa.index', compact('sewa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sewa = Sewa::all();
        $mobil = Mobil::all();
        $driver = Driver::all();
        $penyewa = Penyewa::all();
        return view('admin.sewa.create', compact('sewa', 'mobil', 'driver', 'penyewa'));

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
            'no_nota' => 'required',
            'mobil_no' => 'required',
            'driver_id' => 'required',
            'penyewa_id' => 'required',
            'tgl_sewa' => 'required',
            'tgl_kembali' => 'required',
            'pembayaran' => 'required',
            'jaminan' => 'required',
            'denda' => 'required',
        ]);

        $sewa = new Sewa;
        $sewa->no_nota = $request->no_nota;
        $sewa->mobil_no = $request->mobil_no;
        $sewa->driver_id = $request->driver_id;
        $sewa->penyewa_id = $request->penyewa_id;
        $sewa->tgl_sewa = $request->tgl_sewa;
        $sewa->tgl_kembali = $request->tgl_kembali;
        $sewa->pembayaran = $request->pembayaran;
        $sewa->jaminan = $request->jaminan;
        $sewa->denda = $request->denda;
        $sewa->save();
        return redirect()->route('sewa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);
        return view('admin.sewa.show', compact('sewa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa = Sewa::findOrFail($id);
        $mobil = Mobil::all();
        $driver = Driver::all();
        $penyewa = Penyewa::all();
        return view('admin.sewa.edit', compact('sewa', 'mobil', 'driver', 'penyewa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_nota' => 'required',
            'mobil_no' => 'required',
            'driver_id' => 'required',
            'penyewa_id' => 'required',
            'tgl_sewa' => 'required',
            'tgl_kembali' => 'required',
            'pembayaran' => 'required',
            'jaminan' => 'required',
            'denda' => 'required',
        ]);

        $sewa = Sewa::findOrFail($id);
        $sewa->no_nota = $request->no_nota;
        $sewa->mobil_no = $request->mobil_no;
        $sewa->driver_id = $request->driver_id;
        $sewa->penyewa_id = $request->penyewa_id;
        $sewa->tgl_sewa = $request->tgl_sewa;
        $sewa->tgl_kembali = $request->tgl_kembali;
        $sewa->pembayaran = $request->pembayaran;
        $sewa->jaminan = $request->jaminan;
        $sewa->denda = $request->denda;
        $sewa->save();
        return redirect()->route('sewa.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();
        return redirect()->route('sewa.index')->with('status', 'Data Berhasil dihapus!');

    }
}
