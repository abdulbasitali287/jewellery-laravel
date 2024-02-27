@extends('layouts.admin')
@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group flex-wrap"> <button
                                                class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>Copy</span></button>
                                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>CSV</span></button>
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>Excel</span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button"><span>PDF</span></button>
                                            <button class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button"><span>Print</span></button>
                                            <div class="btn-group"><button
                                                    class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                                    tabindex="0" aria-controls="example1" type="button"
                                                    aria-haspopup="true"><span>Column visibility</span><span
                                                        class="dt-down-arrow"></span></button></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="example1"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th colspan="11">
                                                        <h4>Order Details</h4>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Username</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Company Name</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Email</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">
                                                        Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Image: activate to sort column ascending">
                                                        Address</th>
                                                    <th colspan="2" class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Image: activate to sort column ascending">
                                                        State</th>
                                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending">
                                                        Actions</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $order->first_name . ' ' . $order->last_name }}</td>
                                                    <td>{{ $order->company_name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->description }}</td>
                                                    <td>{{ $order->street_address . ' ' . $order->city }}</td>
                                                    <td colspan="2">{{ $order->state }}</td>
                                                    {{-- <td>
                                                        <a href="{{ route('detail.orders', $order->id) }}"
                                                            class="btn btn-sm btn-success mx-2">Details</a>
                                                        </td> --}}
                                                </tr>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Image: activate to sort column ascending">
                                                        Phone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending">
                                                        Zip Code</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending">
                                                        Amount Total</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending">
                                                        Payment Type</th>
                                                    <th colspan="3" class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending">
                                                        Status</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->zip_code }}</td>
                                                    <td>{{ $order->amount_total }}</td>
                                                    <td>{{ $order->payment_type }}</td>
                                                    <td colspan="3">{{ $order->status }}</td>
                                                </tr>
                                                {{-- <div class="d-flex">
                                                            <a href="{{ route('category.edit', $item->id) }}"
                                                                class="btn btn-sm btn-success mx-2">Edit</a>
                                                            {!! Form::open(['url' => url('admin/category/destroy/') . '/' . $item->id]) !!}
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                            {!! Form::close() !!}
                                                        </div> --}}
                                                <tr>
                                                    <th colspan="11">
                                                        <h4>Product Details</h4>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Product Name</th>
                                                    <th colspan="2">Description</th>
                                                    <th colspan="2">Price</th>
                                                    <th colspan="6">Image</th>
                                                </tr>
                                                <tr>
                                                    {{-- @dd($order->products[0]->images) --}}
                                                    <td colspan="2">{{ $order->products[0]->name }}</td>
                                                    <td colspan="2">{{ $order->products[0]->description }}</td>
                                                    <td colspan="2">${{ $order->products[0]->price }}</td>
                                                    <td colspan="6"><img
                                                            src="/{{ $order->products[0]->images[0]->image }}"
                                                            width="100" alt="" srcset=""></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous"><a href="#" aria-controls="example1"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example1_next"><a
                                                        href="#" aria-controls="example1" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    {{-- <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img src="{{ asset($item->image) }}" width="100px" alt=""></td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('category.edit',$item->id) }}" class="btn btn-sm btn-success mx-2">Edit</a>
                            {!! Form::open(['url' => url('admin/category/destroy/') . "/" . $item->id]) !!}
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
        </tr>
        </tfoot>
      </table>
    </div>
        <!-- /.card-body -->
    </div> --}}
    <!-- /.card -->

    <!-- Page specific script -->
    {{-- <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> --}}
@endsection
