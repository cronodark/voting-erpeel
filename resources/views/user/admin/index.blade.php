@extends('layouts.layout')
@section('content')
    <div class="container-xl" style="padding-top: 8rem;">
        <div class="row section-title m-0 p-0">
            <h2 class="text-center" style="color: #202020;">Hasil Voting Pemilihan</h2>
        </div>
        <div class="row section-title mt-3">
            <h2 class="fs-4 fw-lighter text-center" style="color: #202020;">Koordinator Jurusan</h2>
        </div>
        <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                    <div class="col-md-12 text-center">
                        <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-9 align-self-center text-center mt-3">
                        <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">Kevin Farhan H.</h4>
                        <p class="fs-6 mb-4 fw-bold" style="color: #202020;">Angkatan 48</p>
                        <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Voting : 205 Votes</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                    <div class="col-md-12 text-center">
                        <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-9 align-self-center text-center mt-3">
                        <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">Fajar Maulana S.</h4>
                        <p class="fs-6 mb-4 fw-bold" style="color: #202020;">Angkatan 48</p>
                        <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Voting : 205 Votes</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-title">
                <h2 class="fs-4 fw-lighter text-center" style="color: #202020;">Wakil Koordinator Jurusan</h2>
            </div>
            <div class="col-md-5 mb-4">
                <div class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                    <div class="col-md-12 text-center">
                        <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-9 align-self-center text-center mt-3">
                        <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">Faisal Luqmanul H.</h4>
                        <p class="fs-6 mb-4 fw-bold" style="color: #202020;">Angkatan 49</p>
                        <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Voting : 205 Votes</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                    <div class="col-md-12 text-center">
                        <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-9 align-self-center text-center mt-3">
                        <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">Arya M. Rafi</h4>
                        <p class="fs-6 mb-4 fw-bold" style="color: #202020;">Angkatan 49</p>
                        <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Voting : 205 Votes</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                style="width: 40%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">40%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">View Manifesto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="molist">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nibh et felis interdum
                            accumsan. Pellentesque elit odio, interdum quis ante in, varius rhoncus orci.</li>
                        <li>Etiam laoreet dapibus ante at mollis. Morbi lobortis ultricies risus, in faucibus est
                            blandit eu. Nunc nec imperdiet elit.</li>
                        <li>Praesent eget massa finibus, placerat tortor sed, pretium justo. Aenean et lectus
                            accumsan, tincidunt metus sit amet, laoreet nunc.</li>
                        <li>In et tincidunt est. Sed neque sapien, ultricies a orci et, fringilla egestas nibh. Sed
                            luctus eros et erat suscipit fermentum.</li>
                        <li>Cras blandit orci quis purus placerat tincidunt. Nunc ullamcorper iaculis nibh, sed
                            dapibus dui lobortis nec.</li>
                        <li>Sed tristique ante ac rhoncus facilisis. Maecenas hendrerit velit a interdum convallis.
                            Vivamus tempus eu justo nec rutrum. Praesent sollicitudin interdum nisl, at sollicitudin
                            justo interdum vel</li>
                        <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Nunc eget orci maximus, tincidunt nulla molestie, porta nisi. Integer fringilla
                            lorem at lacinia iaculis. </li>
                        <li>Maecenas tempus libero laoreet est facilisis, vitae iaculis dui eleifend. Proin eget
                            magna vitae diam dictum interdum at at nulla. Fusce eu porttitor felis. Aenean pretium
                            lacinia nunc ut convallis.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
