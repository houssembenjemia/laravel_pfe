<?php
namespace App\Http\Controllers\Employe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        
       $clients = Client::orderBy('id')->paginate(10);
        return view('employe.client.index',compact('clients'));
        
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('employe.client.create');
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
            'identite' => 'required',
            'cin' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            'type' => 'required',
        ]);
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->identite = $request->identite;
        $client->cin = $request->cin;
        $client->tel = $request->tel;
        $client->adresse = $request->adresse;
        $client->type = $request->type;
        $client->save();
        return redirect()->route('employe.clients.index')->with('successMsg','Client Successfully Saved');
    }
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
        $client = Client::find($id);
        return view('employe.client.edit',compact('client'));
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
            'identite' => 'required',
            'cin' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            'type' => 'required',
        ]);
        $client =  Client::find($id);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->identite = $request->identite;
        $client->cin = $request->cin;
        $client->tel = $request->tel;
        $client->adresse = $request->adresse;
        $client->type = $request->type;
        $client->save();
        return redirect()->route('employe.clients.index')->with('successMsg','Client Successfully update');
    }

    public function destroy($id)
    {
        Client::find($id)->delete();
       return redirect()->back()->with('successMsg','Client Successfully Delete');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $clients = Client::orderBy('type')->where('type','like','%' .$search. '%');
       
        return view('employe.client.index', compact('clients'));
    }


}
