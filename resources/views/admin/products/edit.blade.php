<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
</head>

<body class="sb-nav-fixed">

    @include('layouts.admin.nav')

    <div id="layoutSidenav">

        @include('layouts.admin.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h5 class="mt-4">Edit Product</h5>
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
                    <div class="card my-4">
                        <div class="card-body">
                            <form class="add-products-form" action="{{route('admin.update-product', $product->uuid)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group my-3">
                                            <label for="name">Product Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$product->title}}">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="name">Price</label>
                                            <input type="text" name="price" class="form-control" value="{{$product->price}}">
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="category">Category</label>
                                            <select name="category" class="form-control">
                                                <option value="{{$product->category}}" selected>{{$product->category}}</option>
                                                <option value="adults">Adults</option>
                                                <option value="children">Children</option>
                                            </select>
                                        </div>

                                        {{-- <div class="form-group my-3">
                                            <label for="size">size</label>
                                            <select name="size" class="form-control">
                                                <option value="{{$product->size}}" selected>{{$product->size}}</option>
                                                <option value="xs">xs</option>
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                                <option value="xl">xl</option>
                                            </select>
                                        </div> --}}
                                        
                                        <div class="form-group my-3">
                                            <label for="size">Select Available Sizes</label>
                                            <select name="size[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                               <option value="{{$product->size}}" selected>{{$product->size}}</option>

                                                <option value="xs">XS</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" cols="30" rows="5"
                                                class="form-control">{{$product->description}}</textarea>
                                        </div>

                                        {{-- <div class="form-group my-3">
                                            <label for="image">AddImage</label>
                                            <input type="file" name="image_file[]" class="form-control" multiple>
                                        </div> --}}

                                        <div class="btn-area d-flex justify-content-center align-items-center my-2">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4 mt-4">
                        <div class="card-body">
                            <table class="table table-bordered edit-images-table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">File name</th>
                                        {{-- <th scope="col">Image</th> --}}
                                        <th scope="col">Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->images as $image)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$image->image_file}}</td>
                                        <td class="img-to-edit">
                                            <img src="{{asset('product_images/'.$product->category. '/' .$image->image_file)}}"
                                                alt="" />
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</body>

</html>
