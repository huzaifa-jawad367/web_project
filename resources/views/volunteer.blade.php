
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form class="container" action="{{url('/')}}/registerv" method="POST" >
    @csrf
    <div class="mt-5  form-group">
        <label for="cnic">CNIC</label>
        <input type="text" class="form-control" id="cnic" name="cnic" value="{{ old('cnic') }}" required>
        @error('cnic')
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
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-4 form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" pattern="\d{4}-\d{7}" placeholder="0300-0000000" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
        @error('phone')
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
        <label for="address">Address</label>
        <textarea class="form-control" style="resize: none" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-4 form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @error('password')
            <span class="text-danger"> {{ $message }}</span>
        @enderror
    </div>
    <div class="mt-4 form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        @error('confirm_password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mt-4 form-group">
        <button class="mt-4 form-control form-control-lg bg-primary" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>