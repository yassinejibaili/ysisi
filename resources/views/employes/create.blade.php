@extends('adminlte::page')

@section('title')
Add new employe
@endsection

@section('content_header')
    <h1>Add new employe</h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Add new employee</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('employes.store') }}" method="post" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label for="registration_number" class="text-primary">Registration Number</label>
                            <input type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" maxlength="6" placeholder="Registration Number" value="{{ old('registration_number') }}">
                            @error('registration_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="text-primary">Full Name</label>
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
                            @error('fullname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="departement" class="text-primary">Department</label>
                            <input type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" placeholder="Departement" value="{{ old('departement') }}">
                            @error('departement')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="CIN" class="text-primary">CIN</label>
                            <input type="text" class="form-control @error('CIN') is-invalid @enderror" name="CIN" placeholder="CIN" value="{{ old('CIN') }}">
                            @error('CIN')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hire_date" class="text-primary">Hire Date</label>
                            <input type="date" class="form-control @error('hired_date') is-invalid @enderror" name="hired_date" placeholder="Hire Date" value="{{ old('hired_date') }}">
                            @error('hired_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-primary">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" maxlength="10" placeholder="Phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="text-primary">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city" class="text-primary">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ old('city') }}">
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
