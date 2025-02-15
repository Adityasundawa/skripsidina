
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customizable Button and Text</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/style-utama.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Vampiro+One&display=swap" rel="stylesheet">
</head>

<body>
  <div class="full-background"></div> <!-- Menambahkan div untuk gambar background penuh -->

  <!-- Menambahkan gambar p1.png di tengah -->
  <img src="assets/images/halaman-utama/3.png" alt="Image P1" class="left-image">
  <img src="assets/images/halaman-utama/1.png" alt="Image P1" class="middle-image">
  <img src="assets/images/halaman-utama/2.png" alt="Image P1" class="right-image">
  <p class="vampiro-one-regular">Bangsa</p>
  <p class="text-bawah">Bersama Meneladani Para Pahlawan</p>
  <a href="{{ route('menu') }}"><div class="button-container">
    <button class="play-button"></button>
  </div></a>


<audio controls id="music" style="display: none" >

    <source src="{{ asset('assets/opening.mp3') }}" type="audio/mpeg">
  </audio>
</body>
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
</html>
