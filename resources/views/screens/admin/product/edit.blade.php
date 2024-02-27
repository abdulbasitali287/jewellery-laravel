@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(['id' => 'productUpdateFormRequest']) !!}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Name...">
                                @error('name')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $product->description }}" placeholder="Description...">
                                @error('description')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="Price...">
                                @error('price')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
        <script>
            $(document).ready(function () {
                $("#productUpdateFormRequest").submit(function (e) {
                    let product = {{ Js::from($product->id) }}
                    console.log(product);
                    e.preventDefault();
                    var formData = $(this).serialize();
                    $.ajax({
                        type: "post",
                        url: '/admin/product/update' + "/" + product,
                        data: formData,
                        success: function (response) {
                            $("span").html("");
                        },
                        error: function (response) {
                            $("span").html("");
                            $.each(response.responseJSON.errors, function (index,valueOfElement) {
                                $(`<span class='text-danger py-2'>${valueOfElement}</span>`).insertAfter(`[name="${index}"]`);
                            });
                        }
                    });
                });
            });
            $(function() {
                bsCustomFileInput.init();
            });
        </script>
    </section>
    <!-- /.content -->
@endsection
