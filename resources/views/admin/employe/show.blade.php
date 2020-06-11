@extends('admin.layouts.app')
@section('title','Employe')
@push('css')
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Nom: {{ $employe->nom }}</strong><br>
                                    <b>Prenom: {{ $employe->prenom }}</b> <br>
                                    <b>Adresse: {{ $employe->adresse }}</b> <br>
                                    <b>Sexe: {{ $employe->sexe }}</b> <br>
                                    <b>Date entree: {{ $employe->date_entree }}</b> <br>
                                    <b>Salaire: {{ $employe->salaire }}</b> <br>
                                    <b>Departement: {{ $employe->departement }}</b> <br>
                                </div>
                            </div>
                            <a href="{{ route('admin.employes.index') }}" class="btn btn-danger">Retour</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush