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
                        {!! Form::open(['url' => route('testimonial.update', $testimonial->id), 'method' => 'post']) !!}
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" name="title" value="{{ old('title',$testimonial->title) }}">
                                </div>
                                @error('title')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="d-flex">
                                    <textarea type="text" class="form-control" name="description" value="">{{ old('description',$testimonial->description) }}</textarea>
                                </div>
                                @error('description')
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

@endsection
