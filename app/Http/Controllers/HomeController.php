<?php

namespace App\Http\Controllers;

use App\Contrat;
use App\Client;
use App\Comptabilite;
use App\Finance;
use App\Employe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = Contrat::all();
        $clients = Client::all();
        $comptabilites = Comptabilite::all();
        $finances = Finance::all();
        $employes = Employe::all();
        return view('admin.home',compact('contrats','clients','comptabilites','finances','employes'));
    }

}
