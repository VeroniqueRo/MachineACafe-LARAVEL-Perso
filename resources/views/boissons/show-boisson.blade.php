@extends('template.template')
      
@section('titre')
    Détail d'une boisson avec ORM
@endsection

@section('content')
    <div class = "container">
        <div class="tableauBoissons">
            <table class = "table table-hover table-bordered">
                <tr class="active">  
                    <td><b>Nom de la boisson</b></td>
                    <td><b>Prix de la boisson</b></td>
                </tr>
                <tr>  
                    @foreach($boissons as $boisson)
                    <td>{{$boisson->nomboisson}}</td>
                    <td>{{$boisson->prixboisson}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>    
    {{dump($boissons)}}
    
@endsection