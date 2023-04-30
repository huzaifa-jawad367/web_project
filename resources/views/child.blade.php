
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form class="container" action="{{url('/')}}/registerc" method="POST"  enctype="multipart/form-data">
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
        <label for="family_info">Family Information</label>
        <textarea class="form-control" style="resize: none" id="family_info" name="family_info" rows="5" required>{{ old('family_info') }}</textarea>
        @error('family_info')
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
        <button class="mt-4 form-control form-control-lg bg-primary" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>