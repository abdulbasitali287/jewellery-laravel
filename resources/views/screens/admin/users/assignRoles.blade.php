@extends('layouts.admin')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open(['url' => route('users.assigned.role',$user->id)]) !!}
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Role</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username</label>
                                {{ Form::text('username', old('name', $user->name), ['class' => 'form-control']) }}
                                @error('username')
                                    <span class="text-danger py-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- @if ($role->permissions)
                            @foreach ($role->permissions as $permission)
                                <div>
                                    {{ $permission->name }}
                                </div>
                            @endforeach
                        @endif --}}
                        @foreach ($roles as $role)
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="roles[]" type="checkbox"
                                        value="{{ $role->name }}"
                                        @foreach ($user->roles as $userRole)
                                            @if ($role->name == $userRole->name)
                                                checked
                                            @endif
                                        @endforeach
                                        >
                                    <label class="form-check-label">{{ $role->name }}</label>
                                </div>
                            </div>
                        @endforeach
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
