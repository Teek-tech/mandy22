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
                    <h5 class="mt-4">Edit Product</h5>

                    <div class="card my-4">
                        <div class="card-body">
                            <form class="add-products-form" action="">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group my-3">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" placeholder="Name of product">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="category">Category</label>
                                            <select name="category" class="form-control">
                                                <option label="select"></option>
                                                <option value="adults">Adults</option>
                                                <option value="children">Children</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="size">size</label>
                                            <select name="size" class="form-control">
                                                <option label="select"></option>
                                                <option value="xs">xs</option>
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                                <option value="xl">xl</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" cols="30" rows="5"
                                                class="form-control"></textarea>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control" multiple>
                                        </div>

                                        <div class="btn-area d-flex justify-content-center align-items-center my-2">
                                            <button class="btn btn-primary">update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @include('layouts.admin.footer')
</body>

</html>
