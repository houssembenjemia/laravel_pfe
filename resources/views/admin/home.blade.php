@extends('layouts.templateAd')

@section('title','Dashboard Admin')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Contrat</p>
                            <h3 class="title">{{ $contratCount }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">slideshow</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Client</p>
                            <h3 class="title">{{ $clientCount }}</h3>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Comptablites</p>
                            <h3 class="title">{{ $comptabiliteCount }}</h3>
                        </div>
                        
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="yellow">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Employe</p>
                            <h3 class="title">{{ $employeCount }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Contact</p>
                            <h3 class="title">{{ $contactCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header" data-background-color="purple">
                    <h4 class="title">Les Compagnies</h4>
               </div>
               <div class="card-content table-responsive">
                    <table width="40%" align=center border=1>
			<TR>
				<TD><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Carte.png"  /></a></TD>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Comar.png"  /></a></TD>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Ctama.png" /></a></TD>
			</TR>
			<TR>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Gat.png"  align=center/></a></TD>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Magh.png"  align=center/></a></TD>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Salim.png"  align=center/></a></TD>
			</TR>
			<TR>
				<TD ><a href="{{ route('admin.contrats.create') }}"><img src="/backend/images/Star.png"  align=center/></a></TD>
			</TR>
		     </table>
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