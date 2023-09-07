<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-5 d-none d-sm-inline">Admin Panel</span>
    </a>
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link align-middle px-0 text-light">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/products" class="nav-link align-middle px-0 text-light">
                <i class="fs-4 bi-cart"></i> <span class="ms-1 d-none d-sm-inline">Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/customer" class="nav-link align-middle px-0 text-light">
                <i class="fs-4 bi-person"></i> <span class="ms-1 d-none d-sm-inline">Customer</span>
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown pb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1"> {{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{route('user.logout')}}">Sign out</a></li>
        </ul>
    </div>
</div>