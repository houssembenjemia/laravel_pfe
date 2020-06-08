@extends('layouts.app')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
body{
      background-image: url("images/assurance.jpg") ;
background-size: cover;  
}

#box{
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.5);
    border-radius: 4px;
   
    margin-top: 50px;
    top:50px;
}

h2{
    text-align:center;
    color:white;
   
        font-size: 35px;
    font-weight: bold;
}
</style>
@section('content')
<div class="container-fluid">
    <div class="row-fluid" >
        <div class="col-md-offset-4 col-md-4" id="box">
            <h2  style="font-size: 35px;font-weight: bold;">Authentification</h2>
            <hr>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nom d'utilisateur" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="*********" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-md btn-danger pull-right">S'identifier</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        
<!------------star footer------------>
<!-- Footer -->
<div class="page-footer font-small blue pt-4" style="margin-top:371px;color:white; background-color:#174948;height:60px;line-height:60px;border-radius:3px;">
    <div class="footer-copyright text-center py-3">
      <span style="float:left;margin-left:12px">Copyright Dach-Re 2019</span>
      <span style="float:right; margin-right:15px">
Created By    
3B Groupe </span>
    </div>
  

  </div>
  <!-- Footer -->

        <!----------------  end footer----------------->





@endsection
