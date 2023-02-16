<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PenumpangModels;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DashboarPenumpangController extends Controller
{
    public function index()
    {   
        
       
        return view('dashboard.p', [
            "daftar_penumpang" => PenumpangModels::filter(request(['search', 'tujuan_id']))->paginate(5)->appends(request()->all()),
            "tujuan" => Tujuan::all(),
        ]);

        // return view('dashboard.p', compact('daftar_penumpang'));
    }
    public function show(PenumpangModels $penumpang)
    {
        // return view('Penumpang.detail',compact('penumpang'));
        return view('dashboard.penumpang.detail', [
            "penumpang" => $penumpang
        ]);
    }

    public function create()
    {
        return view('dashboard.penumpang.create', [
            'tujuan' => Tujuan::all()
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tujuan_id' => 'required',
            'no_pendaftaran' => 'required',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ]);

        PenumpangModels::create($validateData);
        return redirect('/dashboard/p')->with('succes', 'Penumpang baru ditambahkan !');
    }

    public function destroy(PenumpangModels $penumpang)
    {
        PenumpangModels::destroy($penumpang->id);
        return redirect('/dashboard/p')->with('succes', 'Data berhasil dihapus !');
    }

    public function edit(PenumpangModels $penumpang)
    {
        return view('dashboard.penumpang.edit', [
            "penumpang" => $penumpang,
            "tujuan" => Tujuan::all()
        ]);
    }

    public function update(Request $request, PenumpangModels $penumpang)
    {
        $rules = [
            'tujuan_id' => 'required',
            'no_pendaftaran' => 'disable',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ];

        $validateData = $request->validate($rules);

        PenumpangModels::where('id', $penumpang->id)->update($validateData);
        return redirect('/dashboard/p')->with('succes', 'Data Penumpang berhasil diedit !');

        // $penumpang = PenumpangModels::find($penumpang);
        // $penumpang->update($request->except(['submit']));
        // return redirect('/Penumpang/all');
    }
    public function search()
    {
        // function for search name 
        $search = request()->query('search');

        if ($search) {
            // session(['search' => $search]);
            $daftar_penumpang = PenumpangModels::where('nama', 'LIKE', "%{$search}%")
                ->orWhere('no_pendaftaran', 'LIKE', "%{$search}%")
                ->orWhere('tujuan_id', 'LIKE', "%{$search}%")->orWhere('tanggal', 'LIKE', "%{$search}%")->orWhere('alamat', 'LIKE', "%{$search}%")
                ->paginate(5);
            $daftar_penumpang->withPath('');
            $daftar_penumpang->appends(request()->all());
        } else {
            $daftar_penumpang = PenumpangModels::paginate(5);
        }
        return view('dashboard.p', ['daftar_penumpang' => $daftar_penumpang, 'tujuan' => Tujuan::all()]);
    }


    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('nama', 'like', '%' . $filters['search'] . '%')->orWhere('alamat', 'like', '%' . $filters['search'] . '%');
        }
        if (isset($filters['tujuan_id']) ? $filters['tujuan_id'] : false) {
            return $query->where('tujuan_id', 'like', '%' . $filters['tujuan_id'] . '%');
        }
    }
}
