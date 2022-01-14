<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Mandies22 | Order Details
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
                                        @php
                                        $itemData = json_decode($receipt->product_details, true);
                                        @endphp
                                        <tbody>
                                            @foreach ($itemData as $item)
                                            <tr>
                                                <th scope="col">{{$item['product']}}</th>
                                                <td>Adults</td>
                                                <td>{{$item['size']}}</td>
                                                <td>{{$item['price']}}</td>
                                                <td>{{$item['quantity']}}</td>
                                                <td>{{$item['price'] * $item['quantity']}}</td>
                                            </tr>
                                            @endforeach

                                            <tr>
                                                <th scope="row" colspan="5" style="text-align: right">Sub Total :</th>
                                                <td>
                                                    <div class="font-weight-bold">0</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row" colspan="5" style="text-align: right">Total :</th>
                                                <td>
                                                    <div class="font-weight-bold">{{$receipt->amount}}</div>
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
                                        <h6 class="font-family-primary font-weight-semibold">{{$receipt->first_name}} {{$receipt->last_name}}</h6>

                                        <p class="mb-2"><span class="font-weight-semibold mr-2">Address:</span> {{$receipt->address}}</p>
                                        <p class="mb-2"><span class="font-weight-semibold mr-2">Phone:</span> {{$receipt->phone}}
                                        </p>
                                        <p class="mb-0"><span class="font-weight-semibold mr-2">Mobile:</span> {{$receipt->email}}</p>
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
