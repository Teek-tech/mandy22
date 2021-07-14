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
                    <h5 class="mt-4">Items from order #CBH210455</h5>

                    <div class="card mb-4 mt-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Product name</th>
                                            <th>categroy</th>
                                            <th>size</th>
                                            <th>Price</th>
                                            <th>quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Purple gown</th>
                                            <td>Adults</td>
                                            <td>s</td>
                                            <td>20000</td>
                                            <td>2</td>
                                            <td>40000</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Red gown</th>
                                            <td>Children</td>
                                            <td>xl</td>
                                            <td>20000</td>
                                            <td>1</td>
                                            <td>20000</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" colspan="5" style="text-align: right">Sub Total :</th>
                                            <td>
                                                <div class="font-weight-bold">0</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" colspan="5" style="text-align: right">Total :</th>
                                            <td>
                                                <div class="font-weight-bold">0</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 my-4">
                            <div class="card">
                                <div class="card-body">


                                </div>
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
