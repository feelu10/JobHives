<link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}">
@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="textx burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-content">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    @if (Auth::user()->role_name=='Admin')
                                        <h6 class="text-muted font-semibold">Activity Log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $activity_logs }}</h6>
                                    @elseif (Auth::user()->role_name=='Employee')
                                        <h6 class="text-muted font-semibold">Activity Log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $activity_logs }}</h6>
                                    @elseif (Auth::user()->role_name=='Employer')
                                        <h6 class="text-muted font-semibold">Job views</h6>
                                        <h6 class="font-extrabold mb-0">200</h6>
                                    @else   
                                        <h6 class="text-muted font-semibold">Applied jobs</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    @if (Auth::user()->role_name=='Admin')
                                        <h6 class="text-muted font-semibold">User log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $user_activity_logs }}</h6>
                                    @elseif (Auth::user()->role_name=='Employee')
                                        <h6 class="text-muted font-semibold">User log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $user_activity_logs }}</h6>
                                    @elseif (Auth::user()->role_name=='Employer')
                                        <h6 class="text-muted font-semibold">Number of hires</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                    @else
                                        <h6 class="text-muted font-semibold">Interviews</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    @if (Auth::user()->role_name=='Admin')
                                        <h6 class="text-muted font-semibold">User Total</h6>
                                        <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                                        @elseif (Auth::user()->role_name=='Employee')
                                        <h6 class="text-muted font-semibold">User Total</h6>
                                        <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                                        @elseif (Auth::user()->role_name=='Employer')
                                        <h6 class="text-muted font-semibold">Total jobs </h6>
                                        <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                                        @else
                                        <h6 class="text-muted font-semibold">Available Jobs</h6>
                                        <h6 class="font-extrabold mb-0">500</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    @if (Auth::user()->role_name=='Admin')
                                        <h6 class="text-muted font-semibold">Saved Record</h6>
                                        <h6 class="font-extrabold mb-0">{{ $staff }}</h6>
                                        @elseif (Auth::user()->role_name=='Employee')
                                        <h6 class="text-muted font-semibold">Saved Record</h6>
                                        <h6 class="font-extrabold mb-0">{{ $staff }}</h6>
                                        @elseif (Auth::user()->role_name=='Employer')
                                        <h6 class="text-muted font-semibold"> Total Resume </h6>
                                        <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                                        @else
                                        <h6 class="text-muted font-semibold">Saved Jobs</h6>
                                        <h6 class="font-extrabold mb-0">0</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->role_name=='Employer')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Job clicks</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (Auth::user()->role_name=='Admin')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Total user</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
<!------------------------footer ------------------------->
@include('view_record.footer')
</div>
@endsection