@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open(['route' => 'permission.store']) !!}
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Permissions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="input-fields">
                                    {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'name...']) }}
                                </div>
                            </div>
                            <button id="cloneField" class="btn btn-sm btn success">Clone Field</button>
                            @error('name')
                                <span class="text-danger py-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
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
            // $(document).on('click', '#cloneField', function(event) {
            //     event.preventDefault();
            //     let inputField = $('input[name="name[]"]');
            //     console.log(Array.from(inputField));
            //     if (inputField.val() != "" ) {
            //         let clonedField = inputField.clone();
            //         clonedField.val('');
            //         $('.form-group').append(inputField);
            //     }
                // var $inputField = $('.form-group').find('input[name="name[]"]');
                // console.log($inputField);
                // $inputField.each(function (key,value) {
                //     console.log($(this).val());
                //     if ($(this).val() != "") {
                //         let cloned = $(this).clone();
                //         cloned.val('');
                //         $('.form-group').append(cloned);
                //     }
                // });
                // var $inputField = $('.form-group').find('.input-fields:first').clone();
                // $inputField.find('input').val(''); // Clear the cloned input field value
            });
        });
    </script>
@endsection
