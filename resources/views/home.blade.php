{{-- @section('tital')
    Home Page
@endsection --}}
@extends('layouts.main')
@push('title')
<title> Home Page    </title>  
@endpush
@section('main')
<nav class="navbar navbar-expand-lg  navbar-light bg-dark">
    <a class="navbar-brand text-light mr-3  disabled-link"  href="">Home</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link text-light mr-3" href="#">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light mr-3" href="#">Log in</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light mr-3" href="#">Register Lost Child</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-light mr-3" href="#">Register Found child</a>
        </li>
      </ul>
      <form method="POST" class="form-inline my-2 w-50">
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
  
  <x-child name="Habibullah khan" age='21' img='child1.jpg'/>
  <x-child name="Sam Khan" age='20' img='child2.jpg'/>
  <x-child name="Naymar khan" age='19' img='child3.jpg'/>
  <x-child name="Habibullah khan" age='21' img='child1.jpg'/>
  <x-child name="Sam Khan" age='20' img='child2.jpg'/>
  <x-child name="Naymar khan" age='19' img='child3.jpg'/>
    


@endsection