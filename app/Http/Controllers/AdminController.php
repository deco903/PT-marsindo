<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftarpegawaiModel;

class AdminController extends Controller
{
    public function index()
    {
    	$datas = daftarpegawaiModel::all();
    	return view('admin', compact('datas'));
    }

    public function store(Request $request)
    {

    	$request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'gaji' => 'required',
            'potongan' => 'required',
            'pph21' => 'required',
        ]);

    	$nama = $request->nama;
        $posisi = $request->posisi;
        $gaji = $request->gaji;
        $potongan = $request->potongan;
        $pph21 = $request->pph21;
        
        $categori = new daftarpegawaiModel();
        $categori->nama = $nama;
        $categori->posisi = $posisi;
        $categori->gaji = $gaji;
        $categori->potongan = $potongan;
        $categori->pph21 = $pph21;
        $categori->save();

    	return redirect()->back();
    }

    public function edit($id)
    {
    	$data = daftarpegawaiModel::find($id);
    	return view('edit', compact('data'));
    }

    public function update(Request $request)
    {

    	// dd($request->all());


        $data = daftarpegawaiModel::find($request->id);

        $categori_data = [
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
            'potongan' => $request->potongan,
            'pph21' => $request->pph21,
        ];

        $data->update($categori_data);

        return redirect()->route('home');
    }

    public function delete($id)
    {
    	$data = daftarpegawaiModel::find($id);
    	$data->delete();
    	return redirect()->route('home');
    }
}
