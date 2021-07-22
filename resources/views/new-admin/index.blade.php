<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Lakeside Admin Template </title>

    @include('layouts.user-dashboard.head')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('user-dashboard-assets/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user-dashboard-assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">


                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Statistics</h6>
                            </div>
                            <div class="w-chart">
                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Total Rooms</p>
                                        <p class="w-stats">20</p>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Rooms Available</p>
                                        <p class="w-stats">5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Revenue</h6>
                            </div>
                            <div class="w-chart">
                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Online</p>
                                        <p class="w-stats">₦423,964</p>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Offline</p>
                                        <p class="w-stats">₦7,929</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Revenue</h6>
                            </div>
                            <div class="w-chart">
                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Online</p>
                                        <p class="w-stats">₦423,964</p>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Offline</p>
                                        <p class="w-stats">₦7,929</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-two">

                            <div class="widget-heading">
                                <h5 class="">Trnasactions</h5>
                            </div>

                            <div class="widget-content">

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-4">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Order Id</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                                <th>Status</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>#MANDY220056</td>
                                                <td>Dorime Gown</td>
                                                <td>12th July 2021</td>
                                                <td>₦25000</td>
                                                <td>Bank Transfer</td>
                                                <td>Pending</td>
                                                <td class="text-center"><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>#MANDY220056</td>
                                                <td>Dorime Gown</td>
                                                <td>12th July 2021</td>
                                                <td>₦25000</td>
                                                <td>Bank Transfer</td>
                                                <td>Pending</td>
                                                <td class="text-center"><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>#MANDY220056</td>
                                                <td>Dorime Gown</td>
                                                <td>12th July 2021</td>
                                                <td>₦25000</td>
                                                <td>Bank Transfer</td>
                                                <td>Pending</td>
                                                <td class="text-center"><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>#MANDY220056</td>
                                                <td>Dorime Gown</td>
                                                <td>12th July 2021</td>
                                                <td>₦25000</td>
                                                <td>Bank Transfer</td>
                                                <td>Pending</td>
                                                <td class="text-center"><a href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tm-action-btn">
                                    <a href="{{ route('new-admin.transactions.index') }}" class="btn">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            @include('layouts.user-dashboard.copyright')
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('layouts.user-dashboard.footer')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('user-dashboard-assets/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('user-dashboard-assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>
