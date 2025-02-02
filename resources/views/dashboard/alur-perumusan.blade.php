@extends('layouts.main')

@section('title', 'Materi')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>ALUR  PERUMUSAN PANCASILA</h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card" style="background-color: #fff5dc; border: 7px solid #b2783f;">
            <div class="card-body">
                <div class="inner-card p-3">
                    <div class="row">
                        <center>
                            <div class="col-lg-5">
                              <a href="{{ route('bpupki') }}">  <img src="{{ url('/') }}/assets/images/alur-perumusan/bpupki.png" alt="" class="img-fluid  img-materi-bpupki" srcset=""></a>
                             </div>
                             <div class="col-lg-5">
                                <img src="{{ url('/') }}/assets/images/alur-perumusan/panah.png" alt="" class="img-fluid img-panah" srcset="">
                             </div>
                             <div class="col-lg-5">
                              <a href="  {{ route('panitia') }} "><img src="{{ url('/') }}/assets/images/alur-perumusan/panitia-sembilan.png" alt="" class="img-fluid  img-materi-bpupki" srcset=""></a>
                             </div>
                             <div class="col-lg-5">
                                <img src="{{ url('/') }}/assets/images/alur-perumusan/panah.png" alt="" class="img-fluid img-panah" srcset="">
                             </div>
                             <div class="col-lg-5">
                              <a href="{{ route('ppki') }} ">   <img src="{{ url('/') }}/assets/images/alur-perumusan/ppki.png" alt="" class="img-fluid  img-materi-bpupki" srcset=""></a>
                             </div>
                             <div class="col-lg-5">
                                <img src="{{ url('/') }}/assets/images/alur-perumusan/panah.png" alt="" class="img-fluid img-panah" srcset="">
                             </div>
                             <div class="col-lg-5">
                            <a href="{{ route('pengesahan') }}">    <img src="{{ url('/') }}/assets/images/alur-perumusan/pengesahan.png" alt="" class="img-fluid  img-materi-bpupki" srcset=""></a>
                             </div>

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
