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
              <h3 class="card-title">Slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::open(['route' => 'slider.store','method' => 'post','files' => true]) !!}
              <div class="card-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" placeholder="title..." value="{{ old('title') }}">
                  @error('title')
                    <span class="text-danger py-20">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Sub Title</label>
                  <textarea type="text" class="form-control" name="sub_title" placeholder="sub title..." value="{{ old('sub_title') }}"></textarea>
                  @error('sub_title')
                    <span class="text-danger py-20">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Choose Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" value="{{ old('image') }}">
                      <label class="custom-file-label">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  @error('image')
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
