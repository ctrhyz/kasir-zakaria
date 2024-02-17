<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 5;
        $keyword = $request->keyword;
        $pelanggan = Pelanggan::where("PelangganID", "like", "%" . $keyword . "%")->orWhere("NamaPelanggan","like","%". $keyword . "%")->paginate($perPage);
        return view("pelanggan.index", compact("pelanggan"))->withperPage($perPage);
    }
    public function edit(Request $request, $pelanggan)
    {
        $pelanggan = Pelanggan::where('PelangganID', $pelanggan)->first();
        return view('pelanggan.edit', compact('pelanggan'));
    }
    public function update(Request $request, $pelanggan){
        $pelanggan = Pelanggan::where('PelangganID',$pelanggan)->update($request->except(['_token','submit','_method']));
        return redirect('/pelanggan')->with('success-edit','Data Berhasil Di Edit!');
    }
    public function simpan(Request $request)
    {
        Pelanggan::create($request->except((['_token', 'submit'])));
        return redirect('/pelanggan')->with('success-add','Data Berhasil Di Simpan!');
    }
    public function delete(Request $request, $pelanggan)
    {
        $pelanggan = Pelanggan::where('PelangganID', $pelanggan)->delete($pelanggan);
        return redirect('/pelanggan')->with('success-delete','Data Berhasil Di Hapus!');
    }
}
