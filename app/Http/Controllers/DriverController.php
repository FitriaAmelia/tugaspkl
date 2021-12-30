<?php

namespace App\Http\Controllers;

use App\Models\driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = Driver::orderbyDesc("created_at")->paginate(10);
        return view('admin.driver.index', compact('driver'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.create');

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
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',

        ]);
        $driver = new Driver;
        $driver->nama = $request->nama;
        $driver->alamat = $request->alamat;
        $driver->no_telpon = $request->no_telpon;
        $driver->save();
        return redirect()->route('driver.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver)
    {
        $driver = Driver::findOrFail($id);
        return view('admin.driver.show', compact('driver'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('admin.driver.edit', compact('driver'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',

        ]);
        $driver = Driver::findOrFail($id);

        $driver->nama = $request->nama;
        $driver->alamat = $request->alamat;
        $driver->no_telpon = $request->no_telpon;
        $driver->save();

        return redirect()->route('driver.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();

        return redirect()->route('driver.index')->with('status', 'Data Berhasil dihapus!');

    }
}
