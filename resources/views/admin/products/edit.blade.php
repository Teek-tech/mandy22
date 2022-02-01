<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Mandies22 | Admin </title>
 <!-- BEGIN PAGE LEVEL STYLES -->

    @include('layouts.admin.head')

   
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('user-dashboard-assets/plugins/table/datatable/custom_dt_multiple_tables.css') }}">
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />

        
    <!-- END PAGE LEVEL STYLES -->
<style>
    .moreImg{
        display: none;
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

                            <button class="btn btn-primary clickMoreImg" style="float: right;" type="button">Update Image</button>
                        <div class="col-md-6 col-md-offset-4 moreImg">
                            <form action="{{route('admin-addmore-product-image')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <input type="file" name="more_image_file[]" required multiple>
                            <input type="hidden" name="category" value="{{$product->category}}" required>
                            <input type="hidden" name="product_id" value="{{$product->id}}" required>
                            <button class="btn btn-primary" type="submit">Upload More Image</button>
                            </form>
                        </div>

                            <h5 class="mt-4 text-center">Edit Product</h5>
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
                        
                                <form class="add-products-form" action="{{route('admin.update-product', $product->uuid)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group my-3">
                                            <label for="name">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$product->title}}">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="name">Price</label>
                                            <input type="text" name="price" class="form-control" value="{{$product->price}}">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="name">Higher Price</label>
                                            <input type="number" name="discounted" class="form-control" value="{{$product->discounted}}">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="category">Category</label>
                                            <select name="category" class="form-control">
                                                <option value="{{$product->category}}" selected>{{$product->category}}</option>
                                                <option value="adults">Adults</option>
                                                <option value="children">Children</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="name">Quantity (How manay is in stock)</label>
                                            <input type="number" name="stock" class="form-control" value="{{$product->stock}}">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="size">Select Available Sizes</label>
                                            <select name="size[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                               <option value="{{$product->size}}" selected>{{$product->size}}</option>
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
                                            <label for="color">Select Available Color</label>
                                            <select name="color[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                                <option value="{{$product->color}}" selected>{{$product->color}}</option>
                                               <option value="black">black</option>
                                               <option value="green">green</option>
                                               <option value="yellow">yellow</option>
                                               <option value="orangered">orange</option>
                                               <option value="navy">navy blue</option>
                                               <option value="brown">brown</option>
                                               <option value="blue">blue</option>
                                               <option value="white">white</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" cols="30" rows="5"
                                                class="form-control">{{$product->description}}</textarea>
                                        </div>

                                        {{-- <div class="form-group my-3">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control" multiple>
                                        </div> --}}

                                        <div class="btn-area d-flex justify-content-center align-items-center my-2">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br><br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">File name</th>
                                        <th scope="col">Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $sn = 1;
                                @endphp
                                <tbody>
                                    @foreach ($product->images as $image)
                                    <tr>
                                        <th scope="row">{{$sn++}}</th>
                                        <td>{{$image->image_file}}</td>
                                        <td class="img-to-edit">
                                            <img src="{{asset('product_images/'.$product->category. '/' .$image->image_file)}}"
                                                alt=""  width="50" height="50" style="border-radius: 25px"/>
                                        </td>
                                        {{-- <td>
                                            <input type="file" name="image_file[]" id="">
                                        </td> --}}
                                        <td>
                                            <form action="{{route('admin-update-product-image')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <input type="file" name="image_file" required>
                                            <input type="hidden" name="category" value="{{$product->category}}" required>
                                            <input type="hidden" name="id" value="{{$image->id}}" required>
                                            <button class="btn btn-primary" type="submit">Update Image</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

            $('.clickMoreImg').on('click', function(){
                $('.moreImg').toggle();
            })
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
