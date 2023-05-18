
@extends('layouts.main')
@push('title')
<title>Report Lost child</title>  
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
          <a class="nav-link text-light mr-3" href="logout">Logout</a>
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

  <table class="table" style="margin:5rem">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
        </tr>
    </tbody>
  </table>