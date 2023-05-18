
@extends('layouts.main')
@push('title')
<title>Report Lost child</title>  
@endpush
@section('main')

<nav class="navbar  navbar-expand-lg pt-3  navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-light   "  href="{{url('/')}}">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>
        Go to Home</a>
  <span style="font-size: 20px" class="mx-auto  text-light "><p >Report Lost Child</p></span>
  </nav>


{{--  For reporting missing children --}}

<form class="container mt-5 pt-5" action="{{url('/')}}/registerc" method="POST"  enctype="multipart/form-data">
    @csrf
     
    <div class="mt-4 form-group">
        <label for="missingtype">Missing Type</label>
        <select class="form-control" id="missingtype" name="missingtype" required>
            <option value="">--Select Missing Type--</option>
            <option value="Kidnapped" {{ old('missingtype') == 'Kidnapped' ? 'selected' : '' }}>Kidnapped</option>
            <option value="Abandoned" {{ old('missingtype') == 'Abandoned' ? 'selected' : '' }}>Abandoned</option>
            <option value="Give up" {{ old('missingtype') == 'Give up' ? 'selected' : '' }}>Give up</option>
        </select>
        @error('missingtype')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4 form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
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
            <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Male</option>
            <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>Female</option>
            <option value="O" {{ old('gender') == 'O' ? 'selected' : '' }}>Other</option>
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
        <label for="birth_address">Birth Address</label>
        <textarea class="form-control" style="resize: none" id="birth_address" name="birth_address" rows="3" required>{{ old('birth_address') }}</textarea>
        @error('birth_address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4 form-group">
        <label for="missing_address">Missing Address</label>
        <textarea class="form-control" style="resize: none" id="missing_address" name="missing_address" rows="3" required>{{ old('missing_address') }}</textarea>
        @error('missing_address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4 form-group">
        <label for="missing_time">Missing since</label>
        <input type="date" class="form-control" id="missing_time" name="missing_time" value="{{ old('missing_time') }}"
            required>
        @error('missing_time')
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
        <label for="blood">Blood Group</label>
        <select class="form-control" id="blood" name="blood" required>
            <option value="">--Select Blood Group--</option>
            <option value="A+" {{ old('blood') == 'A+' ? 'selected' : '' }}>A +</option>
            <option value="A-" {{ old('blood') == 'A-' ? 'selected' : '' }}>A -</option>
            <option value="B+" {{ old('blood') == 'B+' ? 'selected' : '' }}>B +</option>
            <option value="B-" {{ old('blood') == 'B-' ? 'selected' : '' }}>B -</option>
            <option value="AB+" {{ old('blood') == 'AB+' ? 'selected' : '' }}>AB +</option>
            <option value="AB-" {{ old('blood') == 'AB-' ? 'selected' : '' }}>AB -</option>
            <option value="O+" {{ old('blood') == 'O+' ? 'selected' : '' }}>O +</option>
            <option value="O-" {{ old('blood') == 'O-' ? 'selected' : '' }}>O -</option>
        </select>
        @error('blood')
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
        <label for="family_information">Family Information</label>
        <textarea class="form-control" style="resize: none" id="family_information" name="family_information" rows="5" required>{{ old('family_information') }}</textarea>
        @error('family_information')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    

    <div class="mt-4 form-group">
        <label for="image">Upload picture</label>
        <input type="file" id="image" name="image">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
   


     
    <div class="form-group">
        <button class="mt-4 text-light col-4 mx-auto form-control form-control-lg bg-dark" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection