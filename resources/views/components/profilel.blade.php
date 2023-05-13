<div class="mt-5 pt-5 row justify-content-center ">
    <div class="col-md-1"></div>
    <img src="{{url('/')}}/storage/lost/{{$id}}.{{$image}}" class="col-md-4" alt="">
    <div class="col-md-1"></div>
    <div class="col-md-5">
         
        <h4 class="mt-3">Name : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; {{$name}}</h4>
        <h4 class="mt-1">Age : &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  {{$age}}</h4>
        <h4 class="mt-1">Gender : &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  {{$gender}}</h4>
        <h4 class="mt-1">Height :&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp;   {{$height}} cm</h4>
        <h4 class="mt-1">Date of birth :&nbsp; &nbsp;  {{$dob}}</h4>
        <h4 class="mt-1">Blood group : &nbsp; &nbsp;{{$blood}}</h4>
        <h4 class="mt-1">Missing type :&nbsp; &nbsp; {{$type}}</h4>
         <h4 class="d-inline-block">Missing Since : &nbsp;</h4> <h4 class="d-inline mt-1 text-danger "> {{$missing}}</h4> </span>
  
    </div>
    <div class="col-md-1"></div>

    
  <h2 class="mt-5 text-danger ">Birth Address</h2>
 <h4 class="col-md-10 text-center mx-5">{{$birthAddress}}</h4>

 <h2 class="mt-5 text-danger ">Missing Address</h2>
 <h4 class="mx-5 text-center col-md-10">{{$missingAddress}}</h4>
 
 <h2 class="mt-5 text-danger ">Appearance</h2>
 <h4 class="mx-5 text-center col-md-10">{{$appearance}}</h4>

 <h2 class="mt-5  text-danger ">Family Information</h2>
 <h4 class="mx-5 text-center col-md-10">{{$family}}</h4>

 

    
</div>