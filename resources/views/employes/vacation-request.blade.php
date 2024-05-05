@extends('adminlte::page')

@section('title')
    Demande de Congé
@endsection

@section('content')
    <div class="container">
       <div class="row my-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="text-muted text-center">
                                    <p class="text-left">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Royaume du Maroc<br> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ministère de l'Intérieur<br> 
                                        Wilaya de la Région Guelmim-Oued Noun<br> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Province de Guelmim<br> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secrétariat Général<br> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;****<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Division Ressources Humaines
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-11">
                            <h3 class="text-center text-dark my-5">
                                Demande de Congé
                            </h3>
                        </div>
                        <p class="lead">
                            <b>{{$employe->fullname}}</b> est actuellement employé(e) sous ma responsabilité
                        </p>
                        <p class="lead">
                            au sein du département :<b>{{$employe->departement}}</b>.
                        </p>
                        <p class="lead">
                            Demande un congé à partir du <b>_____________________</b>.
                        </p>
                        <p class="lead">
                            Et se termine le <b>______________________</b>.
                        </p>
                        <p class="m-5">
                            Signature :
                            __________________
                            __________________
                            __________________
                        </p>
                        <div class="my-4">
                            <a href="#" 
                                onclick="
                                        document.getElementById('printLink').style.display = 'none'
                                        setTimeout(function(){
                                            document.getElementById('printLink').style.display = 'inline-block'
                                        },2000); 
                                        window.print();
                                    " 
                                class="btn btn-sm btn-primary" id="printLink">
                                <i class="fas fa-print"></i>
                                Imprimer
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
       </div>
    </div>
@endsection
