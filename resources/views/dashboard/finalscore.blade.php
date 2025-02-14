@extends('layouts.main')

@section('content')
    {{-- <div class="d-flex justify-content-center mt-5">
        <h1>Skor Anda</h1>
    </div>
    <div class="container">
        <div class="col-12 text-center mt-5">

            <h2>Skor Anda: {{ $correctAnswersCount * 5 }}</h2>
            <p>Terima kasih {{ $nama }} No Absen {{ $namaAbsen }}  telah mengikuti ujian!</p>
        </div>
    </div> --}}

    <div class="container mt-3">
        <div class="card custom-card"
    style="background-color: #fff5dc; border: 7px solid #b2783f; width: auto; height: auto;">
    <div class="card-body">
        <div class="inner-card p-3" style="max-height: 600px; overflow-y: auto;">
              <h2 class="text-success text-center">SELAMAT</h2>
              <h3 class="text-danger text-center">Kamu telah menyelesaikan semua soal</h3>
              <h3 class="text-center">{{ $nama }}</h3>
              <h3 class="text-primary text-center">Skor Kamu</h3>
              <div class="card" style="background-color: #fff5dc; border: 7px solid #500912;">
                <div class="card-body">
                    <h3 class="text-center mt-2"> {{ $correctAnswersCount * 5 }}</h3>
                </div>
              </div>
              <div class="row mt-3">

                <div class="col-6">
                    <a href="{{ route('soal.nama') }}" class="btn btn-danger btn-lg btn-block">Ulangi Mengerjakan</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('menu') }}" class="btn btn-success btn-lg btn-block">Kembali Ke Menu</a>
                </div>
              </div>
        </div>
    </div>
</div>
    </div>

@endsection
