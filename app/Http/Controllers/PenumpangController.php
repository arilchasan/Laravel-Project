<?php

namespace App\Http\Controllers;

use App\Models\PenumpangModels;
use App\Models\Tujuan;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\Image\Png;
use Dflydev\DotAccessData\Data;
use Faker\Core\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Stmt\Label;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;
use Termwind\Components\Raw;

class PenumpangController extends Controller
{
    public function index()
    {   
        return view('Penumpang.all',[
            "daftar_penumpang" => PenumpangModels::filter(request(['search', 'tujuan_id']))->paginate(6)->appends(request()->all()),
            "tujuan" => Tujuan::all(),
       
        ]); 
    }
    public function show(PenumpangModels $penumpang)
    {
        // return view('Penumpang.detail',compact('penumpang'));
        return view('Penumpang.detail',[
            "penumpang" => $penumpang
        ]);
    }
    
    public function create(){
        return view('Penumpang.create',[
            'tujuan' => Tujuan::all()
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'tujuan_id' => 'required',
            'no_pendaftaran' => 'required',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ]);

        PenumpangModels::create($validateData);
        return redirect('/Penumpang/all')->with('succes', 'Penumpang baru ditambahkan !');
    }

    public function destroy(PenumpangModels $penumpang){
        PenumpangModels::destroy($penumpang->id);
        return redirect('/Penumpang/all')->with('succes','Data berhasil dihapus !');
    }

    public function edit(PenumpangModels $penumpang)
    {
        return view('Penumpang.edit', [
            "penumpang" => $penumpang,
            "tujuan" => Tujuan::all()
        ]);
    }

    public function update(Request $request, PenumpangModels $penumpang)
    {
        $rules = [
            'no_pendaftaran' => 'disable',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ];

         $validateData = $request->validate($rules);

        PenumpangModels::where('id', $penumpang->id)
            ->update($validateData);
        return redirect('/Penumpang/all')->with('succes', 'Data Penumpang berhasil diupdate !');

        // $penumpang = PenumpangModels::find($penumpang);
        // $penumpang->update($request->except(['submit']));
        // return redirect('/Penumpang/all');
    }

        
   
    
}
