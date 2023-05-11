{{-- @section('tital')
    Home Page
@endsection --}}
@extends('layouts.main')
@push('title')
<title> Home Page    </title>  
@endpush
@section('main')
<nav class="navbar navbar-expand-lg  navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light mr-3  disabled-link"  href="">
      <svg class=""  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
      </svg>
      Home</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link text-light mr-3" href="#">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mr-3" href="#">Log in</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light mr-3" href="{{url('/')}}/registerc">Report Lost Child</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-light mr-3" href="{{url('/')}}/report">Report Found child</a>
        </li>
      </ul>
      <form method="GET" action="{{url('/')}}/search" class="form-inline my-2 w-50">
        <input id="search" name="search" class="form-control mr-sm-2 w-50 " type="search" placeholder="Search" value="{{old('search')}}" aria-label="Search">
        <select class="form-control w-auto select2 mr-sm-2" name="select" id="select">
            <option value="1">Lost child</option>
            <option value="2">Found child</option>
          </select>
          
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  
  <!--Image carousel -->

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="{{ asset('images/child2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('images/child3.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('images/child1.jpg') }}" class="d-block  w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
    
   <h1 class="justify-content-center text-danger mt-4 text-center font-weight-bold">Saving Lives Of Children!</h1>
  <div class='cont'>
    <x-child name="Habibullah khan" age='21' img='child4.jpeg' gender='Male' missingTime='12-03-2002' />
    <x-child name="Habibullah khan" age='21' img='child5.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child6.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child7.jpeg' gender='Male' missingTime='12-03-2002' />
    <x-child name="Habibullah khan" age='21' img='child6.jpeg' gender='Male' missingTime='12-03-2002' />
    <x-child name="Habibullah khan" age='21' img='child7.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child5.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child6.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child4.jpeg' gender='Male' missingTime='12-03-2002' />
    <x-child name="Habibullah khan" age='21' img='child5.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child4.jpeg' gender='Male' missingTime='12-03-2002' />

    <x-child name="Habibullah khan" age='21' img='child7.jpeg' gender='Male' missingTime='12-03-2002' />

  

</div>  


@endsection