@extends('layouts.murid')
@section('content')
    <div class="container-xl" style="padding-top: 5rem">
        <div class="row section-title">
            <h2 class="fs-4">Wakil Koordinator Jurusan</h2>
        </div>
        <div class="row d-flex">
            @foreach ($wakil as $w)
                <div class="col-lg-6 col-md-6">
                    <form action="{{ route('user.murid.vote_wakil') }}" method="POST" id="form-wakojur">
                        @csrf
                        @method('PUT')
                        <div class="text-white rounded text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                            <img class="rounded-pill shadow-md p-2" src="{{$w->foto}}"
                                alt="">
                            <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $w->name }}</h4>
                            <h5 class="mt-2 fs-6 mb-1 fw-bold">{{ $w->kelas }}</h5>
                            <h6 class="fs-6">Visi:</h6>
                            <p class="text-dark mt-2 mb-3 fs-8">{{ $w->visi }}</p>
                            <input type="text" id="idwakil" name="idwakil" value="{{ $w->id }}" hidden>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $w->name }}"
                                class="btn btn-primary fw-bolder px-4 fs-8 me-4"><span><i
                                        class="bi bi-pass-fill"></i></span> Misi</button>
                            <button class="btn btn-success fw-bolder px-4 fs-8 button-vote-wakojur"><span><i
                                        class="bi bi-clipboard2-check-fill"></i></span> Vote</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script>
        const voteBtns = document.querySelectorAll('.button-vote-wakojur');

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
                        $.ajax({
                            type: 'POST',
                            url: '/logout',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                window.location.href = '/';
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                        const form = btn.closest('form');
                        form.submit();
                    }
                });
            });
        }); 
    </script> --}}
    <script>
        const voteBtns = document.querySelectorAll('.button-vote-wakojur');

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
                        $('.button-vote-wakojur').prop('disabled', true);
                        Swal.fire(
                            'Anda sudah memilih!',
                            'Seluruh pilihan anda telah disimpan! Terimakasih!',
                            'success'
                        );
                        setTimeout(() => {
                            window.location.href = '/';
                            const form = btn.closest('form');
                            form.submit();
                        }, 1000);
                    }
                });
            });
        });
    </script>
@endsection
