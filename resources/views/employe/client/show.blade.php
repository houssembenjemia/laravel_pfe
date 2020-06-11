<html>
<head></head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">{{ $client->nom }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Prenom: {{ $client->prenom }}</strong> <br>
                                <b>Identite: {{ $client->identite }}</b> <br>
                                <b>Cin: {{ $client->cin }}</b><br>
                                <b>Tel: {{ $client->tel }}</b> <br>
                                <b>Adresse: {{ $client->adresse }}</b> <br>
                                <b>Type: {{ $client->type }}</b> <br>
                            </div>
                        </div>
                        <a href="{{ route('employe.clients.index') }}" class="btn btn-danger">Retour</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>