@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Liste des formations</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>N°</th>
                        <th>Nom de la formation</th>
                        <th>Duree</th>
                        <th>IS STARTED</th>
                        <th>Description</th>
                        <th>Date debut</th>
                        <th>Referentiel</th>
                        <th>Action</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($formations as $formation )
                        <tr>
                            <td>{{$formation->id}}</td>
                            <td>{{$formation->nom}}</td>
                            <td>{{$formation->duree}}</td>
                            <td>{{$formation->is_started}}</td>
                            <td>{{$formation->description}}</td>
                            <td>{{$formation->date_debut}}</td>
                            <td></td>
                            <td><a href="">editer</a></td>
                            <td><a href="" class="text-danger">supprimer</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
