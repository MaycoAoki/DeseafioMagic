<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
  <div class="logo"></div>  
        
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'createMovie' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('createMovie') }}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Registrar Novo Filme') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'listaFilme' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('listaFilme') }}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Lista de Filmes') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>