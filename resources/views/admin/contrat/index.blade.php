@extends('admin.layouts.app')
@section('title','Contrat')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gestion des contrats</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dropdown pull-right">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nouveau
                            Contrat
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin.contrats.create') }}">2Roues/ 3Roues</a></li>
                            <li><a href="{{ route('admin.contrats.create') }}">Véhicule ou autres</a></li>
                            <!--li><a href="#">JavaScript</a></li-->
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Contrats</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Police</th>
                                <th>Type</th>
                                <th>Assuré</th>
                                <th>Effet</th>
                                <th>Fin</th>
                                <th>Nature</th>
                                <th>Cat</th>
                                <th>Prime</th>
                                <th>Fc</th>
                                <th>Etat</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($contrats as $contrat)
                                    <tr>
                                        <td>{{ $contrat->numero }}</td>
                                        <td>{{ $contrat->type_auto }}</td>
                                        <td>{{ $contrat->client->nom}}</td>
                                        <td>{{ $contrat->date_debut }}</td>
                                        <td>{{ $contrat->date_fin }}</td>
                                        <td>{{ $contrat->duree }}</td>
                                        <td>{{ $contrat->categorie }}</td>
                                        <td>{{ $contrat->prime->montant}}</td>
                                        <td></td>
                                        <td> @if ($contrat->etat =="0")
                                                <a href="#exampleModal{{$contrat->id}}" data-toggle="modal"
                                                   data-target="#exampleModal{{$contrat->id}}"> en cours</a>
                                            @elseif($contrat->etat  =="1")
                                                <a href="#exampleModal{{$contrat->id}}" data-toggle="modal"
                                                   data-target="#exampleModal{{$contrat->id}}"> Resilier </a>
                                            @else ($contrat->etat  =="2")
                                                <a href="#exampleModal{{$contrat->id}}" data-toggle="modal"
                                                   data-target="#exampleModal{{$contrat->id}}"> Suspendu</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.contrats.edit',$contrat->id) }}"
                                               class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                            <a href="{{ route('admin.contrats.show',$contrat->id) }}"
                                               class="btn btn-info btn-sm"><i class="material-icons">details</i></a>
                                            <form id="delete-form-{{ $contrat->id }}"
                                                  action="{{ route('admin.contrats.destroy',$contrat->id) }}"
                                                  style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $contrat->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">delete</i></button>
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
    </div>
    @foreach($contrats as $contrat)
        <div class="modal fade" id="exampleModal{{$contrat->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title center" id="exampleModalLabel">modifer Etat contrat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('changerEtat/'.$contrat->id)}}">
                            {{ csrf_field() }}
                            <div class="radio">
                                <label><input type="radio" value="0" onclick="this.form.submit()" name="etat"
                                              @if ($contrat->etat  =="0") checked @endif>En Cour </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="1" onclick="this.form.submit()" name="etat"
                                              @if ($contrat->etat  =="1") checked @endif > Résilié </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="2" onclick="this.form.submit()" name="etat"
                                              @if ($contrat->etat  =="2") checked @endif> Suspendu</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
@endpush