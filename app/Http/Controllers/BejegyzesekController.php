<?php

namespace App\Http\Controllers;

use App\Models\bejegyzesek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bejegyzesekController extends Controller
{
    public function bejegyzesek()
    {
        $bejegyzes=DB::table('bejegyzeseks as bej')
        ->join('tevekenysegs as tev','tev.tevekenyseg_id','=','bej.tevekenyseg_id')
        ->where('tev.tevekenyseg_id','=','bej.tevekenyseg_id');
        return view('bejegyzesek.bejegyzes',['bejegyzesek'=>$bejegyzes]);
    }
    public function osztaly_id($osztaly_id){
        $bejegyzesek=DB::table('bejegyzeseks as bej')
        ->where('bej.osztaly_id','=',$osztaly_id);
        return $bejegyzesek;
    }
    public function store(Request $request){
        $bejegyzes=new bejegyzesek();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->osztaly_id = $request->osztaly_id;
    }
}
