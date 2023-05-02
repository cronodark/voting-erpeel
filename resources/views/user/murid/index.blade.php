@extends('layouts.layout')
@section('content')
    <div class="container-xl" style="padding-top: 5rem">
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

    {{-- js custom --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
