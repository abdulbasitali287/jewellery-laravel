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
                            <h3 class="card-title">Hotel Bathrooms</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('hotel-bathrooms.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" class="form-control my-2" name="bathroom_type[]"
                                        placeholder="type..." value="{{ old('bathroom_type[]') }}">
                                    @error('bathroom_type.*')
                                        <span class="text-danger py-20">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button class="cloneInput btn btn-success me-2"><i class="fa-solid fa-plus px-4"></i></button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('hotel-bathrooms.index') }}" class="btn btn-primary px-4">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
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
            $(document).on('click', '.cloneInput', function(e) {
                e.preventDefault();
                let inputFields = $(this).closest('form').find('input[name="bathroom_type[]"]');
                let check = false;
                inputFields.each(function() {
                    if ($(this).val() == "") {
                        check = true;
                    }
                });
                if (check == false) {
                    let cloned = inputFields.first().clone();
                    cloned.val("");
                    $('.form-group').append(cloned);
                }
            });
        });
    </script>
@endsection
