<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Mandies22 | Profile</title>

    @include('layouts.admin.head')

    <!-- END PAGE LEVEL STYLES -->
    <style>
        .profile-img-area {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-img {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }

        .profile-img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        @media (min-width: 1000px) {
            .profile-area {
                width: 70%;
            }
        }

    </style>

</head>

<body>


    @include('layouts.admin.nav')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.admin.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <h4>Activities</h4>
                            <div class="d-flex justify-content-center">
                                <div class="profile-area">
                                    <form action="#">
                                        <div class="profile-img-area">
                                            <div class="profile-img">
                                                <img id="user-img"
                                                    src="{{ asset('img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        {{-- change image button --}}
                                        <div class="form-group my-4 d-flex justify-content-center">
                                            <label class="change-avatar-label btn btn-primary"
                                                for="change-avatar">change
                                                avatar
                                                <input type="file" class="d-none" name="change-avatar"
                                                    id="change-avatar" accept="image/*" onchange="changeAvatar(event);">
                                            </label>
                                        </div>

                                        <div class="form-group my-4">
                                            <label for="username">Name</label>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="John Doe">
                                        </div>

                                        <div class="form-group my-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" placeholder="test@test.com">
                                        </div>

                                        <div class="form-group my-4">
                                            <label for="change-password">Change Password</label>
                                            <input type="text" class="form-control" placeholder="type new password">
                                        </div>

                                        <div class="form-group my-4">
                                            <label for="confirm-new-password">Confirm New Password</label>
                                            <input type="text" class="form-control" placeholder="retype new password">
                                        </div>

                                        <div class="btn-area d-flex justify-content-center">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @include('layouts.admin.copyright')
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.admin.footer')
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script>
        function changeAvatar(event) {
            if (event.target.files.length > 0) {
                const src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById('user-img');

                preview.src = src;
            }
        }
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>
