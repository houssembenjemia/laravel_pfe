<?php

namespace App\Http\Controllers\Admin;

use App\Contrat;
use App\Client;
use App\Comptabilite;
use App\Finance;
use App\Employe;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $contratCount = Contrat::count();
        $clientCount = Client::count();
        $comptabiliteCount = Comptabilite::count();
        $financeCount = Finance::count();
        $employeCount = Employe::count();
        $contactCount = Contact::count();
        return view('admin.home',compact('contratCount','clientCount','comptabiliteCount','financeCount', 'employeCount','contactCount'));
    }
}
