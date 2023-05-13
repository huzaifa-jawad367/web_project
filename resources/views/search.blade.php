
@extends('layouts.main')
@push('title')
<title>Search page</title>  
@endpush
@section('main')

<nav class="navbar navbar-expand-lg   navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light  "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
 

  <form method="GET" action="{{url('/')}}/search" class="pl-5 ml-5 form-inline my-2 w-50">
    <input id="search" name="search" class=" ml-5 form-control mr-sm-2 w-50 " type="search" placeholder="Search" value="{{old('search')}}" aria-label="Search">
    <select class="form-control w-auto select2 mr-sm-2" name="select" id="select">
        <option value="1">Lost child</option>
        <option value="2">Found child</option>
      </select>
      
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </nav>

  <div class="justify-content-center"> <h3 class="mt-5  pt-5 ml-5">  Search Results for :  {{strtoupper($_GET['search'])}}</h3>
  </div>
  <div class="container-fluid   pl-5" style="min-height: 57.5vh;">
   
    @if ($type==1)
    @foreach ($search as $i)
    <x-search id="{{$i['missing_id']}}" name="{{$i['name']}}" age="{{$i['age']}}" gender="{{$i['gender']}}"  image="{{url('/')}}/storage/lost/{{$i['missing_id']}}.{{$i['image']}}" dob="{{$i['date_of_birth']}}" type={{$type}} />
   
    @endforeach
    @endif
    
    @if ($type==2)
    @foreach ($search as $i)
    <x-search id="{{$i['report_id']}}"  name="{{$i['name']}}" age="{{$i['age']}}" gender="{{$i['gender']}}"  image="{{url('/')}}/storage/found/{{$i['report_id']}}.{{$i['image']}}" dob="{{$i['date_of_birth']}}" type={{$type}} />
   
    @endforeach
    @endif
        

</div>






 @endsection 