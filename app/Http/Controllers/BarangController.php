<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Tampilkan semua barang (READ)
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    // Form tambah barang (CREATE)
    public function create()
    {
        return view('barangs.create');
    }

    // memproses atau mengirim data / barang baru (STORE)
    public function store(Request $request)
    {
        $barang = new barang();
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        return redirect('barangs');
        // $request->validate([
        //     'kode' => 'required'
        //     'nama_barang' => 'required|max:50',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|integer',
        //     // Sesuaikan dengan field yang Anda butuhkan
        // ]);

        // Barang::create($request->all());
        
        // return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');
       
    }

    // mengarahkan ke halaman edit barang (EDIT)
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barangs.edit', compact('barang'));
    }
    //pada satu parameter 
    //public function edit(string $id)
    //  $barang = Barang::find($id);

    // Update barang (UPDATE)
    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:50|unique:barangs,kode,' . $barang->id,
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $barang->update($validated);

        return redirect()->route('barangs.index')
            ->with('success', 'Barang berhasil diperbarui.');
    }

    // Hapus barang (DESTROY)
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus.');
    }
}
