<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="06uFPiVLx0bFX9DrUKaT0qr9QAtRUmSZfeZanZLW">
    <title>Dashboard</title>
    <!-- Styles -->
    <!-- Bootstrap core CSS     -->
    <link href="http://127.0.0.1:8000/backend/css/bootstrap.min.css" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="http://127.0.0.1:8000/backend/css/material-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="http://127.0.0.1:8000/backend/css/demo.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    @yield('style')
</head>
<body>
<div id="app">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="http://127.0.0.1:8000/backend/img/sidebar-1.jpg">
            <div class="logo">
                <a href="http://127.0.0.1:8000" class="simple-text">Dache-RE</a>
            </div>
            <div class="sidebar-wrapper">
                @if (Auth::user()->role=="admin")
                    <ul class="nav">
                        <li @if(Route::current()->getName() == 'admin.home') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/home"><i class="material-icons">dashboard</i>
                                <p>Dashboard</p></a>
                        </li>
                        <li @if(Route::current()->getName() == 'admin.contrats.index') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/contrats"><i class="fas fa-file"></i>
                                <p>Contrats</p></a>
                        </li>
                        <li @if(Route::current()->getName() == 'admin.clients.index') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/clients"><i class="far fa-user"></i>
                                <p>Clients</p></a>
                        </li>
                        <li @if(Route::current()->getName() == 'admin.clients.index') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/comptablite"><i
                                        class="material-icons">library_books</i>
                                <p>Comptablites</p></a>
                        </li>
                        <li @if(Route::current()->getName() == 'admin.employes.index') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/employes"><i class="material-icons">message</i>
                                <p>Employes</p></a>
                        </li>
                        <li @if(Route::current()->getName() == 'admin.contacts.index') class="active" @endif >
                            <a href="http://127.0.0.1:8000/admin/contacts"><i class="far fa-comment-dots"></i>
                                <p>Contacts</p></a>
                        </li>
                    </ul>
                @elseif (Auth::user()->role=="employe")
                    <ul class="nav">
                        <li class="active">
                            <a href="http://127.0.0.1:8000/employe/home"><i class="material-icons">dashboard</i>
                                <p>Dashboard</p></a>
                        </li>
                        <li class="">
                            <a href="http://127.0.0.1:8000/employe/contrats"><i class="fas fa-file"></i>
                                <p>Contrats</p></a>
                        </li>
                        <li class="">
                            <a href="http://127.0.0.1:8000/employe/clients"><i class="far fa-user"></i>
                                <p>Clients</p></a>
                        </li>
                    </ul>
                @elseif (Auth::user()->role=="client")
                    <ul class="nav">
                        <li class="active">
                            <a href="http://127.0.0.1:8000/admin/dashboard"><i class="material-icons">dashboard</i>
                                <p>Dashboard</p></a>
                        </li>
                        <li class="">
                            <a href="http://127.0.0.1:8000/client/contrats"><i class="far fa-user"></i>
                                <p>Consulter contrats</p></a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="material-icons">exit_to_app</i>
                                    Logout
                                </a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                      style="display: none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </br>
            </br>
            </br>
            </br>
            <main class="py-3">
                @yield('content')
            </main>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <strong> Développé &amp; <i class="far fa-heart"></i> par </strong>
            <a href="#" target="_blank">3B Groupe</a>
        </p>
    </div>
</footer>
<!-- Scripts -->
<!--   Core JS Files   -->
<script src="{{asset("backend/js/jquery-3.2.1.min.js")}}" type="text/javascript"></script>
<script src="http://127.0.0.1:8000/backend/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://127.0.0.1:8000/backend/js/material.min.js" type="text/javascript"></script>
<!--  Dynamic Elements plugin -->
<script src="http://127.0.0.1:8000/backend/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="http://127.0.0.1:8000/backend/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="http://127.0.0.1:8000/backend/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="http://127.0.0.1:8000/backend/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
// Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>
<script type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
@yield("scripts")
</body>
</html>
