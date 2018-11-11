@extends('master')
@section('title', 'Register') 
@section('content')
<h3>Registration</h3>

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

<form action="createaccount" method="post" autocomplete="off">
     @csrf;
    <label> username </label>
    <input type="text" name="username" id="username" value="">
    <br><br>
    <label> Email </label>
    <input type="text" name="email" id="email" value="">
    <br><br>
    <label> Password </label>
    <input type="password" name="password" id="password" value="">
    <br><br>
    <label> Confirm password </label>
    <input type="password" name="cpassword" id="cpassword" value="">
    <br><br>
    <input type="submit" name="submit" id="submit" value="Create Account">
</form>
@endsection