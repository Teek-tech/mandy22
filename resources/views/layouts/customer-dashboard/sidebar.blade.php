<div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="#" class="simple-text logo-normal">
            <img src="{{ asset('img/logo/logo.png') }}" alt="">
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{request()->is('user/dashboard') ? 'active' : ''}} ">
                <a class="nav-link" href="{{ route('customer-dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{request()->is('user/profile') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('customer-dashboard.profile') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>
