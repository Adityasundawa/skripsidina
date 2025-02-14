<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function nama(){
        return view('soal.nama');
     }
     public function selesai(){
        return 'selesai';
     }

}
