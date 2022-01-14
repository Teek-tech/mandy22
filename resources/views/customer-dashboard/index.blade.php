<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Mandies22 | User Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    @include('layouts.customer-dashboard.header')
    <link rel="stylesheet" href="{{ asset('customer-dashboard-assets/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer-dashboard-assets/css/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('customer-dashboard-assets/css/material-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('layouts.customer-dashboard.sidebar')
        {{-- End Sidebar --}}
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.customer-dashboard.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    {{-- <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">leaderboard</i>
                                    </div>
                                    <p class="card-category">Transactions</p>
                                    <h3 class="card-title">50</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All transactions
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">shopping_cart</i>
                                    </div>
                                    <p class="card-category">Orders</p>
                                    <h3 class="card-title">80</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All orders
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">star_rate</i>
                                    </div>
                                    <p class="card-category">Favorites</p>
                                    <h3 class="card-title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Favorite items
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Orders</h4>
                                    <p class="card-category"> recent orders</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="orders-table">
                                            <thead class=" text-primary">
                                                <th>
                                                    S/N
                                                </th>
                                                <th>
                                                    Order Id
                                                </th>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr data-href="/user/order-detail">
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        MANDY343
                                                    </td>
                                                    <td>
                                                        Dorime Gown
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <span class="badge bg-warning">pending</span>
                                                    </td>
                                                    <td>N34,000</td>
                                                </tr>

                                                <tr data-href="/user/order-detail">
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        MANDY343
                                                    </td>
                                                    <td>
                                                        Dorime Gown
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <span class="badge bg-warning">pending</span>
                                                    </td>
                                                    <td>N34,000</td>
                                                </tr>

                                                <tr data-href="/user/order-detail">
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        MANDY343
                                                    </td>
                                                    <td>
                                                        Dorime Gown
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <span class="badge bg-warning">pending</span>
                                                    </td>
                                                    <td>N34,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Transactions</h4>
                                    <p class="card-category"> recent transactions</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="transactions-table">
                                            <thead class=" text-primary">
                                                <th>
                                                    S/N
                                                </th>
                                                <th>
                                                    Order Id
                                                </th>
                                                
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                            </thead>
                                            @php
                                                $sn = 1;
                                            @endphp
                                            <tbody>
                                                @foreach ($transaction as $item)
                                                <tr data-href="{{route('customer-dashboard.orders-details',  $item->uuid)}}">
                                                    <td>
                                                        {{$sn++}}
                                                    </td>
                                                    <td>
                                                        {{$item->orderID}}
                                                    </td>
                                                   
                                                    <td>N{{$item->amount}}</td>
                                                    <td class="">
                                                        <span class="badge bg-warning">pending</span>
                                                    </td>
                                                    <td>12th july 2021</td>
                                                </tr> 
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
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
    <script>
        $(document).ready(function() {
            $('#orders-table').DataTable();
            $('#transactions-table').DataTable();

            const tableRows = document.querySelectorAll('tr[data-href]');
            // console.log(tr);

            tableRows.forEach(tableRow => {
                tableRow.addEventListener('click', () => {
                    window.location.href = tableRow.dataset.href;
                });
            })

        });
    </script>
</body>

</html>
