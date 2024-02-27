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
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="card-header">
              <h3 class="card-title">Product Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::open(['route' => 'image.product.store','method' => 'post','files' => true]) !!}
              <div class="card-body">
                <div class="form-group">
                  <label>Product</label>
                  <select class="form-control" name="product">
                    <option value="" selected disabled >Select Product...</option>
                    @foreach ($product as $id => $name)
                        <option value="{{ $id }}"> {{ $name }} </option>
                    @endforeach
                </select>
                @error('product')
                  <span class="text-danger py-20">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                  <label>Choose Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" >
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
