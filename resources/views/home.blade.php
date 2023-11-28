@extends('app')
@section('content')

@auth
<center>
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
<a class="btn btn-danger" href="{{ route('post.index') }}">Message</a>
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a></center>
@endguest
@endsection
