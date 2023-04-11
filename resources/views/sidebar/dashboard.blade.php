<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('dashboard') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                    <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                            </div>
                        </div>
                        <li class="sidebar-item">
                            <div class="card-body">
                        <div class="badges">
                        @if (Auth::user()->role_name=='Admin')
                            <span>Role:</span>
                            <span class="badge bg-success">Admin</span>
                            <hr>
                            @endif
                            @if (Auth::user()->role_name=='Employee')
                            <span>Role:</span>
                            <span class="badge bg-info">Employee</span>
                            <a href="{{ url('view/detail/' . Auth::user()->id) }}">
                                <i class="bi bi-pencil-square icon"></i>
                            </a>
                            <hr>
                            @endif
                            @if (Auth::user()->role_name=='User')
                            <span>Role:</span>
                            <span class="badge bg-warning">User Normal</span>
                            <a href="{{ url('view/detail/' . Auth::user()->id) }}">
                                <i class="bi bi-pencil-square icon"></i>
                            </a>
                            <hr>
                            @endif
                            @if (Auth::user()->role_name=='Employer')
                            <span>Role:</span>
                            <span class="badge bg-warning">Employer</span>
                            <a href="{{ url('view/detail/' . Auth::user()->id) }}">
                                <i class="bi bi-pencil-square icon"></i>
                            </a>
                            <hr>
                            @endif
                        </div>
                    </div>
                </li>
                <li class="sidebar-item active">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                @if (Auth::user()->role_name=='Admin')
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenance</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                @endif
                
                @if (Auth::user()->role_name == 'Admin' || Auth::user()->role_name == 'Employee' || Auth::user()->role_name == 'Employer')
                <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/staff/new') }}">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="sidebar-item">
                    <a href="/" class='sidebar-link'>
                    <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>