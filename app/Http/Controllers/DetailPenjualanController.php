<?php

namespace App\Http\Controllers;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 5;
        $keyword = $request->keyword;
        $detail = DetailPenjualan::where("DetailID", "like", "%" . $keyword . "%")->orWhere("PenjualanID","like","%". $keyword . "%")->paginate($perPage);
        return view("detail.index", compact("detail"))->withperPage($perPage);
    }
    public function edit(Request $request, $detail)
    {
        $detail = DetailPenjualan::where('DetailID', $detail)->first();
        return view('detail.edit', compact('detail'));
    }
    public function update(Request $request, $detail){
        $detail = DetailPenjualan::where('DetailID',$detail)->update($request->except(['_token','submit','_method']));
        return redirect('/detailpenjualan');
    }
    public function simpan(Request $request)
    {
        DetailPenjualan::create($request->except((['_token', 'submit'])));
        return redirect('/detailpenjualan');
    }
    public function delete(Request $request, $detail)
    {
        $detail = DetailPenjualan::where('DetailID', $detail)->delete($detail);
        return redirect('/detailpenjualan');
    }
}
