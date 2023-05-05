@extends('layouts.admin')
@section('content')
    <div class="container-xl" style="padding-top: 8rem;">
        <div class="row section-title m-0 p-0">
            <h2 class="text-center" style="color: #202020;">Hasil Voting Pemilihan</h2>
        </div>
        <div class="row section-title mt-3">
            <h2 class="fs-4 fw-lighter text-center" style="color: #202020;">Koordinator Jurusan</h2>
        </div>
        <div class="row mb-5 d-flex justify-content-center">
            @foreach ($ketua as $k)
                <div class="col-lg-5 mb-4">
                    <div
                        class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                        <div class="col-lg-12 text-center">
                            <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-lg-9 align-self-center text-center mt-3">
                            <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">{{ $k->name }}</h4>
                            <p class="fs-6 mb-4 fw-bold" style="color: #202020;">{{ $k->kelas }}</p>
                            @if ($k->id == 1)
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : {{ $votesatu }}</p>
                            @elseif ($k->id == 2)
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : {{ $votedua }}</p>
                            @else
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : -</p>
                            @endif
                            @if ($k->id == 1)
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: {{ $persensatu }}%;" aria-valuenow="205" aria-valuemin="0"
                                        aria-valuemax="100">{{ $persensatu }}%
                                    </div>
                                </div>
                            @elseif ($k->id == 2)
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: {{ $persendua }}%;" aria-valuenow="205" aria-valuemin="0"
                                        aria-valuemax="100">{{ $persendua }}%
                                    </div>
                                </div>
                            @else
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: 100%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">Data
                                        tidak tersedia
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row section-title">
                <h2 class="fs-4 fw-lighter text-center" style="color: #202020;">Wakil Koordinator Jurusan</h2>
            </div>
            @foreach ($wakil as $k)
                <div class="col-lg-5 mb-4">
                    <div
                        class="row shado-md pt-3 pb-4 m-0 rounded shadow-md bg-white d-flex flex-column align-content-center">
                        <div class="col-lg-12 text-center">
                            <img class="rounded-pill shadow-md p-2 max-130" src="{{ asset('assets/images/member-01.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-lg-9 align-self-center text-center mt-3">
                            <h4 class="fs-5 mb-1 fw-bold" style="color: #202020;">{{ $k->name }}</h4>
                            <p class="fs-6 mb-4 fw-bold" style="color: #202020;">{{ $k->kelas }}</p>
                            @if ($k->id == 1)
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : {{ $votesatu }}</p>
                            @elseif ($k->id == 2)
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : {{ $votedua }}</p>
                            @else
                                <p class="fs-8 mb-3 fw-bold" style="color: #202020;">Total Vote : -</p>
                            @endif
                            @if ($k->id == 1)
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: {{ $persensatuw }}%;" aria-valuenow="205" aria-valuemin="0"
                                        aria-valuemax="100">{{ $persensatuw }}%
                                    </div>
                                </div>
                            @elseif ($k->id == 2)
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: {{ $persenduaw }}%;" aria-valuenow="205" aria-valuemin="0"
                                        aria-valuemax="100">{{ $persenduaw }}%
                                    </div>
                                </div>
                            @else
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label"
                                        style="width: 100%;" aria-valuenow="205" aria-valuemin="0" aria-valuemax="100">Data
                                        tidak tersedia
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row section-title">
                <h2 class="fs-4 fw-lighter text-center" style="color: #202020;">Persentase Voting</h2>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="row shadow-md py-4 px-5 m-0 rounded shadow-md bg-white d-flex justify-content-center">
                    <div class="border p-0 rounded">
                        <h2 class="fs-5 border-bottom py-3 px-4 fw-bold">Koordinator Jurusan</h2>
                        <canvas id="chart_kojur" class="my-4 mx-3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="row shadow-md py-4 px-5 m-0 rounded shadow-md bg-white d-flex justify-content-center">
                    <div class="border p-0 rounded">
                        <h2 class="fs-5 border-bottom py-3 px-4 fw-bold">Wakil Koordinator Jurusan</h2>
                        <canvas id="chart_wakojur" class="my-4 mx-3"></canvas>
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

    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Setup Chart --}}
    <script>
        var ctx1 = document.getElementById('chart_kojur').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Hilmy Rizky Nugraha', 'Daffa Ariya Prayoga'],
                // datasets: [{
                //     label: 'Persentasi Vote',
                //     data: [33.3, 30],
                //     backgroundColor: [
                //         'rgb(28, 165, 232)',
                //         'rgb(195, 236, 255)',
                //     ],
                //     borderColor: [
                //         'rgb(28, 165, 232)',
                //         'rgb(195, 236, 255)',
                //     ],
                //     borderWidth: 1
                // }]
                datasets: [{
                    label: 'Pemilih Ketua',
                    data: [{{ $persensatu }} % , {{ $persendua }} % ],
                    backgroundColor: [
                        'rgb(28, 165, 232)',
                        'rgb(255, 174, 53)',
                    ],
                    borderColor: [
                        'rgb(28, 165, 232)',
                        'rgb(255, 174, 53)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementById('chart_wakojur').getContext('2d');
        var chart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Daffa Salmanaufal A', 'Riyan Septiana'],
                // datasets: [{
                //     label: 'Revenue',
                //     data: [12, 19],
                //     backgroundColor: [
                //         'rgb(28, 165, 232)',
                //         'rgb(195, 236, 255)',
                //     ],
                //     borderColor: [
                //         'rgb(28, 165, 232)',
                //         'rgb(195, 236, 255)',
                //     ],
                //     borderWidth: 1
                // }]
                datasets: [{
                    label: 'Pemilih Wakil',
                    data: [{{ $persensatuw }} % , {{ $persenduaw }}] % ,
                    backgroundColor: [
                        'rgb(28, 165, 232)',
                        'rgb(255, 174, 53)',
                    ],
                    borderColor: [
                        'rgb(28, 165, 232)',
                        'rgb(255, 174, 53)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
