@extends('layouts.app')


@section('content')



<h1> {{$client->name}} Available accounts:</h1>


@if ( $accounts->count())
@foreach ($accounts as $account)
  
    <p>
      Account Number: <span>LT{{$account->account_number}}</span>
    </p>
    <p>
      Account Funds: <span> {{$account->funds}}$</span>
    </p>
    <hr>
    
@endforeach

@else <p>No accounts yet</p>    
@endif

<h3>add account</h3>

<form action={{route('open')}} method="POST">
  @csrf
  <input style="display: none" type="text" name="customer_id" value={{$client->id}}>
  <input type="text" name="funds">
  <button id="create_acc_btn" type="submit">Create</button>

</form>
@error('customer_id')
    {{$message}}
@enderror


@endsection