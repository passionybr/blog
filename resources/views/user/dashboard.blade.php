 @extends('master')
 @section('title','Login')
 @section('content')
 <h3> Dashboard </h3>
 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
 <div class="card-body">
     
    
    <?php
        if (Auth::check()) { 
            echo "You are logged in!!!";
        }  
    ?>
</div>
 
 
 @endsection