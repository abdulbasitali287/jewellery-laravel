<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('assets/admin/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href={{ asset('assets/admin/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('assets/admin/adminlte/plugins/summernote/summernote-bs4.min.css') }}>
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- ckeditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> --}}
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/admin/adminlte/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <button class="nav-link">{{ Auth::user()->name }}</button>
                </li>
                @auth
                    <li class="nav-item d-none d-sm-inline-block">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('assets/admin/adminlte/dist/img/user1-128x128.jpg') }}"
                                    alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('assets/admin/adminlte/dist/img/user8-128x128.jpg') }}"
                                    alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('assets/admin/adminlte/dist/img/user3-128x128.jpg') }}"
                                    alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('assets/admin/adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/admin/adminlte/dist/img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>
                        {{-- category --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('category.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if(auth()->user()->hasRole('admin') && auth()->user()->can('edit delete'))
                        {{-- users --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- <li class="nav-item">
                                    <a href="{{ route('permission.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        {{-- permissions --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Permissions
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('permission.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('permission.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- role --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Roles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('role.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('role.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('role.permissions') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Role Permissions</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- product --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('product.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- orders --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Orders
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/orders') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- sliders --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Slider
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/slider') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('slider.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- attribute --}}
                        <li class="nav-item">
                            <a href="{{ route('attribute.show') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Attribute
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('attribute.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('attribute.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- hotel bathrooms --}}
                        <li class="nav-item">
                            <a href="{{ route('hotel-bathrooms.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Hotel Bathrooms
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('hotel-bathrooms.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hotel-bathrooms.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- image product --}}
                        <li class="nav-item">
                            <a href="{{ route('image.product.show') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Image Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('image.product.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('image.product.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- blogs --}}
                        <li class="nav-item">
                            <a href="{{ route('blogs.show') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Blog
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('blogs.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- testimonials --}}
                        <li class="nav-item">
                            <a href="{{ route('testimonial.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Testimonial
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('testimonial.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('testimonial.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- Pages --}}
                        <li class="nav-item">
                            <a href="{{ route('blogs.show') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('page.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('page.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                            {{-- sections --}}
                            <ul class="nav nav-treeview">
                                <a href="{{ route('section.index') }}" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Sections
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <li class="nav-item">
                                    <a href="{{ route('section.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('section.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                            {{-- latest collections --}}
                            <ul class="nav nav-treeview">
                                <a href="{{ route('latest.collection.index') }}" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Latest Collection
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <li class="nav-item">
                                    <a href="{{ route('latest.collection.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('latest.collection.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul>
                            {{-- meta sections
                            <ul class="nav nav-treeview">
                                <a href="{{ route('section.index') }}" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Sections Meta
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <li class="nav-item">
                                    <a href="{{ route('meta-section.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('section.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show</p>
                                    </a>
                                </li>
                            </ul> --}}
                            {{-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('page.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Pages</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs.show') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Sections</p>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('main-content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    {{-- <script src="{{ asset('assets/admin/adminlte/plugins/jquery/jquery.min.js') }}"></script> --}}
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/admin/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/admin/adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/admin/adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/admin/adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/admin/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/admin/adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{ asset('assets/admin/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('assets/admin/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/admin/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/admin/adminlte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/admin/adminlte/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
