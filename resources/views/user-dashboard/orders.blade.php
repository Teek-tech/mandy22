<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Mandies22 </title>

    @include('layouts.user-dashboard.head')

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/custom_dt_multiple_tables.css') }}">
    <!-- END PAGE LEVEL STYLES -->

</head>

<body>


    @include('layouts.user-dashboard.nav')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.user-dashboard.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <h4>Orders</h4>
                            <div class="table-responsive mb-4 mt-4">
                                <table class="multi-table table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Order Id</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>#MANDY22000653</td>
                                            <td>Dorime Gown</td>
                                            <td>2</td>
                                            <td>Pending</td>
                                            <td class="text-center">
                                                <a data-toggle="modal" data-target="#editPackage" href="#">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>#MANDY22000653</td>
                                            <td>Dorime Gown</td>
                                            <td>2</td>
                                            <td>Pending</td>
                                            <td class="text-center">
                                                <a data-toggle="modal" data-target="#editPackage" href="#">View</a>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>

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
    <script src="{{ asset('user-dashboard-assets/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table.multi-table').DataTable({
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    // "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                // "lengthMenu": [7, 10, 20, 50],
                // "pageLength": 7,
                drawCallback: function() {
                    $('.t-dot').tooltip({
                        template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    })
                    $('.dataTables_wrapper table').removeClass('table-striped');
                }
            });
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>
