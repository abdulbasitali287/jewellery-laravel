@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open(['route' => 'attribute.store']) !!}
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Attributes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="attribute_name" placeholder="Name...">
                                {{-- <span class="text-danger py-2" id="attribute_name"></span> --}}
                                @error('attribute_name')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Variants</h3>
                        </div>

                        <div class="card-body" id="inputContainer">
                            <div class="form-group inputField">
                                <label>Name</label>
                                <div class="d-flex original_input py-2">
                                    <input type="text" class="form-control" name="variant_name[]" placeholder="Name...">
                                    <button class="cloneInput bg-success fw-bold border-0 px-2"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                @error('variant_name.*')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->
            </div>
            {!! Form::close() !!}

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '.cloneInput', function(e) {
                e.preventDefault();
                var $inputValue = $(this).closest('.original_input').find('input').val();
                if ($inputValue != "") {
                    var $clonedDiv = $(this).closest('.original_input').clone();
                    $clonedDiv.find('input').val('');
                    $('#inputContainer').append($clonedDiv);
                }
            });

        });
    </script>
@endsection
