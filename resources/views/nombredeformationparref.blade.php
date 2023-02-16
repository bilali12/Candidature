@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Nombre de Formation par referentiel</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        @foreach ($referentiels as $referentiel )
                            <th>{{$referentiel->libelle}}</th>
                        @endforeach
                    </thead>
                    <tbody>
                        @foreach ($referentiels as $referentiel )
                        <?php $cpt = 0 ?>
                        @foreach ($formations as $formation)
                            @if ($referentiel->id == $formation->referentiel_id)
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
