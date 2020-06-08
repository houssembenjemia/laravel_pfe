<?php

namespace App\Http\Controllers;

use App\Contrat;
use App\Client;
use App\Comptabilite;
use App\Finance;
use App\Employe;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $contrats = Contrat::all();
        $clients = Client::all();
        $comptabilites = Comptabilite::all();
        $finances = Finances::all();
        $employes = Employe::all();
        $contacts = Contact::all();
        return view('admin.home',compact('contrats','clients','comptabilites','finances','employes','contacts'));
    }
    
    public function deconnexion()
    {
    auth()->logout();

    return redirect('/login');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
