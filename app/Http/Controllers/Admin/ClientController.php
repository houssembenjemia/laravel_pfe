<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        
       $clients = Client::orderBy('id')->paginate(10);
        return view('admin.client.index',compact('clients'));
        
    }
    public function show($id)
    {
        $client = Client::find($id);
        return view('admin.client.show',compact('client'));
    }

    public function destroy(Client $client)
    {
        return view('admin.client.show')->with('client', $client);
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $clients = Client::orderBy('type')->where('type','like','%' .$search. '%');
       
        return view('admin.client.index', compact('clients'));
    }


}
