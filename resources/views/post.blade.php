@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  <main class="m-10">
    

    <h1 class="text-3xl font-bold text-center">
      {{ $post->title }}
    </h1>

    <div class="flex flex-row space-x-4 justify-center mt-6">
      <p>
        by 
      </p>
      <p class="font-bold">{{ $post->user->username }}</p>
      <p>.</p>
      <p>
        {{ $post->getTime() }}
      </p>
    </div>


    <div class="mb-10"></div>

    <article class="p-10 mx-48 ">
      <p class="px-6 mt-10">{{ $post->content }}</p>


    </article>

    <a class="px-16 mx-48 my-40" href="/"> &larr;  back to Home</a>

    

  </main>

@endsection