<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cctv;

class cctvController extends Controller
{
    public function index()
    {
        $cctv = cctv::all();
        return view('cctv.index', compact('cctv'));
    }

    public function edit($id)
    {
        $cctv = cctv::find($id);
        return view('cctv.edit', compact('cctv'));
    }

    public function update(Request $request, $id)
    {
        $cctv = cctv::find($id);
        $cctv->namaWilayah = $request->namaWilayah;
        $cctv->namaTitik = $request->namaTitik;
        $cctv->nomorKamera = $request->nomorKamera;
        $cctv->link = $request->link;
        $cctv->save();
        return redirect()->route('cctv.index');
    }
}
