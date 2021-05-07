<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Periode;

class PeriodeController extends Controller
{
    public function index(){
        $title ='Periode';
        $dari = Periode::orderBy('tanggal','asc')->first();
        $sampai = Periode::orderBy('tanggal','desc')->first();

        $total = Periode::count();
        // dd($total);

        return view('dashboard.periode.index',compact('title','dari','sampai','total'));
    }

    public function set_periode(Request $request){
        $dari = $request->dari;
        $sampai = $request->sampai;
        
        $tanggal1 = date('Y-m-d',strtotime($dari));
        $tanggal2 = date('Y-m-d',strtotime($sampai));

        // update periode , data periode yg lama harus dihapus semua
        \DB::table('periode')->delete();

        while ($tanggal1 <= $tanggal2){
            $data = new Periode;
            $data->tanggal = $tanggal1;
            $data->save();

            $tanggal1 = date('Y-m-d',strtotime('+1 days',strtotime($tanggal1))); 
        }

        \Session::flash('sukses','Pemilihan Periode Sukses ');
        return redirect()->back();
    }
}
