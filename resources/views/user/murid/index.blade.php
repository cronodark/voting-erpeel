<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Menyambungkan dengan file css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
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
                    <div class="col-lg-6 pt-2 pb-2 align-items-center">
                        <img class="max-230 mt-2" src="assets/images/logo.png" alt="">
                        <a data-bs-toggle="collapse" data-bs-target="#menu"
                            class="float-end text-dark d-lg-none pt-1 ps-3"><i class="bi pt-1 fs-1 cp bi-list"></i></a>
                    </div>
                    <div id="menu" class="col-lg-6 d-none d-lg-block">
                        <ul class="float-end mul d-inline-block">
                            <li class="float-md-start px-4 pe-1 pt-4">
                                <a href="result.html" class="fw-bold fs-8 text-primary"> View Result</a>
                            </li>
                            <li class="float-md-start px-4 pe-1 py-3">
                                <button class="btn fw-bold fs-8 btn-outline-primary px-5">Login</button>
                            </li>
                            <li class="float-md-start px-4 pe-1 py-3">
                                <button class="btn fw-bold fs-8 btn-primary">Register as Voter</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl pt-2 px-5">
        <div class="row section-title">
            <h2 class="fs-4">Koordinator Jurusan</h2>
        </div>
        <div class="row">
            @foreach ($ketua as $k)
                <div class="col-lg-6 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="assets/images/testimonial/member-01.jpg"
                            alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $k->name }}</h4>
                        <h6 class="fs-5">Visi:</h6>
                        <p class="text-dark mt-2 mb-3 fs-8">{{ $k->visi }}</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $k->id }}"
                            class="btn btn-primary fw-bolder px-4 fs-8">Misi</button>
                        <button class="btn btn-success fw-bolder px-4 fs-8">Vote</button>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row section-title">
            <h2 class="fs-4">Wakil Koordinator Jurusan</h2>
        </div>
        <div class="row mb-3">
            @foreach ($wakil as $w)
                <div class="col-lg-6 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="assets/images/testimonial/member-01.jpg"
                            alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $w->name }}</h4>
                        <h6 class="fs-5">Visi:</h6>
                        <p class="text-dark mt-2 mb-3 fs-8">{{ $w->visi }}</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $w->name }}"
                            class="btn btn-primary fw-bolder px-4 fs-8">Misi</button>
                        <button class="btn btn-success fw-bolder px-4 fs-8">Vote</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <footer class="justify-content-center align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">© 2023 SMKN 1 Cimahi | RPL</span>
            </div>
        </footer>
    </div>


    <!-- Modal -->
    @foreach ($ketua as $k)
        <div class="modal fade" id="exampleModal{{ $k->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Misi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="molist">
                            <li>{{ $k->misi }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($wakil as $w)
        <div class="modal fade" id="exampleModal{{ $w->name }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Misi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="molist">
                            <li>{{ $w->misi }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Memanggil file js --}}
    <script src="{{ asset('assets/js/bootstrap/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>

    {{-- js custom --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
