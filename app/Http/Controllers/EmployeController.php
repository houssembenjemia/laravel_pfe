<?php

namespace App\Http\Controllers;

use Auth;
use App\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::orderBy('nom')->paginate(10);
        return view('admin.employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employe.create');
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
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'locale' => 'required',
            'date_naissance' => 'required',
            'date_entree' => 'required',
            'salaire' => 'required',
            'departement' => 'required',

        ]);
        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->adresse = $request->adresse;
        $employe->locale = $request->locale;
        $employe->date_naissance = $request->date_naissance;
        $employe->date_entree = $request->date_entree;
        $employe->salaire = $request->salaire;
        $employe->departement = $request->departement;
        $employe->save();
        return redirect()->route('employe.index')->with('successMsg','Employe Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = Employe::find($id);
        return view('admin.employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::find($id);
        return view('admin.employe.edit',compact('employe'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'locale' => 'required',
            'date_naissance' => 'required',
            'date_entree' => 'required',
            'salaire' => 'required',
            'departement' => 'required',

        ]);
        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->adresse = $request->adresse;
        $employe->locale = $request->locale;
        $employe->date_naissance = $request->date_naissance;
        $employe->date_entree = $request->date_entree;
        $employe->salaire = $request->salaire;
        $employe->departement = $request->departement;
        $employe->save();
        return redirect()->route('employe.index')->with('successMsg','Employe Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Employe::find($id)->delete();
       return redirect()->back()->with('successMsg','Employe Successfully Delete');
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
