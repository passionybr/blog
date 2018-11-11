 @extends('master')
 @section('title','Login')
 @section('content')
 <h3> Profile </h3>
 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
 
  <form action="updateprofile" method="post" autocomplete="off">
     @csrf;
     <input type="hidden" name="user_id" id="user_id" value="{{$userData['user_id']}}">
     <label> Email : </label> <label>  {{$userData['email']}} </label>
      <br><br>
    <label> Username </label>
    <input type="text" name="username" id="username" value="{{$userData['username']}}">
    <br><br>
    <label> Set New Password </label>
    <input type="password" name="password" id="password" value="">
    <br><br>
    <input type="submit"  name="update" id="update" value="Update">
</form>
 
 @endsection