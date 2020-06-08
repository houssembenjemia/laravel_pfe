<?php

namespace App\Http\Controllers\Employe;

use Auth;
use App\Contrat;
use App\Client;
use App\Objet;
use App\Prime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contrats = Contrat::all();
        return view('employe.contrat.index',compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contrats = new Contrat();
        return view('employe.contrat.create', ['contrat'=>$contrats]);
    }
    public function changerEtatAuto($id,Request $request)
    {
           $contrat= Contrat::find($id);
           if($contrat)
           {
            $contrat->etat=$request->etat;
            $contrat->update();
            return redirect()->route('employe.contrat.index');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required|max:255',
            'prenom'=>'required',
            'identite' => 'required',
            'cin' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            'type' => 'required',
        ]);
        // Update new Assure (client)
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->identite = $request->identite;
        $client->cin = $request->cin;
        $client->tel = $request->tel;
        $client->adresse = $request->adresse;
        $client->type = $request->type;
        $client->save();

        $this->validate($request,[
            'immatriculation' => 'required',
            'genre'=>'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        // Update new valeur Assure (objet)
        $objet = new Objet();
        $objet->immatriculation = $request->immatriculation;
        $objet->genre = $request->genre;
        $objet->type = $request->type;
        $objet->description = $request->description;
        $objet->image = $request->image;
        $objet->save();

        $this->validate($request,[
            'date_prime' => 'required',
            'commision'=>'required',
            'prime_tot' => 'required',
            'type_paiement' => 'required',
            'montant' => 'required',
            'referance' => 'required',
            'date_cheq' => 'required',
            'banque' => 'required',
            'feuille' => 'required',
        ]);
        // Update new prime 
        $prime  = new Prime();
        $prime->date_prime = $request->date_prime;
        $prime->commision = $request->commision;
        $prime->prime_tot = $request->prime_tot;
        $prime->type_paiement = $request->type_paiement;
        $prime->montant = $request->montant;
        $prime->referance = $request->referance;
        $prime->date_cheq = $request->date_cheq;
        $prime->banque = $request->banque;
        $prime->feuille = $request->feuille;
        $prime->save();
        $this->validate($request,[
            'numero' => 'required',
            'nom_assureur' => 'required',
            'type_auto'=>'required',
            'date_debut' => 'required',
            'duree' => 'required',
            'date_fin' => 'required',
            'categorie' => 'required',
        ]);
        $contrat = new Contrat();
        $contrat->numero = $request->numero;
        $contrat->nom_assureur = $request->nom_assureur;
        $contrat->type_auto = $request->type_auto;
        $contrat->date_debut = $request->date_debut;
        $contrat->duree = $request->duree;
        $contrat->date_fin = $request->date_fin;
        $contrat->categorie = $request->categorie;
        $contrat->id_cli=$client->id;
        $contrat->id_obj=$objet->id;
        $contrat->id_pri=$prime->id;
        $contrat->save();

        return redirect()->route('employe.contrats.index')->with('successMsg','Contrat Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        return view('admin.contrat.show')->with('contrat', $contrat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrat = Contrat::find($id);
        return view('employe.contrat.edit',compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nom' => 'required|max:255',
            'prenom'=>'required',
            'identite' => 'required',
            'cin' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            'type' => 'required',
        ]);
        // Update new Assure (client)
        $client =  Client::find($id);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->identite = $request->identite;
        $client->cin = $request->cin;
        $client->tel = $request->tel;
        $client->adresse = $request->adresse;
        $client->type = $request->type;
        $client->save();

        $this->validate($request,[
            'immatriculation' => 'required',
            'genre'=>'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        // Update new valeur Assure (objet)
        $objet =  Objet::find($id);
        $objet->immatriculation = $request->immatriculation;
        $objet->genre = $request->genre;
        $objet->type = $request->type;
        $objet->description = $request->description;
        $objet->image = $request->image;
        $objet->save();

        $this->validate($request,[
            'date_prime' => 'required',
            'commision'=>'required',
            'prime_tot' => 'required',
            'type_paiement' => 'required',
            'montant' => 'required',
            'referance' => 'required',
            'date_cheq' => 'required',
            'banque' => 'required',
            'feuille' => 'required',
        ]);
        // Update new prime 
        $prime =  Prime::find($id);
        $prime->date_prime = $request->date_prime;
        $prime->commision = $request->commision;
        $prime->prime_tot = $request->prime_tot;
        $prime->type_paiement = $request->type_paiement;
        $prime->montant = $request->montant;
        $prime->referance = $request->referance;
        $prime->date_cheq = $request->date_cheq;
        $prime->banque = $request->banque;
        $prime->feuille = $request->feuille;
        $prime->save();
        $this->validate($request,[
            'numero' => 'required',
            'nom_assureur' => 'required',
            'type_auto'=>'required',
            'date_debut' => 'required',
            'duree' => 'required',
            'date_fin' => 'required',
            'categorie' => 'required',
        ]);
        $contrat =  Contrat::find($id);
        $contrat->numero = $request->numero;
        $contrat->nom_assureur = $request->nom_assureur;
        $contrat->type_auto = $request->type_auto;
        $contrat->date_debut = $request->date_debut;
        $contrat->duree = $request->duree;
        $contrat->date_fin = $request->date_fin;
        $contrat->categorie = $request->categorie;
        $contrat->id_cli=$client->id;
        $contrat->id_obj=$objet->id;
        $contrat->id_pri=$prime->id;
        $contrat->save();

        return redirect()->route('employe.contrats.index')->with('successMsg','Contrat Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Contrat::find($id)->delete();
       return redirect()->back()->with('successMsg','Contrat Successfully Delete');
    }
    public function logout()
    {
    auth()->logout();

    return redirect('/login');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
