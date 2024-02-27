@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    {!! Form::open(['id' => 'attributeUpdateFormRequest']) !!}
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Attribute Name</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="attribute_name" value="{{ $attribute->name }}" placeholder="Name...">
                                @error('attribute_name')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Variants</h3>
                        </div>
                        <div class="card-body">
                            @foreach ($attribute->variants as $variant)
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="variant_name[]" value="{{ $variant->name }}" placeholder="Name...">
                                    {{-- @error('variant_name*')
                                        <span class="text-danger py-20">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                            @endforeach
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
        <script>
            $(document).ready(function() {
                $("#attributeUpdateFormRequest").submit(function(e) {
                    e.preventDefault();
                    let attribute = {{ Js::from($attribute->id) }}
                    var formData = $(this).serialize();
                    $.ajax({
                        type: "post",
                        url: "{{ route('attribute.update', '') }}/" + attribute,
                        data: formData,
                        success: function(response) {
                            console.log(response);
                            $("span").html("");
                        },
                        error: function(response) {
                            $("span").html("");
                            $.each(response.responseJSON.errors, function(index, valueOfElement) {
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
