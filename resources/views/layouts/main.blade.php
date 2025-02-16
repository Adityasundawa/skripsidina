<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Skripsi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    @yield('custom-css')
</head>

<body>
    <a href="javascript:history.back()" style="position: absolute; top: 10px; left: 10px;">
        <img src="{{ url('/') }}/assets/images/LOGO PETUNJUK/icon-keluar.png" alt="Icon" class="img-fluid button-back" style="width: 50px; height: 40px;">
    </a>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function changeColor(button) {
            const card = button.closest('.card');
            const colors = [
                { bg: '#f8d7da', border: '#f5c6cb' }, // merah muda
            ];

            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            card.style.backgroundColor = randomColor.bg;
            card.style.borderColor = randomColor.border;
        }
    </script>

@yield('custom-js')



</body>

</html>
