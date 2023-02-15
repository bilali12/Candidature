<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-warning" href="#">CAMPUS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 540px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Candidat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('candidat.create')}}">Ajouter</a></li>
                  <li><a class="dropdown-item" href="{{route('candidat.index')}}">Lister</a></li>

                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Formation
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('formation.create')}}">Ajouter</a></li>
                      <li><a class="dropdown-item" href="{{route('formation.index')}}">Lister</a></li>
                    </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Referentiel
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('referentiel.create')}}">Ajouter</a></li>
                  <li><a class="dropdown-item" href="{{route('referentiel.index')}}">Lister</a></li>

                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Type
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('type.create')}}">Ajouter</a></li>
                      <li><a class="dropdown-item" href="{{route('type.index')}}">Lister</a></li>

                    </ul>
                    </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Actions
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Choix Formation</a></li>
                  <li><a class="dropdown-item" href="#">Nombre de candidat par formation</a></li>
                  <li><a class="dropdown-item" href="#">Nombre de formation par referentiel</a></li>
                  <li><a class="dropdown-item" href="#">Repartition totale des candidats par sexe</a></li>
                  <li><a class="dropdown-item" href="#">Repartition des formations par type</a></li>
                </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Graphe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Statistique</a>
          </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
