<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Mandy22 | Order Details
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
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Orders</h4>
                                <p class="card-category"> These are your recent orders</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product name</th>
                                                <th>category</th>
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
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Shipping Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="font-family-primary font-weight-semibold">Brent Jones</h6>

                                        <p class="mb-2"><span class="font-weight-semibold mr-2">Address:</span> 3559
                                            Roosevelt Wilson Lane San Bernardino, CA 92405</p>
                                        <p class="mb-2"><span class="font-weight-semibold mr-2">Phone:</span> (123)
                                            456-7890
                                        </p>
                                        <p class="mb-0"><span class="font-weight-semibold mr-2">Mobile:</span> (+01)
                                            12345
                                            67890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.customer-dashboard.copyright')
        </div>
    </div>
    @include('layouts.customer-dashboard.footer')
</body>

</html>
