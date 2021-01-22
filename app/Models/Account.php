<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'account_number',
        'funds',
        'update_funds'
    ];
   
    public function giveNumber() {
        $numbers = mt_rand(1000000, 9999999);
        if (Account::where('account_number',$numbers)->exists()) {
            giveNumber();
            return;            
        }
        return $numbers;
    }
 
    public function client() {
        return $this->belongsTo(Client::class);
    }
}
