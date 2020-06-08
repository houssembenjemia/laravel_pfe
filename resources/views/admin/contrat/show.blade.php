@extends('layouts.templateAd')

@section('title','Contrat')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="panel-heading">
          <h3 class="text-center" >Contrat Automobile N° : {{$contrat->numero}}</h3>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                        <div  class="list-group-item list-group-item-info">Client</div>

              <div  class="list-group-item  "><span style="float: left">Identité :&nbsp </span> <span style="right: left">@if($contrat->client->identite != "") {{$contrat->client->identite}}
              @else -
          @endif</span></div>
              <div  class="list-group-item " > <span style="float: left">CIN :&nbsp </span>@if($contrat->client->cin != "") {{$contrat->client->cin}}
              @else -
          @endif</div>
              <div  class="list-group-item "> <span style="float: left">Téléphone :&nbsp </span>@if($contrat->client->tel != "") {{$contrat->client->tel}}
              @else -
          @endif</div>
              <div  class="list-group-item "><span style="float: left">Adresse :&nbsp </span>@if($contrat->client->adresse != "") {{$contrat->client->adresse}}
              @else -
          @endif</div>
          </div>
          <div class="card-content"  >
                <div  class="list-group-item list-group-item-info">Compagnie</div>
                <div  class="list-group-item  ">{{$contrat->nom_assureur}}</div>
              </div>
              <div class="card-content"  >
                <div  class="list-group-item list-group-item-info">Objet</div>
                <table class="table">
                <thead>
                  <th>Immatriculation</th>
                  <th>Genre</th>
                  <th>Type</th>
                  <th>Description</th>
                  
                    </thead>
              <tbody>
                <tr>
                  <td> {{$contrat->objet->immatriculation}}</td>
                  <td> {{$contrat->objet->genre}}</td>
                  <td> {{$contrat->objet->type}}</td>
                  <td> {{$contrat->objet->description}}</td>
              </tr>
              </tbody>
              </table>
              </div>
              <div class="card-content"  >
                <div  class="list-group-item list-group-item-info">Prime</div>
                <table class="table">
                <thead>
                  <th>Date de la prime</th>
                  <th>Commission</th>
                  <th>Prix total</th>
                 <th> Type de paiement </th>
                 <th> Montant </th>
                  <th>Référence du chèque</th>
                    </thead>
                    <tbody>
                <tr>
                  <td> {{$contrat->prime->date_prime}}</td>
                  <td> {{$contrat->prime->commision}}</td>
                  <td> {{$contrat->prime->prime_tot}}</td>
                  <td> {{$contrat->prime->type_paiement}}</td>
                  <td> {{$contrat->prime->montant}}</td>
                  <td> {{$contrat->prime->referance}}</td>
              </tr>
              </tbody>
              </table>
              </div>
                           
                            <a href="{{ route('admin.contrats.index') }}" class="btn btn-danger">Retour</a>
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