@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  <h1 class="text-3xl font-bold m-10">
    Hello world!
  </h1>

  @error('username')
    <p>{{ $message }}</p>
  @enderror()

  @error('email')
    <p>{{ $message }}</p>
  @enderror()

  @error('password')
    <p>{{ $message }}</p>
  @enderror()

@endsection