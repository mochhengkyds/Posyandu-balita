@extends('login.v_templatelog')
@section('title', 'login')


@section('content')
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-color:#0389FF">
            <div class="auth-box  shadow p-3 rounded">
                <div id="loginform">`
                    <div class="logo">
                        <span class="db"><img src="{{ asset('template') }}/assets/images/logo-icon.jpg"
                                alt="logo" /></span>
                        <h4 class="font-medium m-b-20">LOGIN</h4>
                        @if (Session::has('message'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" id="loginform" action="/" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend d-block w-100"
                                        style="border:none; border-bottom:1px solid #000">
                                        <span class="input-group-text" style="background: transparent; border:none"
                                            id="basic-addon1"></span>
                                        <input type="text" name="username" class="form-control form-control-lg"
                                            style="border:none" placeholder="Username" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    @error('username')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend d-block w-100"
                                        style="border:none; border-bottom:1px solid #000">
                                        <span class="input-group-text" id="basic-addon2"
                                            style="background: transparent; border:none"></span>
                                        <input type="password" name="password" class="form-control form-control-lg"
                                            style="border:none" placeholder="Password" aria-label="Password"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    @error('password')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class=" btn btn-primary" type="submit">LOGIN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
