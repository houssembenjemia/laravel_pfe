@extends('layouts.templateAd')

@section('title','Edit')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Modifier Employe</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('admin.employes.update',$employe->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nom</label>
                                            <input type="text" class="form-control" value="{{ $employe->nom }}" name="nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Prenom</label>
                                            <input type="text" class="form-control" value="{{ $employe->prenom }}" name="prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Adresse</label>
                                            <input type="text" class="form-control" value="{{ $employe->adresse }}" name="adresse">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Sexe</label>
                                            <input type="text" class="form-control" value="{{ $employe->sexe }}" name="sexe">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date Entre</label>
                                            <input type="date" class="form-control" value="{{ $employe->date_entree }}" name="date_entree">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Salaire</label>
                                            <input type="text" class="form-control" value="{{ $employe->salaire }}" name="salaire">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Departement</label>
                                            <input type="text" class="form-control" value="{{ $employe->departement }}" name="departement">
                                        </div>
                                    </div>
                                </div>
                                
                                <a href="{{ route('admin.employes.index') }}" class="btn btn-danger">Retour</a>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush