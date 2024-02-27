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
              <h3 class="card-title">Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::open(['route' => 'category.store','method' => 'post','files' => true]) !!}
              <div class="card-body">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category_id">
                    <option value="" selected disabled >Select Category...</option>
                    @foreach ($data as $item)
                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                    @endforeach
                </select>

                  @error('category_id')
                    <span class="text-danger py-20">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name..." value="{{ old('name') }}">
                  @error('name')
                    <span class="text-danger py-20">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea type="text" class="form-control" name="description" placeholder="Description..." value="{{ old('description') }}"></textarea>
                  @error('description')
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
