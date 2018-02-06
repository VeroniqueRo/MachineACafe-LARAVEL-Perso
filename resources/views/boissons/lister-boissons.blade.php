@extends('template.template')
      
@section('titre')
    Liste des boissons
@endsection

@section('content')
<div class = "container">
    <div class="tableauBoissons">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom de la boisson</b></br><a href="{{ url('/boissons/lister_et_trier_nom')}}"><button type="button" class="btn btn-light">Classer</button></a></td>
                <td><b>Prix de la boisson</b></br><a href="{{ url('/boissons/lister_et_trier_prix')}}"><button type="button" class="btn btn-light">Ordre croissant</button></a></td>
                <td><b>Lien vers la fiche boisson</b></td>
            </tr>
            <tr>  
                @foreach($boissons as $boisson)
                <td>{{$boisson->nomboisson}}</td>
                <td>{{$boisson->prixboisson}}</td>
                <td><a href="/boisson/{{$boisson->codeboisson}}">Détails "{{$boisson->nomboisson}}"</a></td>
            </tr>
            @endforeach
        </table>
        <a href="/boisson/ajouter-boisson"><button type="button" class="btn btn-success">Ajouter</button></a>
        <button type="button" class="btn btn-warning">Modifier</button>
        <button type="button" class="btn btn-danger">Effacer</button>
    </div>
</div>    
@endsection

Ordre par nom
      <a href="{{ url('/boissons/lister_et_trier_prix')}}">Ordre par prix</a>