<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Voting;
use App\Models\Kandidat;

class BerandaController extends Controller
{
    public function index(){
        $title = 'Beranda';

        $hasil = [];
        $kandidat = Kandidat::get();
        
         foreach ($kandidat as $key => $kd) {
            # code...
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id',$id_kandidat)->count();

            $a['name'] = 'No Urut:'.$no_urut;
            $a['y'] = $total;
            $data = array_push($hasil, $a);
            // dd($a);
        }

        return view('Dashboard.beranda.index',compact('title','hasil'));
    }

    // public function grafik(){
    //     $title = 'Grafik';
    //     return view('Dashboard.beranda.index',compact('title'));
    // }
}
