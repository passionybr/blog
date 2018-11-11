 @extends('master')
 @section('title','Login')
 @section('content')
 <h3> Login page </h3>
 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
 <form action="dologin" method="post" autocomplete="off">
     @csrf;
    <label> Email </label>
    <input type="text" name="email" id="email" value="">
    <br><br>
    <label> Password </label>
    <input type="password" name="password" id="password" value="">
    <br><br>
    <input type="submit"  name="submit" id="submit" value="Login">
</form>
 
 
 @endsection