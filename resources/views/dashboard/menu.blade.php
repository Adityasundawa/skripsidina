
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
</head>

<body>
    <a href="javascript:history.back()" style="position: absolute; top: 10px; left: 10px;">
        <img src="assets/images/LOGO PETUNJUK/icon-keluar.png" alt="Icon" class="img-fluid" style="width: 50px; height: 40px;">
    </a>

    <div class="d-flex justify-content-center mt-5">
        <h1>Menu Utama</h1>
    </div>
    <div class="container">

        <div class="col-12 mt-5">
            <div class="row">
                <!-- Left Column -->
             <div class="col-lg-12">
                    <div class="row">
                     <div class="col-lg-4  d-flex justify-content-center">
                        <a href="{{ route('petunjuk') }}"><img src="{{ url('/') }}/assets/images/button/1.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>
                     <div class="col-lg-4  d-flex justify-content-center">
                        <a href="{{ route('cp') }}"><img src="{{ url('/') }}/assets/images/button/2.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>
                      <div class="col-lg-4  d-flex justify-content-center">
                        <a href="{{ route('materi') }}"><img src="{{ url('/') }}/assets/images/button/3.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>
                     <div class="col-lg-4  d-flex justify-content-center">
                     <a href="{{ route('soal.nama') }}">    <img src="{{ url('/') }}/assets/images/button/4.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>
                     <div class="col-lg-4  d-flex justify-content-center">
                        <a href="{{ route('profil') }}"> <img src="{{ url('/') }}/assets/images/button/5.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>
                     <div class="col-lg-4  d-flex justify-content-center">
                        <a href="{{ route('sumber') }}"> <img src="{{ url('/') }}/assets/images/button/6.png" alt="Contoh Gambar" class="img-fluid-menu"></a>
                     </div>

                    </div>
                </div>



                <!-- Right Column -->


            </div>
        </div>
    </div>
</body>
</html>
