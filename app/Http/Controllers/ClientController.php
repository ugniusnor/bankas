<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index() {
        $clients = Client::latest()->paginate(20);
        $accounts= Account::get();
        // dd($accounts);
         return view('clients.index',[
        'clients' =>$clients,
        'accounts'=>$accounts
        
    ]);
    }

    // $users = DB::table('users')
    // ->where('votes', '=', 100)
    // ->where('age', '>', 35)
    // ->get();

    public function store (Request $request) {
        $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'last_name'=>'required|min:3|max:100',
            'gov_id'=>'digits:10|unique:clients,gov_id'
            ]);
        Client::create([
            'name'=>ucfirst($request->name),
            'last_name'=>ucfirst($request->last_name),
            'gov_id'=>$request->gov_id
        ]);
        return back();
        }
}
