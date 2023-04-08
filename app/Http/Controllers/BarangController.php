<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('halaman.data_barang.index', compact('barangs'));
    }

    public function create()
    {
        $barangs = Barang::select('id', 'nama')->get();
        return view('halaman.data_barang.create',  compact('barangs'));
    }

    public function store(Request $request)
    {
        $tambah = Barang::create($request->all());
        return redirect()->route('halaman.data_barang.index');
    }

    public function edit(Request $request, $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('halaman.data_barang.edit', compact('barangs'));
    }

    public function update($id, Request $request)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->update($request->all());
        return redirect()->route('halaman.data_barang.index');
    }

    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect()->route('halaman.data_barang.index');
    }
}
