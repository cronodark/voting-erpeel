<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Voting | RPL</title>
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/loginPage.css') }}">
    {{-- boostrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container">
        <div class="form-login">
            <div class="left-side">
                <form method="POST" action="{{ route('auth.login') }}" id="form">
                    @csrf
                    <div class="title-app">E-Voting RPL</div>
                    <div class="top-text">Log In</div>
                    <div class="small-text">enter the correct username and password</div>
                    <div class="group-form">
                        <div class="group-input">
                            <div class="input-field" id="wrapInput">
                                <i class="bi bi-person"></i>
                                <input type="text" name="username" id="username" placeholder="Username"
                                    required autocomplete="off">
                                <i id="iconUserError"></i>
                            </div>
                            {{-- <small id="usernameError" hidden>Lengkapi Username Terlebih Dahulu</small> --}}
                        </div>
                        <div class="group-input">
                            <div class="input-field" id="wrapInput">
                                <i class="bi bi-lock"></i>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
                                <i id="iconPassError"></i>
                            </div>
                            {{-- <small id="passwordError" hidden>Lengkapi Password Terlebih Dahulu</small> --}}
                        </div>
                        <button type="submit" class="btn-login" name="login" id="login">Log In</button>
                    </div>
                    <div class="footer">&copy; 2023 SMKN 1 Cimahi | RPL</div>
                </form>
            </div>
            <div class="right-side">
                <div class="outer-circle outer-circle-top">
                    <div class="inner-circle inner-circle-top"></div>
                </div>
                <div class="outer-circle outer-circle-bottom">
                    <div class="inner-circle inner-circle-bottom"></div>
                </div>
                {{-- <div class="glass-effect"></div> --}}
                {{-- <img src="{{asset('assets/images/loginAsset.png')}}" width="500px"> --}}
            </div>
        </div>
    </div>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    {{-- Custom JS --}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Terjadi kesalahan',
                text: '{{ session('error') }}'
            });
        </script>
    @endif
</body>

</html>
