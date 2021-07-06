<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
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
                    <form action="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="******" required>
                        </div>

                        <div class="btn-area d-flex justify-content-center">
                            <a href="{{ route('admin.home') }}" class="btn btn-primary login-btn">Login</a>
                        </div>

                        <div class="have-an-account-area">
                            <p>Don't have an account? <a href="{{ route('admin.register') }}">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-pattern-2"></div>
        </div>

    </div>



    @include('layouts.admin.footer')
</body>

</html>
