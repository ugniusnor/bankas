@extends('layouts.app')


@section('content')

<div style="@if ($errors->any()) display: flex @endif" class="create-account-table">
  <div class="close-table"> 
    <img src="{{asset('img/icons/close.svg')}}" alt="" class="icon"> </div>
  <form action="{{route('clients')}}" method="POST">
    @csrf
    <label for="name"> Clients name</label>
    <input    class="create-input @error ('name') not-valid @enderror"  value="" name="name" type="text" placeholder="name">
    <label for="name"> Clients surname</label>
    <input    class="create-input @error ('last_name') not-valid @enderror"  value="" name="last_name" type="text" placeholder="surname">
    <label for="gov_id"> Identification number</label>
    <input    class="create-input @error ('gov_id') not-valid @enderror"  value="" name="gov_id" type="text" placeholder="goverment id">
    <button id="create_acc_btn" type="submit">Create</button>

  </form>
</div>
<div class="accounts-section">
  <div class="control-panel">
    <div class="search-bar">
      <form action="" method="GET">
        <input type="text" placeholder="Search for customer">
        <button type="submit"> Search</button>
      </form>
    </div>
    <div>
    <a id="addClient" href="#"> Add Client</a>
    </div>
    

  </div>
<div class="accounts-container">
    <div class="row-headers">
      <div class="grid-item">Name</div>
      <div class="grid-item">Surname</div>
      <div class="grid-item">Goverment Id</div>
    </div>
    <div class="accounts-rows">
      @if ($clients->count())
      @foreach ($clients as $client)
      <div class="account-row">
        <div class="client grid-item">{{$client->name}}</div>
        <div class="client grid-item">{{$client->last_name}}</div>
        <div class="client grid-item">{{$client->gov_id}}</div>
        <div class="client grid-item">
          <div style="cursor: pointer" id="manage_acc" href="#">manage</div>
      </div>
          
          </div>
          <div class="manage-extension">
            <div class="manage-header">
              <div class="grid-item"> Account Number</div>
              <div class="grid-item">Available funds:</div>
              <div class="grid-item">Delete</div>
              <div class="grid-item"> Edit</div>
            </div>
            @foreach ($accounts as $account)
                @if ($account->client_id === $client->id)
                    
                <div class="account-row">
                  <div class="grid-item">LT{{$account->account_number}}</div>
                  <div class="grid-item funds">
                    <form id="update_funds" action="/accounts/update/{{$account->account_number}}" method="POST">
                      @csrf
                      
                      <input  name="update_funds" type="text" placeholder="{{$account->funds}}">
                      <button type="submit">Edit</button>
                    </form>
                    {{$account->funds}}$
                  </div>
                  <div class="grid-item"> 
                    <form action="/accounts/delete" method="POST">
                      @csrf
                      @method('DELETE')
                        <input style="display: none"  name="account_id" value={{$account->account_number}}>
                        <input style="display: none" name="funds" value={{$account->funds}}>
                      <button type="submit">
                        <img class="icon" src="{{asset('img/icons/delete.svg')}}" alt="">
                      </button>
                    </form> 
                    </div>
                 
                  <div class="grid-item edit">edit</div>
                  
                </div>
                @endif
            @endforeach
        

              <form class="grid-item add-account-btn" action={{route('open')}} method="POST">
                @csrf
                <input style="display: none" type="hidden" name="client_id" value={{$client->id}}>
                {{-- <input type="text" name="funds"> --}}
              
                <button style="border:none; outline:none; background:transparent; heigth:70px; cursor:pointer;" id="create_acc_btn" type="submit">Add new account</button> <img class="icon" src="{{ asset('img/icons/plus.svg') }}" alt="">
              </form>


               {{-- <a href="/accounts/{{$client->id}}">Add new account</a>  <img class="icon" src="{{ asset('img/icons/plus.svg') }}" alt=""> --}}
              
          </div>
          @endforeach
      @endif

    </div>
    
  </div>
  {{-- <div style="@if ($errors->any()) display: flex @endif" class="open-account">
    <div class="close-table"> 
      <img src="{{asset('img/icons/close.svg')}}" alt="" class="icon"> </div>
    <form action="{{route('accounts.create', $client->id)}}" method="POST">
      @csrf
      {{-- <label for="account-number"> Account number</label>
      <input    class="create-input @error ('name') not-valid @enderror"  value="" name="account_number" type="text" placeholder="Account number"> --}}
      {{-- <label for="funds"> Starting funds</label>
      <input    class="create-input @error ('last_name') not-valid @enderror"  value="" name="funds" type="text" placeholder="00.00">
      <label for="confirmation"> Confirm</label>
      
      <input    class="create-input @error ('gov_id') not-valid @enderror"  value="" name="checkbox_field" type="checkbox" placeholder="goverment id">
      <button id="open_new_acc" type="submit">Open new Account</button>
  
    </form>
  </div> --}} 


</div>



@endsection