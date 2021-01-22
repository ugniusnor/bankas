@extends('layouts.app')


@section('content')

<div class="auth-box">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <label  for="email">E-mail</label>
        <input
        value="{{old('email')}}"
        type="text"
        name="email"
        placeholder="Your email"
         class="@error ('email') not-valid @enderror" type="text">
         <label  for="password">Your password</label>
         <input
         type="password"
         name="password"
         placeholder="Your password"
          class="@error ('password') not-valid @enderror" type="text">
          <button type="submit" class="bg-blue-500 text-white- px-4 py-3 rounded font-medium w-full text-white"> Login</button>
@if (session('status'))
    {{session('status')}}
@endif
    </form>

</div>



@endsection