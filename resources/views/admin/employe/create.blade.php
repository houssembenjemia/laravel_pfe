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
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Ajouter Employe</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('admin.employes.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nom</label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Prenom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Adresse</label>
                                            <input type="text" class="form-control" name="adresse">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <libellé>Sexe</libellé>
                                        <select name="sexe">
                                            <option value=""></option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Date Entree</label>
                                            <input type="date" class="form-control" name="date_entree">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Salaire</label>
                                            <input type="text" class="form-control" name="salaire">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Departement</label>
                                            <input type="text" class="form-control" name="departement">
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