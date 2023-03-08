@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  <main class="m-10">
    
    @auth
      <h1 class="text-3xl font-bold">
        Hello {{ auth()->user()->username }}
      </h1>
    @else
      <h1 class="text-3xl font-bold">
        Hello world!
      </h1>
    @endauth

    @if(session()->has('success'))
        <div class="text-sm text-green-300 my-10">
            {{ session()->get('success') }}
        </div>
    @endif
  </main>

@endsection