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
                    <h5 class="mt-4">Activities</h5>

                    <div class="card my-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small class="text-muted">Today, 10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="text-uppercase font-weight-bold text-danger">ORDER
                                                    ALERT</span> - New order from IP Address 9232049adbebt...
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small class="text-muted">Today, 10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="text-uppercase font-weight-bold text-danger">ORDER
                                                    ALERT</span> - New order from IP Address 9232049adbebt...
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small class="text-muted">Today, 10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="text-uppercase font-weight-bold text-danger">ORDER
                                                    ALERT</span> - New order from IP Address 9232049adbebt...
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small class="text-muted">Today, 10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="text-uppercase font-weight-bold text-danger">ORDER
                                                    ALERT</span> - New order from IP Address 9232049adbebt...
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small class="text-muted">Today, 10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="text-uppercase font-weight-bold text-danger">ORDER
                                                    ALERT</span> - New order from IP Address 9232049adbebt...
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Mandy22 2021</div>
                        <div>
                            Designed by <a href="https://mezitox.com">Mezitox</a>
                            {{-- &middot;
                            <a href="#">Terms &amp; Conditions</a> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @include('layouts.admin.footer')

</body>

</html>
