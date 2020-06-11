@extends('admin.layouts.app')
@section('title','Client')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Clients</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Identite</th>
                                <th>Cin</th>
                                <th>Tel</th>
                                <th>Adresse</th>
                                <th>Type</th>
                                <th>Created At</th>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->nom }}</td>
                                        <td>{{ $client->prenom }}</td>
                                        <td>{{ $client->identite }}</td>
                                        <td>{{ $client->cin }}</td>
                                        <td>{{ $client->tel }}</td>
                                        <td>{{ $client->adresse }}</td>
                                        <td>{{ $client->type }}</td>
                                        <td>{{ $client->created_at }}</td>
                                    </tr>
                                @endforeach
                                <div>
                                    {{ $clients-> links() }}
                                </div>
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
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
@endpush