<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kandidat;
use App\Models\Mahasiswa;

use App\Models\Voting;
use App\Models\Periode;

class PemilihanController extends Controller
{
    public function index(){
        $title = 'Pemilihan';
        $data = Kandidat::orderBy('no_urut','asc')->get();

        return view('dashboard.pemilihan.index',compact('title','data'));
    }

    public function get_visi($id){
        $data = Kandidat::find($id);

        //mengambil data json
        return response()->json([
            'hasil'=>$data
        ]);
    }

    public function voting($id){

        $tanggal_sekarang = date('Y-m-d');
        $cek_periode = Periode::where('tanggal', $tanggal_sekarang)->count();

        if($cek_periode > 0){

            //mengambil data mahasiswa yg login
            $mahasiswa = Mahasiswa::where('user_id',\Auth::user()->id)->first();
            // di ambil id nya
            $id_mahasiswa = $mahasiswa->id;
            // lalu dicek apa kah 'calon_ketua dan calon wakil' termasuk $id_mahasiswa . lalu di count (dihitung jumblah nya)
            $cek = Kandidat::where('calon_ketua',$id_mahasiswa)->orWhere('calon_wakil',$id_mahasiswa)->count();
            // dd($cek);
            if($cek > 0 ){
                \Session::flash('gagal','Kamu dilarang ikut Pemilu');
                return redirect()->back();
            }else{
    
                // $data = new Voting;
                // $data->kandidat_id = $id;
                // $data->user_id = \Auth::user()->id;
                // $data->save();
        
                //firstOrCreate adalah untuk mengecek apa kah data yg di input suda ada atau belum
                //kalau sudah ada data tidak bisa di save
                $data = Voting::firstOrCreate(
                    ['user_id'=>\Auth::user()->id],
                    ['kandidat_id' => $id,'user_id'=>\Auth::user()->id]
                );
        
                \Session::flash('sukses','Pemilihan Sukses ');
                return redirect('pemilihan');
            }

        }else{
            \Session::flash('gagal','Kamu tidak bisa voting, Saat ini diluar Periode pemilihan');
            return redirect()->back();
        }

    }
}
