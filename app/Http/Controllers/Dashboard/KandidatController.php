<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Kandidat;

class KandidatController extends Controller
{
    public function index(){
        $title= 'Kandidat';
        $data = Kandidat::orderBy('no_urut','asc')->get();

        return view('dashboard.kandidat.index',compact('title','data'));
    }

    public function add(){
        $title= 'Tambah Kandidat';
        $mahasiswa = Mahasiswa::orderBy('nama','asc')->get();

        return view('dashboard.kandidat.add',compact('title','mahasiswa'));
    }

    public function store(Request $request){
        //validasi
        $this->validate($request,[
            'no_urut' => 'required',
            'calon_ketua' => 'required',
            'calon_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        //variable array data yg ingin di isi
        $data['no_urut'] = $request->no_urut;
        $data['calon_ketua'] = $request->calon_ketua;
        $data['calon_wakil'] = $request->calon_wakil;
        $data['visi'] = $request->visi;
        $data['misi'] = $request->misi;

        Kandidat::insert($data);

        \Session::flash('berhasil','Pendaftaran sedang diperoses, Silahkan Login!!');

        return redirect('kandidat');
        

    }

    public function show($id){
        $title= 'Edit Kandidat';
        $dt = Kandidat::find($id);
        // $mahasiswa = Mahasiswa::orderBy('nama','asc')->get();

        return view('dashboard.kandidat.show',compact('title','dt'));
    }

    public function edit($id){
        $title= 'Edit Kandidat';
        $dt = Kandidat::find($id);
        $mahasiswa = Mahasiswa::orderBy('nama','asc')->get();

        return view('dashboard.kandidat.edit',compact('title','mahasiswa','dt'));
    }

    public function update(Request $request, $id){
        //validasi
        $this->validate($request,[
            'no_urut' => 'required',
            'calon_ketua' => 'required',
            'calon_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        //variable array data yg ingin di isi
        $data['no_urut'] = $request->no_urut;
        $data['calon_ketua'] = $request->calon_ketua;
        $data['calon_wakil'] = $request->calon_wakil;
        $data['visi'] = $request->visi;
        $data['misi'] = $request->misi;

        Kandidat::where('id',$id)->update($data);

        \Session::flash('berhasil','Berhasil di Edit');

        return redirect('kandidat');
        

    }

    public function delete($id){
        Kandidat::where('id',$id)->delete();

        \Session::flash('berhasil','Berhasil Di hapus, Silahkan Login!!');

        return redirect('kandidat');

    }

}
