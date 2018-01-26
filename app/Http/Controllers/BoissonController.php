<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;// lien vers la classe Boisson

class BoissonController extends Controller
{
    // Méthode pour lister les boissons avec le Model
    function afficheBoissons() {
        
        $boissons = Boisson::all();// Appelle la classe pour ajouter toutes les données

        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour lister les boissons par ordre alphabéthique avec le Model
    function triNomBoissons() {
        
        $boissons = Boisson::orderBy('nomboisson')->get();// Ordonne par ordre alpha les noms de boissons

        return view('boissons.lister-boissons-trinom', ['boissons'=>$boissons]);
    
    }  

    // Méthode pour lister les boissons par ordre de prix avec le Model
    function triPrixBoissons() {
        
        $boissons = Boisson::orderBy('prixboisson', 'DESC')->get();// Ordonne par ordre décroissant de prix (ne rien mettre si ordre croissant)
        return view('boissons.lister-boissons-triprix', ['boissons'=>$boissons]);
    
    }

    // Méthode pour afficher les boissons en suivant un lien avec le Model
    function showBoisson($code) {
        
        $boissons = Boisson::find($code)->get();
        dump($boissons);
        return view('boissons.show-boisson', ['boissons'=>$boissons]);
    
    }

}
