@extends('layouts.app')


@section('content')

<div class="auth-box">
    <form action="{{route('register')}}" method="POST">
        @csrf
        @error('name')
        <label  for="name">Your name</label>
        <span class="err">  {{$message}} </span> 
        @enderror
        <input
        value=""
        type="text"
        name="name"
        class="@error ('name') not-valid @enderror"
        placeholder="Your name">

        @error('email')
        <label  for="email">E-mail</label>
           <span class="err">  {{$message}} </span> 
            @enderror
            <input
            value=""
            type="text"
            name="email"
            class="@error ('email') not-valid @enderror"
            placeholder="Email">
            
            @error('password')
            <label  for="password">Your password</label>
            <span class="err">  {{$message}} </span> 
            @enderror
            <input
            value=""
            type="password"
            name="password"
            class="@error ('password') not-valid @enderror"
            placeholder="Password">
            <label  for="password">Confrim your password</label>
            
            <input
            value=""
            class="@error ('password') not-valid @enderror"
            type="password"
            name="password_confirmation"
            placeholder="Confirm Password">
          <button type="submit"> Register</button>

    </form>

</div>



@endsection