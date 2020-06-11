<ul class="nav">
        <li @if(Route::current()->getName() == 'admin.home') class="active" @endif >
            <a href="{{route('admin.home')}}"><i class="material-icons">dashboard</i>
                <p>Dashboard</p></a>
        </li>
      <li @if(Route::current()->getName() == 'admin.contrats.index') class="active" @endif >
            <a href="{{route('admin.contrats.index')}}"><i class="fas fa-file"></i>
                <p>Contrats</p></a>
        </li>
     <li @if(Route::current()->getName() == 'admin.clients.index') class="active" @endif >
            <a href="{{route('admin.clients.index')}}"><i class="far fa-user"></i>
                <p>Clients</p></a>
        </li>
     <li @if(Route::current()->getName() == 'admin.clients.index') class="active" @endif >
            <a href="{{route('admin.clients.index')}}"><i
                        class="material-icons">library_books</i>
                <p>Comptablites</p></a>
        </li>
     <li @if(Route::current()->getName() == 'admin.employes.index') class="active" @endif >
            <a href="{{route('admin.employes.index')}}"><i class="material-icons">message</i>
                <p>Employes</p></a>
        </li>
      <li @if(Route::current()->getName() == 'admin.contacts.index') class="active" @endif >
            <a href="{{route('admin.contacts.index')}}"><i class="far fa-comment-dots"></i>
                <p>Contacts</p></a>
        </li>
</ul>
