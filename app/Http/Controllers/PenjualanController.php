<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 5;
        $keyword = $request->keyword;
        $penjualan = Penjualan::where("PenjualanID", "like", "%" . $keyword . "%")->orWhere("TanggalPenjualan","like","%". $keyword . "%")->paginate($perPage);
        return view("penjualan.index", compact("penjualan"))->withperPage($perPage);
    }
    public function edit(Request $request, $penjualan)
    {
        $penjualan = Penjualan::where('PenjualanID', $penjualan)->first();
        return view('penjualan.edit', compact('penjualan'));
    }
    public function update(Request $request, $penjualan){
        $penjualan = Penjualan::where('PenjualanID',$penjualan)->update($request->except(['_token','submit','_method']));
        return redirect('/penjualan');
    }
    public function simpan(Request $request)
    {
        Penjualan::create($request->except((['_token', 'submit'])));
        return redirect('/penjualan');
    }
    public function delete(Request $request, $penjualan)
    {
        $penjualan = Penjualan::where('PenjualanID', $penjualan)->delete($penjualan);
        return redirect('/penjualan');
    }
}
