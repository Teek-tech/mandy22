<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
</head>

<body class="sb-nav-fixed">

    @include('layouts.admin.nav')

    <div id="layoutSidenav">

        @include('layouts.admin.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h5 class="mt-4">Profile</h5>

                    <div class="card mb-4 mt-4">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="profile-area">
                                <form action="#">
                                    <div class="profile-img-area">
                                        <div class="profile-img">
                                            <img id="user-img" src="img/product/x1.jpg.pagespeed.ic._92Pc1JtDC.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    {{-- change image button --}}
                                    <div class="form-group my-4 d-flex justify-content-center">
                                        <label class="change-avatar-label btn btn-primary" for="change-avatar">change
                                            avatar
                                            <input type="file" class="d-none" name="change-avatar" id="change-avatar"
                                                accept="image/*" onchange="changeAvatar(event);">
                                        </label>
                                    </div>

                                    <div class="form-group my-4">
                                        <label for="username">Name</label>
                                        <input type="text" name="username" class="form-control" placeholder="John Doe">
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
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @include('layouts.admin.footer')

    <script>
        function changeAvatar(event) {
            if (event.target.files.length > 0) {
                const src = URL.createObjectURL(event.target.files[0]);
                let preview = document.getElementById('user-img');

                preview.src = src;
            }
        }
    </script>

</body>

</html>
