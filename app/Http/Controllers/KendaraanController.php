<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = DB::table('kendaraan')->get(); // Mengambil semua isi tabel
        $posts = Kendaraan::orderBy('plat_kendaraan', 'desc')->paginate(6);
        return view('kendaraan.index', compact('kendaraan'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.create');
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
            'jenis_kendaraan' => 'required',
            'plat_kendaraan' => 'required',
            'foto_kendaraan' => 'required',
            'status_kendaraan' => 'required',
        ]);
        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($plat_kendaraan)
    {
        $Kendaraan = Kendaraan::find($plat_kendaraan);
        return view('kendaraan.detail', compact('Kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($plat_kendaraan)
    {
        $Kendaraan = DB::table('kendaraan')->where('plat_kendaraan', $plat_kendaraan)->first();;
        return view('kendaraan.edit', compact('Kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $plat_kendaraan)
    {
        $request->validate([
            'jenis_kendaraan' => 'required',
            'plat_kendaraan' => 'required',
            'foto_kendaraan' => 'required',
            'status_kendaraan' => 'required',
        ]);
        Kendaraan::find($plat_nomor)->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($plat_kendaraan)
    {
        Kendaraan::find($plat_kendaraan)->delete();
        return redirect()->route('kendaraan.index')-> with('success', 'Kendaraan Berhasil Dihapus');
    }
}
