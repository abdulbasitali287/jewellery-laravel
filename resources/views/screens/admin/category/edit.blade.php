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
                        {!! Form::open(['url' => url('admin/category/update/') . '/' . $category->id, 'method' => 'post', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id" value="{{ $category->category_id }}">
                                    @foreach ($categories as $item)
                                        @if ($item->id != $category->id)
                                            <option value="{{ $item->id }}"{{ $item->id === $category->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}"
                                    placeholder="Name...">
                                @error('name')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $category->description }}" placeholder="Description..." {{ old('description') }}>
                                @error('description')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Choose Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
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
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
