@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  @include('layouts.login')

  @include('layouts.register')

  <h1 class="text-3xl font-bold">
    Hello world!
  </h1>

@endsection