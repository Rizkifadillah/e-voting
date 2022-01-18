<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\User;

class MahasiswaController extends Controller
{
    public function index(){
        $title = 'Mahasiswa';

        $data = Mahasiswa::orderBy('nama','asc')->get();
        return view('Dashboard.mahasiswa.index',compact('title','data'));
    }

    public function add(){
        $title = 'Add Mahasiswa';
        return view('Dashboard.mahasiswa.add',compact('title'));
    }

    public function store(Request $request){
        //validasi
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        //variable array data yg ingin di isi
        $nik = $request->nik;
        $nama = $request->nama;
        $no_telpon = $request->no_telpon;
        $alamat = $request->alamat;
        $email = $request->email;
        $password = $request->password;

        //cek photo
        $file = $request->file('photo');
        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('photo_mahasiswa',$nama_photo);
            $photo = 'photo_mahasiswa/'.$nama_photo;
        }else{
            $photo = '';
        }
        
        $user = new User;
        $user->role = 1;
        $user->name = $nama;
        $user->email = $email;
        $user->photo = $photo;
        $user->password = bcrypt($password);
        $user->save();

        $data = new Mahasiswa;
        $data->user_id = $user->id;
        $data->nik = $nik;
        $data->nama = $nama;
        $data->no_telpon = $no_telpon;
        $data->alamat = $alamat;
        $data->photo = $photo;
        $data->save();


        \Session::flash('berhasil','Pendaftaran sedang diperoses, Silahkan Login!!');

        return redirect('mahasiswa');
        

    }

    public function edit($id){
        $title = 'Edit Mahasiswa';
        $data = Mahasiswa::find($id);
        $user = User::find($data->user_id);
        // dd($user);
        return view('Dashboard.mahasiswa.edit',compact('title','data','user'));
    }

    public function update(Request $request,$id){
        //validasi
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required'
        ]);

        $nik = $request->nik;
        $nama = $request->nama;
        $no_telpon = $request->no_telpon;
        $alamat = $request->alamat;
        $email = $request->email;
        $password = $request->password;

        $data = Mahasiswa::find($id);

        //cek photo
        $file = $request->file('photo');
        if($file){
            $nama_photo = rand().$file->getClientOriginalName();
            $file->move('photo_mahasiswa',$nama_photo);
            $photo = 'photo_mahasiswa/'.$nama_photo;
        }else{
            // $photo = '';
        }

        $user = User::find($data->user_id);
        // $user->role = 1;
        $user->name = $nama;
        $user->email = $email;
        // $user->password = bcrypt($password);
        $user->save();

        // $data = new Mahasiswa;
        // $data->user_id = $user->id;
        $data->nik = $nik;
        $data->nama = $nama;
        $data->no_telpon = $no_telpon;
        $data->alamat = $alamat;
        $data->photo = $photo;
        $data->save();

        \Session::flash('berhasil','Pendaftaran sedang diperoses, Silahkan Login!!');

        return redirect('mahasiswa');
        

    }

    public function delete($id){
        Mahasiswa::where('id',$id)->delete();

        \Session::flash('berhasil','Pendaftaran sedang diperoses, Silahkan Login!!');

        return redirect('mahasiswa');

    }
}
