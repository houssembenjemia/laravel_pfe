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
                            <h4 class="title">Modifier client</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('employe.clients.update',$client->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nom</label>
                                            <input type="text" class="form-control" name="nom"
                                                   value="{{ $client->nom }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Prenom</label>
                                            <input type="text" class="form-control" name="prenom"
                                                   value="{{ $client->prenom }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Identite</label>
                                            <input type="text" class="form-control" name="identite"
                                                   value="{{ $client->identite }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Cin</label>
                                            <input type="text" class="form-control" name="cin"
                                                   value="{{ $client->cin }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Telephone</label>
                                            <input type="text" class="form-control" name="tel"
                                                   value="{{ $client->tel }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Adresse</label>
                                            <input type="text" class="form-control" name="adresse"
                                                   value="{{ $client->adresse }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Type</label>
                                            <input type="text" class="form-control" name="type"
                                                   value="{{ $client->type }}">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('employe.clients.index') }}" class="btn btn-danger">Retour</a>
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