<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');
    }
    function store(){
        $produk = new Produk;
        $produk->Nama = request('nama');
        $produk->Stok = request('stok');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Deskripsi = request('deskripsi');
        $produk->save();

        return redirect('Produk')->with('success', 'data berhasil ditambahkan');
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data); 
    }
    function update(Produk $produk){
        $produk->Nama = request('nama');
        $produk->Stok = request('stok');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Deskripsi = request('deskripsi');
        $produk->save();

        return redirect('Produk')->with('success', 'data berhasil diedit');
    }
    function destroy(produk $produk){
        $produk->delete();

        return redirect('Produk')->with('danger', 'data berhasil dihapus');
    }
}