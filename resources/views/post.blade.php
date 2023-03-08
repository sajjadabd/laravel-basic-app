@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  <main class="m-10">
    

    <h1 class="text-3xl font-bold text-center">
      {{ $post->title }}
    </h1>


    <div class="mb-10"></div>

    <article class="p-10 mx-48 mt-10">
      <p class="px-6">{{ $post->content }}</p>
    </article>
    

  </main>

@endsection