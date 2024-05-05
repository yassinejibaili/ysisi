@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
    List of employee
@endsection

@section('content_header')
    <h1>List of employes</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>EMPLOYES</h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <table id="myTable" class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Departement</th>
                                <th>Hired</th>
                                <th>CIN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $key => $employe)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$employe->fullname}}</td>
                                    <td>{{$employe->departement}}</td>
                                    <td>{{$employe->hired_date}}</td>
                                    <td>{{$employe->CIN}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('employes.show',$employe->registration_number)}}" 
                                            class="btn btn sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('employes.edit',$employe->registration_number)}}" 
                                            class="btn btn sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>    
                                        <form id="{{$employe->registration_number}}" action="{{ route('employes.destroy',$employe->registration_number)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit"
                                            onclick="deleteEmp('{{$employe->registration_number}}')"
                                            class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>  
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection

@section('js')
    <script>

        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                button : [
                    'copy' , 'excel' , 'csv' , 'pdf' , 'print' , 'colvis'
                ]
            })
        });
        function deleteEmp(id){
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Employe has been deleted.",
                        icon: "success"
                    });
                }
            });

        }
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 2500,
            });
        </script>

    @endif

@endsection