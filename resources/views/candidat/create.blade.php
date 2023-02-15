@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Formulaire d'ajout d'un candidat</h4>
            </div>
            <div class="card-body">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom">
                        <label for="">Prenom</label>
                        <input type="text" class="form-control" name="prenom">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                        <label for="">Age</label>
                        <input type="number" min="15" max="35" class="form-control" name="age">
                        <label for="">Niveau d'etude</label>
                        <select name="niveau" id="" class="form-control">
                            <option value="0" selected disabled>--Choix du niveau--</option>
                            <option value="Licence">Licence</option>
                            <option value="Master">Master</option>
                            <option value="Doctorat">Doctorat</option>
                        </select>
                        <label for="">Sexe</label><br>
                        <select name="sexe" id="" class="form-control">
                            <option value="0" selected disabled>--Choix du sexe--</option>
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                        <br><br>
                        <div class="row">
                            <button type="submit" class="btn btn-success col-md-3" style="margin-left: 30%">Ajouter</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
