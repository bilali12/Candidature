@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Nombre de Candidat par Formation</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        @foreach ($formations as $formation )
                            <th>{{$formation->nom}}</th>
                        @endforeach
                    </thead>
                    <tbody>
                        @foreach ($formations as $formation )
                        <?php $cpt = 0 ?>
                        @foreach ($candidatFormations as $candidatFormation)
                            @if ($formation->id == $candidatFormation->formation_id)
                                <?php $cpt = $cpt + 1 ?>
                            @endif
                        @endforeach
                            <td>{{$cpt}}</td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
