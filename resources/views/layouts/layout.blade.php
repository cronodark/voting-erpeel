<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Menyambungkan dengan file css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    {{-- boostrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>E-Voting | RPL</title>


</head>

<body>

    <div class="header container-fluid bg-white">
        <div id="menu-jk" class="nav-col text-white shadow-md mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-4 align-items-start">
                        <h1 class="text-dark fs-4">Voting RPL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="container">
        <footer class="justify-content-center align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">© 2023 SMKN 1 Cimahi | RPL</span>
            </div>
        </footer>
    </div>

    {{-- Memanggil file js --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery-scrolltofixed-min.js"
        integrity="sha512-ohXbv1eFvjIHMXG/jY057oHdBZ/jhthP1U3jES/nYyFdc9g6xBpjDjKIacGoPG6hY//xVQeqpWx8tNjexXWdqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    {{-- js custom --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
