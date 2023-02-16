@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Formulaire d'attribution d'une formation a un candidat</h4>
            </div>
            <div class="card-body">
                <form action="/store5" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Candidat</label>
                        <select class="form-control" name="candidat">
                            <option value="0" selected disabled>--Choisir le candidat--</option>
                            @foreach ($candidats as $candidat )
                            <option value="{{$candidat->id}}">{{$candidat->id}}</option>
                            @endforeach
                        </select>
                        <label for="">Formation</label>
                        <select class="form-control" name="formation">
                            <option value="0" selected disabled>--Choisir la formation--</option>
                            @foreach ($formations as $formation )
                            <option value="{{$formation->id}}">{{$formation->id}}</option>
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
