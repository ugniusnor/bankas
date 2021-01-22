<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Client;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index ( $id, Client $client) {

        $accounts= Account::get()->where('client_id',$id);
        $client=Client::get()->where('id',$id);
   
        return view('clients.accounts',[
            'accounts'=>$accounts,
            'client'=>$client[0]
        ]);
    }
    public function update (Request $request, $accountNumber) {
      //pridet validacija?
        Account::where('account_number',$accountNumber)->update(['funds'=>$request->update_funds]);
        return back();
    }


    public function store(Request $request, Account $account, Client $client) {
       
    // dd($client->accounts()->get()->where('client_id',$id)) ;
    
    $this->validate($request,[
        'client_id'=>'required',
        'account_number'=>'unique',
        
        ]);
     
       
        Account::create([
            'client_id'=>$request->client_id,
            'account_number'=>($account->giveNumber()),
            'funds'=>0
        ]);
        return redirect()->route('clients');

    }
    
    public function destroy(Request $request, Account $account) {
        if($request->funds > 0) {
            return back();
        }
        $id=$request->account_id;
        $account->where('account_number',$id)->delete();
        
        return back();
    }
}
