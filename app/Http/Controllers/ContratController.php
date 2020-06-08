<?php

namespace App\Http\Controllers;

use Auth;
use App\Contrat;
use App\Client;
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
        return view('admin.contrat.index',compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cli=Client::all();
        $contrats = new Contrat();
        return view('admin.contrat.create',['contrat'=>$contrats,'clie'=>$cli]);
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
            'numero' => 'required',
            'type' => 'required',
            'date' => 'required',
            'echeance' => 'required',
            'duree' => 'required',
            'categorie' => 'required',
        ]);
        $contrat = new Contrat();
        $contrat->numero = $request->numero;
        $contrat->type = $request->type;
        $contrat->date = $request->date;
        $contrat->echeance = $request->echeance;
        $contrat->duree = $request->duree;
        $contrat->categorie = $request->categorie;
        $contrat->save();
        return redirect()->route('contrat.index')->with('successMsg','Contrat Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cli=Client::all();
        $contrat =Contrat::find($id);
        return view('admin.contrat.edit', ['contrat'=>$contrat,'clie'=>$cli]);
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
            'numero' => 'required',
            'type' => 'required',
            'date' => 'required',
            'echeance' => 'required',
            'duree' => 'required',
            'categorie' => 'required',
        ]);
        $contrat = new Contrat();
        $contrat->numero = $request->numero;
        $contrat->type = $request->type;
        $contrat->date = $request->date;
        $contrat->echeance = $request->echeance;
        $contrat->duree = $request->duree;
        $contrat->categorie = $request->categorie;
        $contrat->save();
        return redirect()->route('contrat.index')->with('successMsg','Contrat Successfully Update');
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
