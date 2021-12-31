<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Mandies22 | User Profile
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    @include('layouts.customer-dashboard.header')
</head>

<body class="">
    <div class="wrapper ">
        @include('layouts.customer-dashboard.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.customer-dashboard.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Edit Profile</h4>
                                    <p class="card-category">Complete your profile</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('update-user-profile', $user)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Fist Name</label>
                                                    <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email address</label>
                                                    <input type="email" name="address" class="form-control" value="{{$user->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Adress</label>
                                                    <input type="text" name="address" class="form-control" value="{{$user->address}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Phone</label>
                                                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Country</label>
                                                    <input type="text" name="country" value="{{$user->country}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Postal Code</label>
                                                    <input type="text" name="postal" value="{{$user->postal}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img"
                                            src="{{ asset('customer-dashboard-assets/img/faces/marc.jpg') }}" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-description">
                                        user@mandies.com
                                    </p>
                                    <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            @include('layouts.customer-dashboard.copyright')
        </div>
    </div>
    @include('layouts.customer-dashboard.footer')
</body>

</html>
