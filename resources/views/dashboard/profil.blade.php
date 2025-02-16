@extends('layouts.main')

@section('title', 'Materi')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Profil <br>
        Pengembang</h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card" style="background-color: #fff5dc; border: 7px solid #cfac89;">
            <div class="card-body">

               <center>
                <div class="col-6">
                    <div class="card"  style="background-color: #ffffff; border: 7px solid #cc7f0a;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                  <img src="{{ url('/') }}/assets/images/photo_2025-02-04_20-06-14.jpg" class="img-fluid" alt="" srcset="">
                                </div>
                                <div class="col-8 text-center  text-pengembang d-flex justify-content-center" >
                                    Dina Setyoningsih <br>NIM 210151601694 <br>S1 Pendidikan Guru Sekolah Dasar <br><br>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center" style="background-color: #cc7f0a; color: #ffffff;border: 7px solid #cc7f0a;">
                            <h4>UNIVERSITAS NEGERI MALANG</h4>
                        </div>
                    </div>
                </div>
               </center>
                <div class="row mt-5 d-flex justify-content-center">
                    <h2 class="text-center mb-4">
                        Dosen Pembimbing
                       </h2>
                    <div class="col-4">
                        <div class="card" style="background-color: #ffffff; border: 7px solid #cc7f0a;">
                            <div class="card-body">
                                <img src="{{ url('/') }}/assets/images/Sutarno-scaled-e1722622863512.jpg" alt="" class="img-fluid"
                                    srcset="">
                            </div>
                            <div class="card-footer text-center text-pengembang" style="background-color: #cc7f0a; color: #ffffff;border: 7px solid #cc7f0a;">
                               <h4> Dr. H. Sutarno, M.Pd</h4>
                            </div>
                        </div>

                    </div>
                     <div class="col-4">
                        <div class="card" style="background-color: #ffffff; border: 7px solid #cc7f0a;">
                            <div class="card-body">
                                <img src="{{ url('/') }}/assets/images/Sadun-Akbar-scaled-e1722622669360.jpg" alt="" class="img-fluid"
                                    srcset="">
                            </div>
                            <div class="card-footer text-center text-pengembang"  style="background-color: #cc7f0a; color: #ffffff;border: 7px solid #cc7f0a;">
                               <h4>  Prof. Dr. Sa’dun Akbar, M.Pd</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
