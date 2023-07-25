<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CSPC SRR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('img/cspc-logo.png') }}" rel="icon">
    <link href="{{ asset('img/cspc-logo.png') }}" rel="">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-image: url("/img/cspc-main.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .google-sign-in {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 8px;
        }

        .google-sign-in a {
            background-color: #fff;
            color: #007bff;
        }

        .google-sign-in a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .google-icon {
            width: 20px;
            height: 20px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8.5px);
            -webkit-backdrop-filter: blur(8.5px);
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4"></div>
                        <div class="card mb-3 glass-card text-white">
                            <div class="card-body">
                                <div style="text-align: center;">
                                    <img src="{{ asset('img/cspc-logo.png') }}" alt="CPSC" style="width: 42%;">
                                    <p class="text-center small">CSPC Registrar</p>
                                    <hr>
                                </div>
                                    <form method="POST" action="{{ route('login') }}" class="row g-3">
                                        @csrf
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <input type="text" name="email" class="form-control" id="email"
                                                    required autocomplete="off" @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required @error('password') is-invalid @enderror>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <hr class="mb-2">
                                        <span class="d-flex justify-content-center">Login as</span>
                                        <div class="col-12">
                                            <a href="{{ route ('google-auth')}}" class="btn btn-outline-primary google-sign-in">
                                                <img src="{{ asset('img/google-icon.png') }}" alt="Google Icon"
                                                    class="google-icon me-2">
                                                CSPC Mail
                                            </a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="js/main.js"></script>
</body>

</html>
