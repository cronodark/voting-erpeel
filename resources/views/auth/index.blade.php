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
</head>

<body>
    <div class="container">
        <div class="form-login">
            <div class="left-side">
                <form>
                    <div class="title-app">E-Voting</div>
                    <div class="top-text">Log In</div>
                    <div class="small-text">enter the correct username and password</div>
                    <div class="group-form">
                        <div class="input-field">
                            <i class="bi bi-person"></i>
                            <input type="text" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="input-field">
                            <i class="bi bi-lock"></i>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <button class="btn-login" name="login" id="login">Log In</button>
                    </div>
                    <div class="footer">&copy; 2023 E-Voting. All Rights Reserved</div>
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
</body>

</html>
