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
            {!! Form::open(['route' => 'latest.collection.store','method' => 'post','files' => true]) !!}
              <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" name="title" placeholder="title...">
                    </div>
                    @error('title')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sub Title</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" name="sub_title" placeholder="sub title...">
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
                {{-- <div class="form-group">
                    <label>Second Image</label>
                        <input type="file" class="form-control" name="image_2" >
                    @error('image_2')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Third Image</label>
                        <input type="file" class="form-control" name="image_3" >
                    @error('image_3')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Fourth Image</label>
                        <input type="file" class="form-control" name="image_4" >
                    @error('image_4')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Fifth Image</label>
                        <input type="file" class="form-control" name="image_5" >
                    @error('image_5')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sixth Image</label>
                        <input type="file" class="form-control" name="image_6" >
                    @error('image_6')
                        <span class="text-danger py-20">{{ $message }}</span>
                    @enderror
                </div> --}}
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
