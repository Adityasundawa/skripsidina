@extends('layouts.main')

@section('title', 'Materi')

@section('custom-css')
<style>
    .form-control::placeholder {
      font-style: italic;
    }
  </style>
@endsection
@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1>Latihan Soal
        </h1>
</div>
<div class="container">
    <div class="col-12">
        <div class="card custom-card"
            style="background-color: #fff5dc; border: 7px solid #b2783f; width: auto; height: auto;">
            <div class="card-body">
                <form action="{{ route('soal.show',1) }}" method="get">
                    @csrf
                    <div class="inner-card p-3" style="max-height: 600px; overflow-y: auto;">
                        <h5 class="text-center"> SIAPA KAMU??</h5>
                        <div class="form-group">
                           <input type="text" class="form-control" style="background-color: #fff5dc; border: 0px;   border-bottom: 2px solid #b2783f; " name="nama" id="nama" aria-describedby="textHelp" placeholder="Masukan Nama Lengkapmu Disini">
                         </div>
                         <div class="form-group mt-2">
                           <input type="text" class="form-control" style="background-color: #fff5dc; border: 0px;   border-bottom: 2px solid #b2783f;" name="nama_absen" id="nama" aria-describedby="textHelp" placeholder="Masukan Nomor Absenmu Disini">
                         </div>
                  <center>
                   <button class="btn  mt-3 btn-success"><b>MULAI</b></button>
                  </center>


                   </div>
                </form>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"  role="document">
      <div class="modal-content" style="background-color: #fff5dc; border: 3px solid #b2783f">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitle">Petunjuk!</h5>

        </div>
        <div class="modal-body text-justify">
            Pada halaman ini kamu akan mengerjakan soal latihan dalam bentuk pilihan ganda sebanyak 20 butir soal untuk mengukur pemahamanmu.
            Pilih jawaban yang kamu anggap paling benar dengan mengklik. <br>
            Silahkan klik Oke untuk mengerjakan soal latihan ini. <br>
            Selamat mengerjakan!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>
@endsection



@section('custom-js')
<script>

    // Menampilkan modal saat halaman selesai dimuat
    $(document).ready(function(){
      $('#myModal').modal('show');
    });
  </script>
@endsection
