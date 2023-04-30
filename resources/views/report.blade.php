
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form class="container" action="{{url('/')}}/report" method="POST"  enctype="multipart/form-data">
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
        <button class="mt-4 form-control form-control-lg bg-primary" type="submit" class="btn btn-primary">Submit</button>
    </div>

    
</form>