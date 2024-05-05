@extends('adminlte::page')

@section('title')
    Update employe
@endsection

@section('content_header')
    <h1>Update employe</h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Update employe </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employes.update', $employe->registration_number) }}" method="post" class="mt-3">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><label for="registration_number" class="text-primary">Registration Number</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" placeholder="Registration Number" value="{{ old('registration_number', $employe->registration_number) }}">
                                            @error('registration_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="fullname" class="text-primary">FullName</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="FullName" value="{{ old('fullname', $employe->fullname) }}">
                                            @error('fullname')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="departement" class="text-primary">Departement</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" placeholder="Departement" value="{{ old('departement', $employe->departement) }}">
                                            @error('departement')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="CIN" class="text-primary">CIN</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('CIN') is-invalid @enderror" name="CIN" placeholder="CIN" value="{{ old('CIN', $employe->CIN) }}">
                                            @error('CIN')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="hired_date" class="text-primary">Hire Date</label></td>
                                        <td>
                                            <input type="date" class="form-control @error('hired_date') is-invalid @enderror" name="hired_date" placeholder="Hire Date" value="{{ old('hired_date', $employe->hired_date) }}">
                                            @error('hired_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="phone" class="text-primary">Phone</label></td>
                                        <td>
                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone', $employe->phone) }}">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="address" class="text-primary">Address</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address', $employe->address) }}">
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="city" class="text-primary">City</label></td>
                                        <td>
                                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ old('city', $employe->city) }}">
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <!-- Add similar error handling for other fields -->
                                </tbody>
                            </table>
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
