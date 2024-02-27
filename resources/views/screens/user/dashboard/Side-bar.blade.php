<div class="dashboard-side-bar">
    <button class="dsh-sidebar-cls"><i class="fa-solid fa-xmark"></i></button>
    <div class="user-profile-side">
        <div class="user-img">
            <img class="img-fluid" src="{{ auth()->user()->image }}" alt="">
        </div>
        <div class="user-name">
            <h3 class="name">{{ auth()->user()->name }}</h3>
        </div>
    </div>
    <nav class="side-bar-nav-area">
        <ul class="side-bar-nav">
            <li class="side-bar-link-area">
                <a class="side-bar-link active" href="{{ url('dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li class="side-bar-link-area">
                <a class="side-bar-link" href="{{ url('dashboard/orders') }}">
                    <i class="bi bi-bar-chart"></i>
                    Orders
                </a>
            </li>
            <li class="side-bar-link-area">
                <a class="side-bar-link" href="{{ url('dashboard/addresses') }}">
                    <i class="bi bi-geo-alt"></i>
                    Addresses
                </a>
            </li>
            <li class="side-bar-link-area">
                <a class="side-bar-link" href="{{ url('dashboard/account') }}">
                    <i class="bi bi-pencil-square"></i>
                    Account details
                </a>
            </li>
            <li class="side-bar-link-area">
                <a class="side-bar-link" href="#">
                    <i class="bi bi-box-arrow-left"></i>
                    Log out
                </a>
            </li>
        </ul>
    </nav>
</div>
