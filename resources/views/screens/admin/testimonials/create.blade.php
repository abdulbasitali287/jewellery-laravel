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
                            <h3 class="card-title">Testimonial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'testimonial.store', 'method' => 'post']) !!}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" name="title" placeholder="title..." value="{{ old('title') }}">
                                </div>
                                @error('title')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="d-flex">
                                    <textarea type="text" class="form-control" name="description" placeholder="description..." value="{{ old('description') }}"></textarea>
                                </div>
                                @error('description')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection
