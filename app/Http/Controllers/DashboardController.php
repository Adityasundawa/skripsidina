<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleChoiceQuestions;

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

     public function profil(){
        return view('dashboard.profil');
     }

     public function soal(Request $request,$id)
     {
         $question = MultipleChoiceQuestions::find($id);
         if (!$question) {
             return 'Soal tidak ditemukan!';
         }

         if ($id == 1) {
            session([
                'nama' => $request['nama'],
                'nama_absen' => $request['nama_absen']
            ]);

         }
         $nextQuestion = MultipleChoiceQuestions::where('id', '>', $id)->orderBy('id')->first();

         $lastQuestion = MultipleChoiceQuestions::orderBy('id', 'desc')->first();
         $count = MultipleChoiceQuestions::all();
         $userAnswers = session('user_answers', []);

         return view('dashboard.soal', compact('question', 'nextQuestion', 'lastQuestion','userAnswers','count'));
     }

     public function storeAnswer(Request $request, $id)
     {
         // Menyimpan jawaban pengguna dalam session
         $userAnswers = session('user_answers', []);
         $userAnswers[$id] = $request->input('answer');
         session(['user_answers' => $userAnswers]);

         return response()->json(['status' => 'success']);
     }


     public function showFinalScore()
     {
         $userAnswers = session('user_answers', []);
         $correctAnswersCount = 0;
         $nama = session('nama');
         $namaAbsen = session('nama_absen');
         foreach ($userAnswers as $questionId => $answer) {
             $question = MultipleChoiceQuestions::find($questionId);
             if ($question && $question->correct_answer === $answer) {
                 $correctAnswersCount++;
             }
         }

         $totalQuestions = MultipleChoiceQuestions::count(); // Total jumlah soal


         return view('dashboard.finalscore', compact('correctAnswersCount', 'totalQuestions','nama','namaAbsen'));
     }




}

