@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Liste des types</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>N°</th>
                        <th>Libelle</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        @foreach ($types as $type )
                        <tr>
                            <td>{{$type->id}}</td>
                            <td>{{$type->libelle}}</td>

                            <td><a href="{{ route('type.destroy',['id' =>$type->id ]) }}" class="text-danger">supprimer</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
