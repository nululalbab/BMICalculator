<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\kategori;
use App\bmi;

class IMTController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function hitungIMT(Request $request)
    {
      if(Auth::user()==null){
        return redirect()->route('login');
      } else{
        $pembagi=$request->tb/100;
        $pembagi2=$pembagi*$pembagi;
        $nilai=$request->bb/$pembagi2;
        $kode=Auth::user()->id;

        if($nilai<18.4){
          bmi::create([
            'nilai' => $nilai,
            'DATE' => date('Y-m-d'),
            'ID_KATEGORIS' => 1,
            'USER_ID' => $kode
          ]);
        }else if($nilai>18.4 && $nilai<24.9){
          bmi::create([
            'nilai' => $nilai,
            'DATE' => date('Y-m-d'),
            'ID_KATEGORIS' => 2,
            'USER_ID' => $kode
          ]);
        }else if($nilai>24.9){
          bmi::create([
            'nilai' => $nilai,
            'DATE' => date('Y-m-d'),
            'ID_KATEGORIS' => 3,
            'USER_ID' => $kode
          ]);
        }

      }

       return redirect('/history');
    }
}
