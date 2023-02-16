@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Liste des referentiels</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>N°</th>
                        <th>Libelle</th>
                        <th>Validité</th>
                        <th>Horaire</th>
                        <th>Type</th>
                        <th>Action</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($referentiels as $referentiel )
                        <tr>
                            <td>{{$referentiel->id}}</td>
                            <td>{{$referentiel->libelle}}</td>
                            @if ($referentiel->validated == 1)
                            <td>OUI</td>
                            @endif
                            @if ($referentiel->validated == 0)
                            <td>NON</td>
                            @endif

                            <td>{{doubleval($referentiel->horaire)}}</td>
                            @foreach ($types as $type )
                                @if ($type->id == $referentiel->type_id)
                                <td>{{$type->libelle}}</td>
                                @endif
                            @endforeach

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
