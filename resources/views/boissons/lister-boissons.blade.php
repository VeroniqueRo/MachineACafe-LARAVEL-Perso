@extends('template.template')
      
@section('titre')
    Liste des boissons
@endsection

@section('content')
<div class = "container">
    <div class="tableauBoissons">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom de la boisson</b></td>
                <td><b>Prix de la boisson</b></td>
                <td><b>Lien vers la fiche boisson</b></td>
            </tr>
            <tr>  
                @foreach($boissons as $boisson)
                <td>{{$boisson->nomboisson}}</td>
                <td>{{$boisson->prixboisson}}</td>
                <td><a href="/boisson/{{$boisson->codeboisson}}">Détails "{{$boisson->nomboisson}}"</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>    
@endsection