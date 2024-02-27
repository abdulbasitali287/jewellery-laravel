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
                            <h3 class="card-title">Page</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => route('section.update',$section->id), 'method' => 'post']) !!}
                        <div class="card-body" id="inputContainer">
                            <div class="form-group">
                                <label>Page</label>
                                {{-- @dd(App\Models\Page::pluck('name','id')) --}}
                                <select class="form-control" name="page_id">
                                    {{-- <option value="{{ $section->pages[0]->id }}" selected>{{ $section->pages[0]->name }}</option> --}}
                                    @foreach (App\Models\Page::pluck('name','id') as $id => $name)
                                        <option {{ $section->page_id == $id ? "selected" : "" }}  value="{{ $id }}"> {{ $name }} </option>
                                    @endforeach
                                </select>
                                @error('page_id')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group inputField">
                                <label>Name</label>
                                <div class="d-flex original_input">
                                    <input type="text" class="form-control" value="{{ $section->section_name }}" name="section_name" placeholder="Name...">
                                    {{-- <button class="cloneInput bg-success fw-bold border-0 px-2"><i
                                            class="fa-solid fa-plus"></i></button> --}}
                                </div>
                                @error('section_name')
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
    </section>
    <!-- /.content -->

    <script>
        // $(document).ready(function() {
        //     $(document).on('click', '.cloneInput', function(e) {
        //         e.preventDefault();
        //         var $inputValue = $(this).closest('.original_input').find('input').val();
        //         if ($inputValue != "") {
        //             var $clonedDiv = $(this).closest('.original_input').clone();
        //             $clonedDiv.find('input').val('');
        //             $('#inputContainer').append($clonedDiv);
        //         }
        //     });
        // });
    </script>
@endsection
