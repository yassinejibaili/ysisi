@extends('adminlte::page')

@section('title')
    Show employe
@endsection

@section('content_header')
    <h1>Show employe</h1>
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>{{$employe->fullname}}</h3>
                        </div>
                    </div>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                        <a href="{{route('vacation.request', $employe->registration_number)}}" class="btn btn-outline-dark">
                            Vacation Request
                        </a>
                        <a href="{{route('certificate.request', $employe->registration_number)}}" class="btn btn-outline-danger">
                            Work Certificate
                        </a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-primary">Registration Number</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->registration_number}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Full Name</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->fullname}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Department</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->departement}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">CIN</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->CIN}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Hire Date</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->hired_date}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Phone</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->phone}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Address</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->address}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">City</td>
                                        <td>
                                            <input type="text" class="form-control text-success" value="{{$employe->city}}" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

