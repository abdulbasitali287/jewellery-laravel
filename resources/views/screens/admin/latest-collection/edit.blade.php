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
              <h3 class="card-title">Meta Section</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::open(['url' => route("latest.collection.update", $latestCollection->id),'method' => 'post','files' => true]) !!}
              <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" name="title" value="{{ old('title',$latestCollection->title) }}">
                    </div>
                    @error('title')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sub Title</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" name="sub_title" value="{{ old('sub_title',$latestCollection->sub_title) }}">
                    </div>
                    @error('sub_title')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image</label>
                        <input type="file" class="form-control" name="image" >
                    @error('image')
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
        // $(document).ready(function () {
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
