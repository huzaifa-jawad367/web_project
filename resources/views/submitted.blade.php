
@extends('layouts.main')
@push('title')
<title>Form Submitted</title>  
@endpush
@section('main')

<nav class="navbar navbar-expand-lg   navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light  "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
 


   
  </nav>

<div height=500px class="container-fluid  mt-5 pt-5 text-center">
<div class="mt-5 pt-5"></div>
<h2 class="text-success mt-5">Form Submitted Succesfully</h2>
<a href="/dashboard" class="button">Go to Homepage</a>


<div class="mt-5 pt-5"></div>
</div>

 @endsection 