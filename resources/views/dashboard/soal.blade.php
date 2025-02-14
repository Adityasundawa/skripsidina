@extends('layouts.main')

@section('title', 'Materi')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Soal {{ $question->id }} / {{ count($count) }}</h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card"
            style="background-color: #fff5dc; border: 7px solid #b2783f; width: auto; height: auto;">
            <div class="card-body">
                <div class="inner-card p-3">
                  {{ $question->question }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-2">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-a" onclick="tandaiJawaban(this, 'A', '{{ $question->correct_answer }}')">
                    <div class="card-body">
                        A . {{ $question->option_a }}
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-b" onclick="tandaiJawaban(this, 'B', '{{ $question->correct_answer }}')">
                    <div class="card-body">
                        B . {{ $question->option_b }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-c" onclick="tandaiJawaban(this, 'C', '{{ $question->correct_answer }}')">
                    <div class="card-body">
                        C . {{ $question->option_c }}
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-5 col-md-4 col-lg-3 mt-2">
                <div class="card custom-card-soal" id="soal-d" onclick="tandaiJawaban(this, 'D', '{{ $question->correct_answer }}')">
                    <div class="card-body">
                        D . {{ $question->option_d }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection


@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function tandaiJawaban(element, selectedAnswer, correctAnswer) {
        // Reset semua card
        let cards = document.querySelectorAll('.custom-card-soal');
        cards.forEach(function(card) {
            card.classList.remove('correct', 'incorrect');
        });

        // Tandai card yang diklik
        if (selectedAnswer === correctAnswer) {
            element.classList.add('correct');
            Swal.fire({
                title: 'HEBAT!',
                text: 'JAWABAN KAMU BENAR',
                icon: 'success',
                allowOutsideClick: false,

                confirmButtonText: '{{ $question->id === $lastQuestion->id ? "Selesai" : "Soal Berikutnya -->" }}',
                preConfirm: function() {
                    // Jika ini soal terakhir, arahkan ke halaman selesai, jika tidak, lanjutkan ke soal berikutnya
                    if ('{{ $question->id === $lastQuestion->id }}') {
                        window.location.href = '{{ route('final.score') }}';  // Halaman selesai ujian
                    } else {
                        let nextQuestionId = parseInt('{{ $question->id }}') + 1;
                        window.location.href = '{{ route('soal.show', ['id' => ':id']) }}'.replace(':id', nextQuestionId);
                    }
                }
            });
        } else {
            element.classList.add('incorrect');
            Swal.fire({
                title: 'O...oooo!',
                text: 'JAWABAN KAMU BELUM TEPAT',
                icon: 'error',
                allowOutsideClick: false,

                confirmButtonText: '{{ $question->id === $lastQuestion->id ? "Selesai" : "Soal Berikutnya -->" }}',
                preConfirm: function() {
                    // Jika ini soal terakhir, arahkan ke halaman selesai, jika tidak, lanjutkan ke soal berikutnya
                    if ('{{ $question->id === $lastQuestion->id }}') {
                        window.location.href = '{{ route('final.score') }}';  // Halaman selesai ujian
                    } else {
                        let nextQuestionId = parseInt('{{ $question->id }}') + 1;
                        window.location.href = '{{ route('soal.show', ['id' => ':id']) }}'.replace(':id', nextQuestionId);
                    }
                }
            });
        }

        // Menyimpan jawaban pengguna
        $.ajax({
            url: '{{ route('store.answer', ['id' => $question->id]) }}',
            method: 'POST',
            data: {
                answer: selectedAnswer,
                _token: '{{ csrf_token() }}'
            }
        });
    }
</script>
@endsection
