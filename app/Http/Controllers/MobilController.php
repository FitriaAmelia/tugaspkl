<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\mobil;
use Illuminate\Http\Request;
use Validator;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('admin.mobil.index', compact('mobil'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $rules = [
            'no_mobil' => 'required|max:255|unique:mobils',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'tahun_pembuatan' => 'required',
            'harga_sewa' => 'required|numeric',
            'kapasitas_penumpang' => 'required',
            'fasilitas_mobil' => 'required',
            'status_mobil' => 'required',
            'gambar' => 'required|image|max:2048',

        ];

        $message = [
            'no_mobil.required' => 'no mobil harus di isi',
            'no_mobil.unique' => 'no mobil sudah digunakan',
            'no_mobil.max' => 'no maksimal 255 karakter',
            'nama_mobil.required' => 'nama mobil harus di isi',
            'jenis_mobil.required' => 'jenis mobil harus di isi',
            'tahun_pembuatan.required' => 'tahun pembuatan harus di isi',
            'harga_sewa.numeric' => 'harga harus diisi oleh angka',
            'kapasitas_penumpang.required' => 'kapasitas penumpang harus di isi',
            'fasilitas_mobil.required' => 'fasilitas mobil harus di isi',
            'status_mobil.required' => 'status mobil harus di isi',
            'gambar.image|' => 'gambar harus diisi oleh foto',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Oops', 'Data yang anda input tidak valid, silahkan di ulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $mobil = new Mobil;
        $mobil->no_mobil = $request->no_mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;
        $mobil->status_mobil = $request->status_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }

        $mobil->save();
        Alert::success('Good Job', 'Data successfully');
        return redirect()->route('mobil.index');
    }

    // {
    //     $request->validate([
    //         'no_mobil' => 'required',
    //         'nama_mobil' => 'required',
    //         'jenis_mobil' => 'required',
    //         'tahun_pembuatan' => 'required',
    //         'harga_sewa' => 'required',
    //         'kapasitas_penumpang' => 'required',
    //         'fasilitas_mobil' => 'required',
    //         'status_mobil' => 'required',
    //         'gambar' => 'required|image|max:2048',
    //     ]);

    //     $mobil = new Mobil;
    //     $mobil->no_mobil = $request->no_mobil;
    //     $mobil->nama_mobil = $request->nama_mobil;
    //     $mobil->jenis_mobil = $request->jenis_mobil;
    //     $mobil->tahun_pembuatan = $request->tahun_pembuatan;
    //     $mobil->harga_sewa = $request->harga_sewa;
    //     $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
    //     $mobil->fasilitas_mobil = $request->fasilitas_mobil;
    //     $mobil->status_mobil = $request->status_mobil;

    //     if ($request->hasFile('gambar')) {
    //         $mobil->deleteImage();
    //         $image = $request->file('gambar');
    //         $name = rand(1000, 9999) . $image->getClientOriginalName();
    //         $image->move('images/mobil/', $name);
    //         $mobil->gambar = $name;
    //     }
    //     $mobil->save();
    //     return redirect()->route('mobil.index');

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_mobil' => 'required',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'tahun_pembuatan' => 'required',
            'harga_sewa' => 'required',
            'kapasitas_penumpang' => 'required',
            'fasilitas_mobil' => 'required',
            'status_mobil' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $mobil = Mobil::FindOrFail($id);
        $mobil->no_mobil = $request->no_mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;
        $mobil->status_mobil = $request->status_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mobil = Mobil::findOrFail($id);
        // $mobil->deleteImage();
        // $mobil->delete();

        if (!Mobil::destroy($id)) {
            return redirect()->back();
        } else {
            Alert::success('Berhasil', 'Menghapus Data ' . $mobil->no_mobil);
            return redirect()->back();
        }

        //return redirect()->route('mobil.index')->with('status', 'Data Berhasil dihapus!');

    }
}
