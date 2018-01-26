@extends('template.template')
      
@section('titre')
    Boissons triées par nom
@endsection

@section('content')
<div class = "container">
    <div class="tableauBoissons">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Prix de la boisson</b></td>
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
@endsection