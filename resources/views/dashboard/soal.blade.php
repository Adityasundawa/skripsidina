@extends('layouts.main')

@section('title', 'Materi')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Soal</h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card"
            style="background-color: #fff5dc; border: 7px solid #b2783f; width: auto; height: auto;">
            <div class="card-body">
                <div class="inner-card p-3">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, corrupti necessitatibus repudiandae nostrum modi blanditiis nihil laudantium quia rem inventore ut error eum odit qui ea omnis voluptate! Placeat, enim.
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-2">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-a" onclick="tandaiJawaban(this, true)">
                    <div class="card-body">
                        A . Ini jawaban A
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-b" onclick="tandaiJawaban(this, false)">
                    <div class="card-body">
                        B . Ini jawaban B
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-c" onclick="tandaiJawaban(this, false)">
                    <div class="card-body">
                        C . Ini jawaban C
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-d" onclick="tandaiJawaban(this, false)">
                    <div class="card-body">
                        D . Ini jawaban D
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
    function tandaiJawaban(element, isCorrect) {
        // Reset semua card
        let cards = document.querySelectorAll('.custom-card-soal');
        cards.forEach(function(card) {
            card.classList.remove('correct', 'incorrect');
        });

        // Tandai card yang diklik
        if (isCorrect) {
            element.classList.add('correct');
        } else {
            element.classList.add('incorrect');
        }
    }
</script>
@endsection
