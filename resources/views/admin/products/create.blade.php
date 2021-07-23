<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Mandies22 | Admin </title>
 <!-- BEGIN PAGE LEVEL STYLES -->

    @include('layouts.user-dashboard.head')

   
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/custom_dt_multiple_tables.css') }}">
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />

        
    <!-- END PAGE LEVEL STYLES -->

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
                            <h5 class="mt-4 text-center">Create New Product</h5>
                            @if(session()->has('success'))
                            <div class="alert alert-solid alert-success" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                              {{ session()->get('success') }}
                            </div>
                          @endif
                          @if(session()->has('error'))
                          <div class="alert alert-solid alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            {{ session()->get('error') }}
                          </div>
                        @endif
                        
                        <form class="add-products-form" action="{{route('admin.add-product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group my-3">
                                            <label for="name">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Add Title">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="name">Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="category">Category</label>
                                            <select name="category" class="form-control">
                                               <option label="Select Ctaegory" selected></option>
                                                <option value="adults">Adults</option>
                                                <option value="children">Children</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="name">Quantity (How manay is in stock)</label>
                                            <input type="number" name="stock" class="form-control">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="size">Select Available Sizes</label>
                                            <select name="size[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                               <option value="8">8</option>
                                               <option value="10">10</option>
                                               <option value="12">12</option>
                                               <option value="14">14</option>
                                               <option value="16">16</option>
                                               <option value="18">18</option>
                                               <option value="20">20</option>
                                               <option value="22">22</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" cols="30" rows="5"
                                                class="form-control" placeholder="Describe this product...."></textarea>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="image">Image</label>
                                            <input type="file" name="product_image[]" class="form-control" multiple>
                                        </div>

                                        <div class="btn-area d-flex justify-content-center align-items-center my-2">
                                            <button class="btn btn-primary" type="submit">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
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
