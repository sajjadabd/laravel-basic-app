@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  {{-- @include('layouts.login') --}}

  <h1 class="text-3xl font-bold m-10 text-center">
    Create Post 
  </h1>

  <form action="/create-post" method="POST" class="flex flex-col space-y-4 items-center">
    @csrf
    <input type="text" name="title" class="input-dark" placeholder="Post Title">
    @error('title')
      <p class="error">{{ $message }}</p>
    @enderror
    <textarea name="content" id="content" cols="30" rows="10" class="input-dark pt-4" placeholder="Post Content"></textarea>
    @error('content')
      <p class="error">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn-dark">Publish</button>
  </form>

@endsection