@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Formulaire d'ajout d'un referentiel</h4>
            </div>
            <div class="card-body">
                <form action="/store3" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Libelle du referentiel</label>
                        <input type="text" class="form-control" name="libelle_ref">
                        <label for="">Horaire</label>
                        <input type="number" step="0.01" min="1" class="form-control" name="horaire">
                        <label for="">Validate</label>
                        <select name="validated" id="" class="form-control">
                            <option value="-1" selected disabled>--choix de la validation--</option>
                            <option value="1">OUI</option>
                            <option value="0">NON</option>
                        </select>
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="-1" selected disabled>--choix du type--</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->libelle}}</option>
                            @endforeach
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
