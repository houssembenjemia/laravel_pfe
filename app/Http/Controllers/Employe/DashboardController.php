<?php

namespace App\Http\Controllers\Employe;

use App\Contrat;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $contratCount = Contrat::count();
        $clientCount = Client::count();
        
        return view('employe.home',compact('contratCount','clientCount'));
    }
}
