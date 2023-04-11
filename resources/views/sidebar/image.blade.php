<div class="d-flex align-items-center">
    <div class="avatar avatar-xl">
    @if(Auth::user()->avatar)
        <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
    @else
        <img src="{{ URL::to('/images/default-avatar.png') }}" alt="Default Avatar">
    @endif
    </div>
        <div class="ms-3 name">
            <h5 class="font-bold">{{ Auth::user()->name }}</h5>
        </div>
</div>
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
                <li class="sidebar-item ">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
<li class="sidebar-item">


