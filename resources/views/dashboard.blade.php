@extends('layouts.app')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{asset('img/home-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>{{ __('Dashboard') }}</h1>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span class="subheading">{{ __('You are logged in!') }}</span>
                    
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
