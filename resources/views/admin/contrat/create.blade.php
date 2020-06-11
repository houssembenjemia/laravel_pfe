@extends('admin.layouts.app')
@section('title','Contrat')
@push('css')
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Ajouter Contrat</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('admin.contrats.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-4  {{ $errors->has('numero') ? ' has-error' : '' }}">
                                            <label for="example-text-input">N° Contrat : </label>
                                            <input class="form-control" type="text" name="numero"
                                                   value="{{old('numero')}}" id="example-text-input">
                                            @if ($errors->has('numero'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-4  {{ $errors->has('type_auto') ? ' has-error' : '' }}">
                                            <label for="example-text-input">Type Auto : </label>
                                            <select class="form-control" name="type_auto">
                                                <option disabled selected>choisir Type Auto</option>
                                                <option value="2 ou 3 Roues">2 ou 3 Roues</option>
                                                <option value="Véhicules ou autres">Véhicules ou autres</option>
                                            </select>
                                            @if ($errors->has('type_auto'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('type_auto') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('nom_assureur') ? ' has-error' : '' }}  ">
                                            <label for="example-date-input" class="col-2 col-form-label">Nom Assureur
                                                : </label>
                                            <div class="col-10">
                                                <select class="form-control" id="nom_assureur" name="nom_assureur">
                                                    <option disabled selected>choisir l'assureur</option>
                                                    <option value="Maghrebia">Maghrebia</option>
                                                    <option value="Star">Star</option>
                                                    <option value="Salim">Salim</option>
                                                    <option value="Comar">Comar</option>
                                                    <option value="Carte">Carte</option>
                                                    <option value="Ctama">Ctama</option>
                                                    <option value="GAT">GAT</option>
                                                </select>
                                                @if ($errors->has('nom_assureur'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('nom_assureur') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-12">
                                        <div class="form-group col-md-3 {{ $errors->has('date_debut') ? ' has-error' : '' }} ">
                                            <label for="example-url-input" class="col-2 col-form-label">Date d'effet
                                                : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="date_debut"
                                                       value="{{old('date_debut')}}" id="example-url-input">
                                                @if ($errors->has('date_debut'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('date_debut') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('duree') ? ' has-error' : '' }}  ">
                                            <label for="example-date-input" class="col-2 col-form-label">Durée
                                                : </label>
                                            <div class="col-10">
                                                <select class="form-control" id="sel1" name="duree">
                                                    <option disabled selected>choisir la durée</option>
                                                    <option value="RA">Annuelle</option>
                                                    <option value="RS">Semestrielle</option>
                                                    <option value="Ferme">Ferme</option>
                                                </select>
                                                @if ($errors->has('duree'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('duree') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('date_fin') ? ' has-error' : '' }}">
                                            <label for="example-number-input" class="col-2 col-form-label">Date fin
                                                : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" value="{{old('date_fin')}}"
                                                       name="date_fin" id="date_fin">
                                                @if ($errors->has('date_fin'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('date_fin') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('categorie') ? ' has-error' : '' }} ">
                                            <label for="example-url-input" class="col-2 col-form-label">Categorie
                                                : </label>
                                            <div class="col-10">
                                                <select class="form-control" name="categorie" id="categorie">
                                                    <option disabled selected>--choisir une catégorie--</option>
                                                    <option value="T">T</option>
                                                    <option value="C">C</option>
                                                </select>
                                                @if ($errors->has('categorie'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('categorie') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 style="text-decoration:  underline;">Assuré</h3>
                                    <div class="col-md-12">
                                        <div class="form-group col-md-3">
                                            <label class="col-2 col-form-label">Nom</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('nom')}}"
                                                       name="nom">
                                                @if ($errors->has('nom'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('nom') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('prenom') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label"> Prenom :</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('prenom')}}"
                                                       name="prenom">
                                                @if ($errors->has('prenom'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('prenom') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('type') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label"> Type de l'Assuré :</label>
                                            <div class="col-10 ">
                                                <select class="form-control" name="type" id="type_personne">
                                                    <option disabled selected>--choisir un Type--</option>
                                                    <option value="Personne physique">Personne physique</option>
                                                    <option value="Personne morale">Personne morale</option>
                                                </select>
                                                @if ($errors->has('type'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('identite') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label"> Identité de l'Assuré :</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('identite')}}"
                                                       name="identite">
                                                @if ($errors->has('identite'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('identite') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group col-md-3   {{ $errors->has('cin') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label" id="change_cin"> N° CIN/MF :</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('cin')}}"
                                                       name="cin">
                                                @if ($errors->has('cin'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('cin') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('tel') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label"> Tél :</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('tel')}}"
                                                       name="tel">
                                                @if ($errors->has('tel'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 {{ $errors->has('adresse') ? ' has-error' : '' }} ">
                                            <label class="col-2 col-form-label"> Adresse :</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="{{old('adresse')}}"
                                                       name="adresse">
                                                @if ($errors->has('adresse'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('adresse') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="text-decoration:  underline;">Valeur assurée</h3>
                                <div class="col-md-12">
                                    <div class="form-group col-md-3 {{ $errors->has('immatriculation') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Immatriculation :</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="{{old('immatriculation')}}"
                                                   name="immatriculation">
                                            @if ($errors->has('immatriculation'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('immatriculation') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 {{ $errors->has('genre') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Genre :</label>
                                        <div class="col-10">
                                            <select class="form-control" name="genre">
                                                <option disabled selected>choisir le genre</option>
                                                <option value="Voiture particulière">Voiture particulière</option>
                                                <option value="Voiture mixte">Voiture mixte</option>
                                                <option value="Utilitaire I">Utilitaire I</option>
                                                <option value="Utilitaire II">Utilitaire II</option>
                                                <option value="Voiture agricole">Voiture agricole</option>
                                                <option value="Transport rural">Transport rural</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Engins de chantiers">Engins de chantiers</option>
                                                <option value="Tracteur agricole">Tracteur agricole</option>
                                                <option value="Moissonneuse batteuse">Moissonneuse batteuse</option>
                                                <option value="Taxi">Taxi</option>
                                                <option value="Auto-école">Auto-école</option>
                                            </select>
                                            @if ($errors->has('genre')) <span
                                                    class="help-block"> <strong>{{ $errors->first('genre') }}</strong> </span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Contrat/avenant :</label>
                                        <div class="col-10">
                                            <input class="form-control img-file" type="file" value="{{old('image')}}"
                                                   name="image">
                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3  {{ $errors->has('type') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label">Type :</label>
                                        <div class="col-10">
                                            <select class="form-control" name="type">
                                                <option disabled selected>--choisir un Type--</option>
                                                <option value="Contrat">Contrat</option>
                                                <option value="Avenant">Avenant</option>
                                            </select>
                                            @if ($errors->has('type'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-3 {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Description :</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="description"
                                                   value="{{old('description')}}">
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div id="repeater">
                                    <h3 style="text-decoration:  underline;">Primes</h3>
                                    <div class="items" data-group="test">
                                        <!-- Repeater Content -->
                                        <div class="item-content">
                                            <div class="col-md-12">
                                                <div class=" form-group col-md-4 ">
                                                    <label class="col-2 col-form-label"> Date :</label>
                                                    <div class="col-10 {{ $errors->has('date_prime') ? ' has-error' : '' }}">
                                                        <input type="date" name="date_prime"
                                                               value="{{old('date_prime')}}"
                                                               placeholder="Enter your date"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4  {{ $errors->has('commision') ? ' has-error' : ''  }}">
                                                    <label for="example-text-input">Commision :</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span>
                                                        <input type="text" class="form-control" name="commision"
                                                               id="inputGroupSuccess3" value="{{old('commision')}}"
                                                               aria-describedby="inputGroupSuccess3Status">
                                                    </div>
                                                    @if ($errors->has('commision'))
                                                        <span class="help-block">
                                                <strong>{{ $errors->first('commision') }}</strong>
                                            </span>
                                                    @endif
                                                </div>
                                                <div class=" form-group col-md-4">
                                                    <label class="col-2 col-form-label"> Prime Totale :</label>
                                                    <div class="col-10 {{ $errors->has('prime_tot') ? ' has-error' : '' }}">
                                                        <input type="text" name="prime_tot" value="{{old('prime_tot')}}"
                                                               placeholder="Entrer la prime totale"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class=" form-group col-md-4">
                                                    <label class="col-2 col-form-label"> Type de paiement :</label>
                                                    <div class="col-10 {{ $errors->has('type_paiement') ? ' has-error' : '' }}">
                                                        <select class="form-control" name="type_paiement"
                                                                id="type_paiement">
                                                            <option disabled selected>--choisir le type de paiement--
                                                            </option>
                                                            <option value="cheque">Chèque</option>
                                                            <option value="espece">Espèce</option>
                                                            <option value="virment">Virement</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=" form-group col-md-4">
                                                    <label class="col-2 col-form-label"> Montant :</label>
                                                    <div class="col-10 {{ $errors->has('montant') ? ' has-error' : '' }}">
                                                        <input type="text" name="montant" value="{{old('montant')}}"
                                                               placeholder="Entrer le montant"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                                <div class=" form-group col-md-4 cheque hidden">
                                                    <label class="col-2 col-form-label"> Référence :</label>
                                                    <div class="col-10 {{ $errors->has('referance') ? ' has-error' : '' }}">
                                                        <input type="text" name="referance" value="{{old('referance')}}"
                                                               placeholder="Enter la référence"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class=" form-group col-md-4  cheque hidden">
                                                    <label class="col-2 col-form-label"> Date du chèque :</label>
                                                    <div class="col-10 {{ $errors->has('date_cheq') ? ' has-error' : '' }}">
                                                        <input type="date" name="date_cheq" value="{{old('date_cheq')}}"
                                                               placeholder="Entrer une date"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                                <div class=" form-group col-md-4">
                                                    <label class="col-2 col-form-label"> Banque :</label>
                                                    <div class="col-10 {{ $errors->has('banque') ? ' has-error' : '' }}">
                                                        <input type="text" name="banque" value="{{old('banque')}}"
                                                               placeholder="Entrer la banque"
                                                               class="form-control name_list"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-4  {{ $errors->has('feuille') ? ' has-error' : '' }}">
                                                    <label class="col-form-label">Feuille de caisse :</label>
                                                    <input class="form-control" type="text" name="feuille"
                                                           value="{{old('feuille')}}">
                                                    @if ($errors->has('feuille'))
                                                        <span class="help-block">
                                                <strong>{{ $errors->first('feuille') }}</strong>
                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Repeater Remove Btn -->
                                        <div class="pull-right repeater-remove-btn">
                                            <button class="btn btn-danger remove-btn">
                                                Remove
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- Repeater Heading -->
                                    <div class="repeater-heading">
                                        <h5 class="pull-left">Repeater</h5>
                                        <a href="#" class="btn btn-primary pt-5 pull-right repeater-add-btn">
                                            Ajouter Prime
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                        <a href="{{ route('admin.contrats.index') }}" class="btn btn-danger">Retour</a>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('style')
    <style>
        .form-group .img-file {
            opacity: 1 !important;
            position: relative !important;
        }
    </style>
@stop
@section('scripts')
    <script src="{{ asset("backend/js/repeater.js") }}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#type_paiement').on('change', function () {
                console.log("ready!");
                if (this.value == "cheque")
                    $(".cheque").removeClass("hidden");
                else
                    $(".cheque").addClass("hidden");
            });
            $("#repeater").createRepeater({
                showFirstItemToDefault: true,
            });
        });
    </script>
@stop