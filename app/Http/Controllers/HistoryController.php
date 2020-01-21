<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\kategori;
use App\bmi;

class HistoryController extends Controller
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

     public function __construct()
     {
         $this->middleware('auth:web');
     }

    public function index()
    {
      $user = User::all();
      $kategori = kategori::all();
      $bmi = bmi::where('USER_ID',Auth::user()->id)->get();
      $data = array(
        'user' => $user,
        'bmi' => $bmi,
        'kategori' => $kategori
      );
      return view('history')->with($data);


      // return view('history', [
      //   'user' => $user,
      //   'bmi' => $bmi,
      //   'kategori' => $kategori
      //   ]);
    }

    // public function hitungIMT(Request $request)
    // {
    //   if(Auth::user()==null){
    //     return redirect()->route('login');
    //   }
    //   $pembagi=$request->tb/100;
    //   $pembagi2=$pembagi*$pembagi;
    //   $nilai=$request->bb/$pembagi2;
    //   $kode=Auth::user()->id;
    //
    //   bmi::create([
    //     'nilai' => $nilai,
    //     'DATE' => date('Y-m-d'),
    //     'ID_KATEGORIS' => 2,
    //     'USER_ID' => $kode
    //   ]);
    //    return redirect()->back();
    // }
}
