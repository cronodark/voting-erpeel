@extends('layouts.layout')
@section('content')
    <div class="container-xl">
        <div class="row section-title" style="padding-top: 5rem">
            <h2 class="fs-4">Wakil Koordinator Jurusan</h2>
        </div>
        <div class="row mb-3">
            @foreach ($wakil as $w)
                <form action="{{ route('user.murid.vote_wakil') }}" method="POST" class="d-flex gap-5" id="form-wakojur">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6 col-md-6">
                        <div class="text-white rounded text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                            <img class="rounded-pill shadow-md p-2" src="{{ asset('assets/images/member-01.jpg') }}"
                                alt="">
                            <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $w->name }}</h4>
                            <h6 class="fs-5">Visi:</h6>
                            <p class="text-dark mt-2 mb-3 fs-8">{{ $w->visi }}</p>
                            <input type="text" id="idwakil" name="idwakil" value="{{ $w->id }}" hidden>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $w->name }}"
                                class="btn btn-primary fw-bolder px-4 fs-8 me-4"><span><i
                                        class="bi bi-pass-fill"></i></span> Misi</button>
                            <button class="btn btn-success fw-bolder px-4 fs-8"><span><i
                                        class="bi bi-clipboard2-check-fill"></i></span> Vote</button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
