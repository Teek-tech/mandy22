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
                <h5 class="card-title">Sign Up</h5>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="name">First Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="John" required>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Doe" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone number" required>
                        </div>

                        {{-- <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="******" required>
                        </div>

                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" name="confiirm-password" class="form-control" placeholder="******"
                                required>
                        </div> --}}

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="name" class="form-control" placeholder="******"
                                        required>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" name="confiirm-password" class="form-control"
                                        placeholder="******" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the <a class="terms-link" href="#">terms and conditions</a>
                            </label>
                        </div>

                        <div class="btn-area d-flex justify-content-center">
                            <button class="btn btn-primary login-btn">Sign Up</button>
                        </div>

                        <div class="have-an-account-area">
                            <p>Already have an account? <a href="{{ route('admin.login') }}">Sign in</a></p>
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
