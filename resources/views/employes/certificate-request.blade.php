@extends('adminlte::page')

@section('title', 'Système de Gestion des Employés | '.$employe->fullname)

@section('content')
<div class="container">
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="class-header">
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
                            Attestation d'emploi
                        </h3>
                    </div>
                </div>    
                    
                    <p class="lead">
                        Je certifie que <b>{{$employe->fullname}}</b> est actuellement employé(e) sous ma responsabilité dans le département suivant :
                    </p>
                    <p class="lead">
                        Département : <b>{{$employe->departement}}</b>.
                    </p>
                    <p class="lead">
                        Sa prise de fonction a débuté le <b>{{$employe->hired_date}}</b>.
                    </p>
                    <p class="lead">
                        Cette attestation est délivrée à la demande de <b>{{$employe->fullname}}</b> pour toute fin utile.
                    </p>
                    <p class="lead">
                        Fait le <b>{{\Carbon\Carbon::today()->translatedFormat('j F Y')}}</b> à <b>{{\Carbon\Carbon::now()->format('H:i')}}</b>.
                    </p>
                    <p class="m-5">
                        Signature :
                    </p>
                    <div class="my-4">
                        <a href="#" 
                            onclick="
                                    document.getElementById('printLink').style.display = 'none'
                                    setTimeout(function(){
                                        document.getElementById('printLink').style.display = 'inline-block'
                                    },2000); 
                                    window.print(
                                    localhost = ''
                                    );
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
