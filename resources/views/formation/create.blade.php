@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Formulaire d'ajout d'une formation</h4>
            </div>
            <div class="card-body">
                <form action="/store2" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom de la formation</label>
                        <input type="text" class="form-control" name="nom">
                        <label for="">Duree</label>
                        <input type="number" min ="1" class="form-control" name="duree">
                        <label for="">Description</label>
                        <textarea name="description"  class="form-control"id="" cols="3" rows="3"></textarea>

                        <label for="">IS STARTED</label>
                        <select name="is_started" id="" class="form-control">
                            <option value="0" selected disabled>--Choix de l etat--</option>
                            <option value="1">OUI</option>
                            <option value="0">NON</option>
                        </select>
                        <label for="">Referentiel</label>
                        <select name="ref" id="" class="form-control">
                            <option value="" selected disabled>--Choix du referentiel--</option>

                            <option value=""></option>
                        </select>
                        <label for="">Date de debut</label>
                        <input type="date" class="form-control" name="date_debut">

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
