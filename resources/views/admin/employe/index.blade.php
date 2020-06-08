@extends('layouts.templateAd')

@section('title','Employe')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{ route ('admin.employes.create') }}" class="btn btn-primary">Nouveau</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Employes</h4>
                        </div>
                        
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Nom</th>
                                <th> Prenom</th>
                                <th>Adresse</th>
                                <th>Sexe </th>
                                <th>Date entree</th>
                                <th>Salaire</th>
                                <th>Departement</th>
        
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($employes as $employe)
                                        <tr>
                                             <td>{{ $employe->id }}</td>
                                            <td>{{ $employe->nom }}</td>
                                            <td>{{ $employe->prenom }}</td>
                                            <td>{{ $employe->adresse }}</td>
                                            <td>{{ $employe->sexe }}</td>
                                            <td>{{ $employe->date_entree }}</td>
                                            <td>{{ $employe->salaire }}</td>
                                            <td>{{ $employe->departement }}</td>
                                            
                                            <td>
                                                <a href="{{ route('admin.employes.edit',$employe->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                                <a href="{{ route('admin.employes.show',$employe->id) }}" class="btn btn-info btn-sm"><i class="material-icons">details</i></a>
                                                <form id="delete-form-{{ $employe->id }}" action="{{ route('admin.employes.destroy',$employe->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $employe->id }}').submit();
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush