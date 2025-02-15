@extends('layouts.main')

@section('title', 'Materi')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Materi</h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card" style="background-color: #fff5dc; border: 7px solid #b2783f;">
            <div class="card-body">
                <div class="inner-card p-3">
                    <div class="row">
                        <!-- Kolom pertama (Kiri pada desktop, Atas pada mobile) -->
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <div class="col-12">
                                <center>
                                    <div class="d-flex justify-content-center flex-column align-items-center">
                                        <div class="col-12">
                                            <img src="{{ url('/') }}/assets/images/materi/garuda.png" alt="Garuda" class="img-fluid img-materi-garuda">
                                        </div>
                                        <div class="col-12">
                                          <a href="{{ route('alur') }}">  <img src="{{ url('/') }}/assets/images/materi/alur.png" alt="Alur" class="img-fluid img-materi-alur"></a>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <!-- Kolom kedua (Kanan pada desktop, Bawah pada mobile) -->
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                           <div class="col-12">
                            <center>
                                <div class="d-flex justify-content-center flex-column align-items-center">
                                    <div class="col-12">
                                        <img src="{{ url('/') }}/assets/images/materi/pahlawan.png" alt="Garuda" class="img-fluid img-materi-garuda">
                                    </div>
                                    <div class="col-12">
                                         <a href="{{ route('tokoh') }}"><img src="{{ url('/') }}/assets/images/materi/karakter.png" alt="Alur" class="img-fluid img-materi-alur"></a>
                                    </div>
                                </div>
                            </center>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<audio controls id="music" style="display: none" >

    <source src="{{ asset('assets/materi.mp3') }}" type="audio/mpeg">
  </audio>
@endsection


@section('custom-js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
function PlayMusic() {

var play=document.getElementById("music");
play.play();
}

$(document).ready(function(){
setTimeout(PlayMusic,3000);
})

</script>

@endsection

