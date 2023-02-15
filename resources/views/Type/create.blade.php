@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Formulaire d'ajout d'un type</h4>
            </div>
            <div class="card-body">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Libelle du type</label>
                        <input type="text" name="libelle" class="form-control">
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
