@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open(['url' => route('permission.update',$permission->id)]) !!}
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
                                {{ Form::text('name', old('name',$permission->name) , ['class' => 'form-control']); }}
                                @error('name')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                        <div class="card-footer">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
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
    {{-- <script>
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
    </script> --}}
@endsection
