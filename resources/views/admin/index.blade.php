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
                    <h2 class="mt-4">Hello</h2>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Total Sales</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Total Products</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-credit-card me-1"></i>
                            Transactions
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>OrderID</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-href="/transactions/details">
                                        <td>1</td>
                                        <td>#CBH210455</td>
                                        <td>Purple children's gown</td>
                                        <td>20th july 2021</td>
                                        <td>10,000</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-success">shipped</span></td>
                                    </tr>
                                    <tr data-href="/transactions/details">
                                        <td>2</td>
                                        <td>#CBH210455</td>
                                        <td>Purple children's gown</td>
                                        <td>20th july 2021</td>
                                        <td>10,000</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-warning">pending</span></td>
                                    </tr>
                                    <tr data-href="/transactions/details">
                                        <td>3</td>
                                        <td>#CBH210455</td>
                                        <td>Purple children's gown</td>
                                        <td>20th july 2021</td>
                                        <td>10,000</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-success">shipped</span></td>
                                    </tr>
                                    <tr data-href="/transactions/details">
                                        <td>1</td>
                                        <td>#CBH210455</td>
                                        <td>Purple children's gown</td>
                                        <td>20th july 2021</td>
                                        <td>10,000</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-success">shipped</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
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
            </footer>
        </div>
    </div>


    @include('layouts.admin.footer')

    <script>
        window.addEventListener('load', () => {
            const rows = document.querySelectorAll('tr[data-href]');

            rows.forEach(row => {
                row.style.cursor = 'pointer';
                row.addEventListener('click', () => {
                    window.location.href = row.dataset.href;
                })
            });
        });
    </script>
</body>

</html>
