
@extends('layouts.main')
@push('title')
<title>Report Found child</title>  
@endpush
@section('main')

<nav class="navbar navbar-expand-lg   navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light  "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
  <span style="font-size: 20px" class="mx-auto  text-light "><p >Report Found Child</p></span>
  </nav>





{{-- For reporting found children --}}

<form  class="container pt-5" action="{{url('/')}}/report" method="POST"  enctype="multipart/form-data">
    @csrf
     
   
    <div class=" mt-5 form-group">
        <label for="name">Name</label>
        <input type="text" class=" form-control" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4 form-group">
        <label for="age">Age</label>
        <input type="number" min=0 max=100 class="form-control" id="age" name="age" value="{{ old('age') }}" required>
        @error('age')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4 form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="">--Select Gender--</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4 form-group">
        <label for="dateofbirth">Date of Birth</label>
        <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value="{{ old('dateofbirth') }}"
            required>
        @error('dateofbirth')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

   
   
   
    <div class="mt-4 form-group">
        <label for="address">Address</label>
        <textarea class="form-control" style="resize: none" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4 form-group">
        <label for="address_found">Address Found</label>
        <textarea class="form-control" style="resize: none" id="address_found" name="address_found" rows="3" required>{{ old('address_found') }}</textarea>
        @error('address_found')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4 form-group">
        <label for="appearance">Appearance</label>
        <textarea class="form-control" style="resize: none" id="appearance" name="appearance" rows="5" required>{{ old('appearance') }}</textarea>
        @error('appearance')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    
   

    <div class="mt-4 form-group">
        <label for="height">Height (Centimenters)</label>
        <input type="number" min=0 max=210 class="form-control" id="height" name="height" value="{{ old('height') }}" required>
        @error('height')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4 form-group">
        <label for="memory">Memory</label>
        <textarea class="form-control" style="resize: none" id="memory" name="memory" rows="5" required>{{ old('memory') }}</textarea>
        @error('memory')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

   

    <div class="mt-4 form-group">
        <label for="other_info">Other Information</label>
        <textarea class="form-control" style="resize: none" id="other_info" name="other_info" rows="5" required>{{ old('other_info') }}</textarea>
        @error('other_info')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    

    <div class="mt-4 form-group">
        <label for="image">Upload picture</label>
        <input class="form-control" type="file" id="image" name="image">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
   
    <div class="form-group">
        <button class="mt-4 text-light col-4 mx-auto form-control form-control-lg bg-dark" type="submit" class="btn btn-primary">Submit</button>
    </div>

    
</form>
@endsection