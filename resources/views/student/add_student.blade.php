@extends('layouts.student_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.add_data') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end">{{ __('Student\'s Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mother"
                                class="col-md-4 col-form-label text-md-end">{{ __('Mother\'s Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother" type="text"
                                    class="form-control @error('mother') is-invalid @enderror" name="mother"
                                    value="{{ old('mother') }}" required autofocus>

                                @error('mother')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="father"
                                class="col-md-4 col-form-label text-md-end">{{ __('Father\'s Name') }}</label>

                            <div class="col-md-6">
                                <input id="father" type="text"
                                    class="form-control @error('father') is-invalid @enderror" name="father"
                                    value="{{ old('father') }}" required autofocus>

                                @error('father')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('male') is-invalid @enderror" type="radio"
                                        name="male" id="male" value="Male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('female') is-invalid @enderror" type="radio"
                                        name="female" id="female" value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>

                                @error('father')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dob"
                                class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                    name="dob" value="{{ old('dob') }}" required autocomplete="bday">

                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="aadhaar"
                                class="col-md-4 col-form-label text-md-end">{{ __('Aadhaar No.') }}</label>

                            <div class="col-md-6">
                                <input id="aadhaar" type="number"
                                    class="form-control @error('aadhaar') is-invalid @enderror" name="aadhaar" required
                                    autocomplete="aadhaar">

                                @error('aadhaar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile"
                                class="col-md-4 col-form-label text-md-end">{{ __('Contact No.') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror"
                                    name="mobile" required autocomplete="tel">

                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label for="class"
                                class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="number"
                                    class="form-control @error('class') is-invalid @enderror" name="class" required
                                    autocomplete="class">

                                @error('class')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="roll"
                                class="col-md-4 col-form-label text-md-end">{{ __('Roll No.') }}</label>

                            <div class="col-md-6">
                                <input id="roll" type="number"
                                    class="form-control @error('roll') is-invalid @enderror" name="roll" required
                                    autocomplete="roll">

                                @error('roll')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection