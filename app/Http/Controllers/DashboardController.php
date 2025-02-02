<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       return view('dashboard.index');
    }

    public function menu(){
        return view('dashboard.menu');
     }
     public function petunjuk(){
        return view('dashboard.petunjuk');
     }
     public function cp(){
        return view('dashboard.cp');
     }
     public function materi(){
        return view('dashboard.materi');
     }

     public function alur(){
        return view('dashboard.alur-perumusan');
     }
     public function bpupki(){
        return view('dashboard.bpupki');
     }

     public function panitia(){
        return view('dashboard.panitia');
     }

     public function ppki(){
        return view('dashboard.ppki');
     }
     public function pengesahan(){
        return view('dashboard.pengesahan');
     }
     public function tokoh(){
        return view('dashboard.tokoh');
     }



}
