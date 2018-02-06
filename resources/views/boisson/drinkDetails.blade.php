@extends('template.template')
      
@section('titre')
    Détail de la boisson
@endsection

@section('content')
    @foreach($details as $boisson)
        <h3>Boisson : {{$boisson->nomboisson}}</h3>
        <h3>Prix : {{$boisson->prixboisson}} centimes d'euros</h3>
    @endforeach 
@endsection