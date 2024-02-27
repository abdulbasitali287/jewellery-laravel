@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category">
                                            <option value="" selected disabled>Select Category...</option>
                                            @foreach ($category as $id => $name)
                                                <option value="{{ $id }}"> {{ $name }} </option>
                                            @endforeach
                                        </select>

                                        @error('category')
                                            <span class="text-danger py-20">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name..."
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger py-20">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Description..." value="{{ old('description') }}">
                                        @error('description')
                                            <span class="text-danger py-20">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" class="form-control" name="price" placeholder="Price..."
                                            value="{{ old('price') }}">
                                        @error('price')
                                            <span class="text-danger py-20">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Choose Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" multiple>
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('image')
                                            <span class="text-danger py-20">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="row clone-div attribute">
                                <div class="col-md-3">
                                    <div class="card-header">
                                        <h3 class="card-title">Attributes</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="form-group">
                                        <label>Name</label>
                                        <select name="attribute[]" class="form-control" id="attribute">
                                            <option value="">Select Option</option>
                                            @foreach ($attribute as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('attribute.*')
                                            <span class="text-danger py-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-header">
                                        <h3 class="card-title">Variants</h3>
                                    </div>
                                    <div class="" id="inputContainer">
                                        <div class="form-group inputField">
                                            <label>Name</label>
                                            <select class="form-control original_input" name="variant_name[]">
                                                <option value="">Select Option</option>
                                            </select>
                                            @error('variant_name.*')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-header">
                                        <h3 class="card-title">Addon Price</h3>
                                    </div>
                                    <div class="" id="inputContainer">
                                        <div class="form-group inputField">
                                            <label>Addon Price</label>
                                            <input type="number" class="form-control" name="addon_price[]">
                                            @error('addon_price.*')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-header">
                                        <h3 class="card-title">Quantity</h3>
                                    </div>
                                    <div class="" id="inputContainer">
                                        <div class="form-group inputField">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" name="quantity[]">
                                            @error('quantity.*')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-header">
                                        <h3 class="card-title">Add More Fields</h3>
                                    </div>
                                    <div class="" id="">
                                        <div class="form-group">
                                            <label>Add More Fields</label>
                                            <button class="cloneInput bg-success fw-bold border-0 px-2"><i
                                                    class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                    <!-- /.card -->
                    {!! Form::close() !!}
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $(document).ready(function() {

            // cloning the fields
            $(document).on('click', '.cloneInput', function(e) {
                e.preventDefault();
                $(this).each(function() {
                    let cloneDiv = $(this).closest('.clone-div');
                    var $variantValue = cloneDiv.find(
                        "select[name='variant_name[]']").val();
                    var $attributeValue = cloneDiv.find(
                        "select[name='attribute[]']").val();
                    var $inputValue = cloneDiv.find('input').val();

                    if ($variantValue !== "" && $attributeValue !== "" && $inputValue !== "") {
                        var $clonedDiv = cloneDiv.clone();
                        $clonedDiv.find('input').val('');
                        $clonedDiv.find("select[name='attribute[]']").val('');
                        $clonedDiv.find("select[name='variant_name[]']").empty();
                        cloneDiv.after($clonedDiv);
                    }
                });
            });

            $(document).on("change", 'select[name="attribute[]"]', function(e) {
                let vari = $(this).closest('.attribute').find('select[name="variant_name[]"]').first();
                let variant = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('product.variant', '') }}/" + variant,
                    success: function(response) {
                        var options = '<option value="">Select Option</option>';
                        console.log(response);
                        $.each(response.variant, function(key, value) {
                            options += '<option value="' + value.id + '">' + value
                                .name + '</option>';
                        });
                        vari.html(options);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
