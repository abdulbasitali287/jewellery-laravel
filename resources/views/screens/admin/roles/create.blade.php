@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open(['route' => 'role.store']) !!}
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Roles</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                {{ Form::text('role_name', old('role_name') , ['class' => 'form-control','placeholder' => 'name...']); }}
                                @error('role_name')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5 class="">Permissions</h5>
                            </div>
                            @foreach ($permissions as $permission)
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $permission->name }} " >
                                    <label class="form-check-label" >{{ $permission->name }}</label>
                                </div>
                            </div>
                            @endforeach
                            @error('permissions')
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
            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  Checked checkbox
                                </label>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Permissions</label>
                                {{ Form::text('permission', old('permission') , ['class' => 'form-control','placeholder' => 'permission...']); }}
                                @error('permission')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div> --}}
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
