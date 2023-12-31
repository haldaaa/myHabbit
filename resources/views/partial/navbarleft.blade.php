<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=" {{ route('myindex') }}">
                <span data-feather="home" class="align-text-bottom"></span>
                Index
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{  ('create-task') }} ">
                <span data-feather="file" class="align-text-bottom"></span>
                Créé une tâche
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{  route('clientindex') }} ">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Crée clients 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{  ('mydata') }}" >
                <span data-feather="users" class="align-text-bottom"></span>
                Affichage des datas
              </a>
              <li class="nav-item">
                  <a class="nav-link" href="{{  route('produitindex') }} ">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Listes des produits
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{  route('commerciauxindex') }}">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                Liste des commerciaux
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{   ('stats') }}">
                <span data-feather="layers" class="align-text-bottom" title="Statistiques"></span>
                Statistiques
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{   ('delete-all') }}">
                <span data-feather="layers" class="align-text-bottom" title="Reset Commerciaux et Clients"></span>
                Reset B&S
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{   ('createBandS') }}">
                <span data-feather="layers" class="align-text-bottom" title="Créé Commerciaux et Clients"></span>
                Create B&S
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{   ('createVente') }}">
                <span data-feather="layers" class="align-text-bottom" title="Créé Commerciaux et Clients"></span>
                Create sells
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="">
                <span data-feather="layers" class="align-text-bottom" title="Créé Commerciaux et Clients"></span>
                Page test
              </a>
            </li>
          </ul>
        </div>
  
  
      </div>
  
      </nav>
  