@extends('layouts.layout')
@section('content')
    <div class="container-xl" style="padding-top: 5rem">
        <div class="row section-title">
            <h2 class="fs-4">Koordinator Jurusan</h2>
        </div>
        <div class="row d-flex">
            @foreach ($ketua as $k)
                <div class="col-lg-6 col-md-6">
                    <form action="{{ route('user.murid.vote_ketua') }}" method="POST" id="{{ $k->id }}">
                        @csrf
                        @method('PUT')
                        <div class="text-white rounded text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                            <img class="rounded-pill shadow-md p-2" src="{{ asset('assets/images/member-01.jpg') }}"
                                alt="">
                            <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $k->name }}</h4>
                            <h5 class="mt-2 fs-6 mb-1 fw-bold">{{ $k->kelas }}</h5>
                            <h6 class="fs-6">Visi:</h6>
                            <p class="text-dark mt-2 mb-3 fs-8">{{ $k->visi }}</p>
                            <input type="text" id="idketua" name="idketua" value="{{ $k->id }}" hidden>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $k->id }}"
                                class="btn btn-primary fw-bolder px-4 fs-8 me-4">
                                <span><i class="bi bi-pass-fill"></i></span> Misi
                            </button>
                            <button class="btn btn-success fw-bolder px-4 fs-8 button-vote-kojur" id="{{ $k->id }}">
                                <span><i class="bi bi-clipboard2-check-fill"></i></span> Vote
                            </button>
                        </div>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const voteBtns = document.querySelectorAll('.button-vote-kojur');

        voteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                Swal.fire({
                    title: 'Yakin memilih kandidat tersebut?',
                    text: 'Anda tidak akan bisa merubahnya setelah ini',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('.button-vote-kojur').prop('disabled', true);
                        Swal.fire(
                            'Anda sudah memilih!',
                            'Pilihan anda telah disimpan! Silahkan pilih Wakil Koodinator',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '{{ route('user.murid.wakil') }}';
                                const form = btn.closest('form');
                                form.submit();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
