<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;// lien vers la classe Boisson

class BoissonController extends Controller
{
    
    // Méthode pour lister les boissons par ordre alphabéthique avec le Model
    function triNomBoissons() {
        
        $boissons = Boisson::orderBy('nomboisson')->get();// Ordonne par ordre alpha les noms de boissons

        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }  

    // Méthode pour lister les boissons par ordre de prix avec le Model
    function triPrixBoissons() {
        
        $boissons = Boisson::orderBy('prixboisson')->get();// Ordonne par ordre croissant de prix
        // $boissons = Boisson::orderBy('prixboisson', 'DESC')->get();// Ordonne par ordre décroissant de prix
        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour afficher les boissons en suivant un lien avec le Model
    function showBoisson($code) {
        
        $boissons = Boisson::find($code)->get();
        dump($boissons);
        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Fonctionalités finales de la Machine à Café

    // Méthode pour lister les boissons avec le Model
    public function afficheBoissons() {
        
        $boissons = Boisson::all();// Appelle la classe pour ajouter toutes les données

        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    public function create() {

        return view('boisson.ajout-boissons');
    }

    public function store(Request $request)
    {
        $boisson = new Boisson();
        $boisson->codeboisson = $request->input('codeboisson');
        $boisson->nomboisson = $request->input('nomboisson');
        $boisson->prixboisson = $request->input('prixboisson');
        
        $boisson->save();
        return redirect('boissons/liste_des_boissons');

    }
}
