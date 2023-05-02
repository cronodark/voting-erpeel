@extends('layouts.layout')
@section('content')
    <div class="container-xl pt-2 px-5">
        <div class="row section-title">
            <h2 class="fs-4">Koordinator Jurusan</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="{{asset('assets/images/member-01.jpg')}}"
                        alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">Ca Kojur 1</h4>
                    <h6 class="fs-5 mt-2">Visi:</h6>
                    <p class="text-dark mt-2 mb-3 fs-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut,
                        error?</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary fw-bolder px-4 fs-6 me-5"><span><i class="bi bi-pass-fill"></i></span> Misi</button>
                    <button class="btn btn-success fw-bolder px-4 fs-6"><span><i class="bi bi-clipboard-check-fill"></i></span> Vote</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="{{asset('assets/images/member-02.jpg')}}"
                        alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">Ca Kojur 2</h4>
                    <h6 class="fs-5 mt-2">Visi:</h6>
                    <p class="text-dark mb-3 fs-8">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis, suscipit?</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary fw-bolder px-4 me-5 fs-6"><span><i class="bi bi-pass-fill"></i></span> Misi</button>
                    <button class="btn btn-success fw-bolder px-4 fs-6"><span><i class="bi bi-clipboard-check-fill"></i></span> Vote</button>
                </div>
            </div>
        </div>

        <div class="row section-title">
            <h2 class="fs-4">Wakil Koordinator Jurusan</h2>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="{{asset('assets/images/member-03.jpg')}}"
                        alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">Ca Kojur 1</h4>
                    <h6 class="fs-5 mt-2">Visi:</h6>
                    <p class="text-dark mt-2 mb-3 fs-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut,
                        error?</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary fw-bolder px-4 fs-6 me-5"><span><i class="bi bi-pass-fill"></i></span> Misi</button>
                    <button class="btn btn-success fw-bolder px-4 fs-6"><span><i class="bi bi-clipboard-check-fill"></i></span> Vote</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="{{asset('assets/images/member-04.png')}}"
                        alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">Ca Kojur 2</h4>
                    <h6 class="fs-5 mt-2">Visi:</h6>
                    <p class="text-dark mt-2 mb-3 fs-8">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis, suscipit?</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary fw-bolder px-4 fs-6 me-5"><span><i class="bi bi-pass-fill"></i></span> Misi</button>
                    <button class="btn btn-success fw-bolder px-4 fs-6"><span><i class="bi bi-clipboard-check-fill"></i></span> Vote</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="molist">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nibh et felis interdum
                            accumsan. Pellentesque elit odio, interdum quis ante in, varius rhoncus orci.</li>
                        <li>Etiam laoreet dapibus ante at mollis. Morbi lobortis ultricies risus, in faucibus est
                            blandit eu. Nunc nec imperdiet elit.</li>
                        <li>Praesent eget massa finibus, placerat tortor sed, pretium justo. Aenean et lectus accumsan,
                            tincidunt metus sit amet, laoreet nunc.</li>
                        <li>In et tincidunt est. Sed neque sapien, ultricies a orci et, fringilla egestas nibh. Sed
                            luctus eros et erat suscipit fermentum.</li>
                        <li>Cras blandit orci quis purus placerat tincidunt. Nunc ullamcorper iaculis nibh, sed dapibus
                            dui lobortis nec.</li>
                        <li>Sed tristique ante ac rhoncus facilisis. Maecenas hendrerit velit a interdum convallis.
                            Vivamus tempus eu justo nec rutrum. Praesent sollicitudin interdum nisl, at sollicitudin
                            justo interdum vel</li>
                        <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Nunc eget orci maximus, tincidunt nulla molestie, porta nisi. Integer fringilla
                            lorem at lacinia iaculis. </li>
                        <li>Maecenas tempus libero laoreet est facilisis, vitae iaculis dui eleifend. Proin eget magna
                            vitae diam dictum interdum at at nulla. Fusce eu porttitor felis. Aenean pretium lacinia
                            nunc ut convallis.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
