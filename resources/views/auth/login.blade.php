<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('layouts.admin.head') --}}
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mandies22 | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="auth-area">
        <div class="auth">
            <div class="bg-pattern"></div>
            <div class="card">
                <div class="auth-logo">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="mandy22 logo">
                </div>
                <h5 class="card-title">Sign In</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="btn-area d-flex justify-content-center">
                            {{-- <a href="{{ route('login') }}" class="btn btn-primary login-btn">Login</a> --}}
                            <button class="btn btn-primary login-btn" type="submit">Login</button>
                        </div>

                        <div class="have-an-account-area">
                            <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-pattern-2"></div>
        </div>

    </div>



    {{-- @include('layouts.admin.footer') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin-assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin-assets/js/datatables-simple-demo.js') }}"></script>

</body>

</html>
