@extends('layouts.templateAd')

@section('title','Contrat')

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
                            <h4 class="title">Contrats</h4>
                        </div>
                        
                       
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
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
                                         
                                            <td></td>
                                            
                                           
                                           
                                            
                                                
                                               
                                                 <td>
                                                
                                                <a href="{{ route('client.contrats.show',$contrat->id) }}" class="btn btn-info btn-sm"><i class="material-icons">details</i></a>
                                                
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

<div class="modal fade" id="exampleModal{{$contrat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                   <label><input type="radio" value="0" onclick="this.form.submit()" name="etat"  @if ($contrat->etat  =="0") checked @endif>En Cour </label>
              </div>
           <div class="radio">
                 <label><input type="radio"value="1" onclick="this.form.submit()" name="etat" @if ($contrat->etat  =="1") checked @endif > Résilié </label>
            </div>
        <div class="radio">
               <label><input type="radio" value="2"  onclick="this.form.submit()" name="etat" @if ($contrat->etat  =="2") checked @endif> Suspendu</label>
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
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush