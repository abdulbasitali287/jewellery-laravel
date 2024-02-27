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
            {!! Form::open(['route' => 'stock.store','method' => 'post']) !!}
              <div class="card-body">
                <div class="form-group">
                  <label>Product Name</label>
                  <select class="form-control" name="product_id">
                    <option value="" selected disabled >Select Product...</option>
                    @foreach ($stocks as $stock)
                        <option value="{{ $stock->id }}"> {{ $stock->name }} </option>
                    @endforeach
                    </select>
                  @error('product_id')
                    <span class="text-danger py-20">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                  @error('quantity')
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
