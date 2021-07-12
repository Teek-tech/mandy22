<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Lakeside Admin Template </title>

    @include('layouts.user-dashboard.head')


</head>

<body>


    @include('layouts.user-dashboard.nav')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.new-admin.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <h4>Transaction Detail</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
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
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h5 class="header-title mb-3">Shipping Information</h5>

                                    <h6 class="font-family-primary font-weight-semibold">Brent Jones</h6>

                                    <p class="mb-2"><span class="font-weight-semibold mr-2">Address:</span> 3559
                                        Roosevelt Wilson Lane San Bernardino, CA 92405</p>
                                    <p class="mb-2"><span class="font-weight-semibold mr-2">Phone:</span> (123) 456-7890
                                    </p>
                                    <p class="mb-0"><span class="font-weight-semibold mr-2">Mobile:</span> (+01) 12345
                                        67890</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @include('layouts.user-dashboard.copyright')
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.user-dashboard.footer')
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>
