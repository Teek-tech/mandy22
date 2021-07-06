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
                    <h5 class="mt-4">Products</h5>

                    <div class="card my-4">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Date posted</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $sn=1;
                                @endphp
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$sn++}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            @if ($product->in_stock == TRUE)
                                            <span class="badge bg-success">in stock</span>
                                            @else
                                            <span class="badge bg-warning">unavailable</span>
                                            @endif
                                            </td>
                                        <td class="d-flex justify-content-center"><a
                                                href="{{ route('admin.product.edit', $product->uuid) }}"
                                                class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Date posted</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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
