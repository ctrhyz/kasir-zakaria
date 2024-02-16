<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 5;
        $keyword = $request->keyword;
        $produk = Produk::Where("ProdukID", "like", "%" . $keyword . "%")->orWhere("NamaProduk","like","%". $keyword . "%")->paginate($perPage);
        return view("produk.index", compact("produk"))->withperPage($perPage);
    }
    public function edit(Request $request, $produk)
    {
        $produk = Produk::where('ProdukID', $produk)->first();
        return view('produk.edit', compact('produk'));
    }
    public function update(Request $request, $produk){
        $produk = Produk::where('ProdukID',$produk)->update($request->except(['_token','submit','_method']));
        return redirect('/produk');
    }
    public function simpan(Request $request)
    {
        Produk::create($request->except((['_token', 'submit'])));
        return redirect('/produk');
    }
    public function delete(Request $request, $produk)
    {
        $produk = Produk::where('ProdukID', $produk)->delete($produk);
        return redirect('/produk');
    }
}
