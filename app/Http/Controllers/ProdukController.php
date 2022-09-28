<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = produk::all();
        return view('produk', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Produk;
        return view('tambah', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'kode_produk' => 'unique:produks|required',
        ]);

        $model = new Produk;
        $model->kode_produk = $request->kode_produk;
        $model->nama_produk = $request->nama_produk;
        $model->harga_produk = $request->harga_produk;
        $model->kuantitas_produk = $request->kuantitas_produk;
        $model->unit_produk = $request->unit_produk;
        $model->kategori_produk = $request->kategori_produk;
        $model->save();
        return redirect('produk');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Produk::find($id);
        return view('update', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Produk::find($id);
        $model->kode_produk = $request->kode_produk;
        $model->nama_produk = $request->nama_produk;
        $model->harga_produk = $request->harga_produk;
        $model->kuantitas_produk = $request->kuantitas_produk;
        $model->unit_produk = $request->unit_produk;
        $model->kategori_produk = $request->kategori_produk;
        $model->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
