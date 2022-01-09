<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use App\Models\penyewa;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('admin.transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $mobil = Mobil::all();
        $penyewa = Penyewa::all();
        return view('admin.transaksi.create', compact('transaksi', 'mobil', 'penyewa'));

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
            'mobil_no' => 'required',
            'tgl_sewa' => 'required',
            'tgl_kembali' => 'required',
            'lama_pakai' => 'required',
            'total_biaya' => 'required',
            'penyewa_id' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->mobil_no = $request->mobil_no;
        $transaksi->tgl_sewa = $request->tgl_sewa;
        $transaksi->tgl_kembali = $request->tgl_kembali;
        $transaksi->lama_pakai = $request->lama_pakai;
        $transaksi->total_biaya = $request->total_biaya;
        $transaksi->penyewa_id = $request->penyewa_id;
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->save();
        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $mobil = Mobil::all();
        $penyewa = Penyewa::all();
        return view('admin.transaksi.edit', compact('transaksi', 'mobil', 'penyewa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mobil_no' => 'required',
            'tgl_sewa' => 'required',
            'tgl_kembali' => 'required',
            'lama_pakai' => 'required',
            'total_biaya' => 'required',
            'penyewa_id' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->mobil_no = $request->mobil_no;
        $transaksi->tgl_sewa = $request->tgl_sewa;
        $transaksi->tgl_kembali = $request->tgl_kembali;
        $transaksi->lama_pakai = $request->lama_pakai;
        $transaksi->total_biaya = $request->total_biaya;
        $transaksi->penyewa_id = $request->penyewa_id;
        $transaksi->tgl_transaksi = $request->tgl_transaksi;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('status', 'Data Berhasil dihapus!');

    }
}
