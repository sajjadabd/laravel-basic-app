@extends('layouts.master')


@section('content')

  @include('layouts.navigation')

  <main class="m-10">
    
    @auth
      <h1 class="text-3xl font-bold text-center">
        Hello {{ auth()->user()->username }}
      </h1>
    @else
      <h1 class="text-3xl font-bold text-center">
        Homepage !
      </h1>
    @endauth

    @if(session()->has('success'))
        <div class="text-sm text-green-300 my-10 text-center">
            {{ session()->get('success') }}
        </div>
    @endif


    <div class="m-6"></div>

    <section class="flex flex-col ">
      @foreach ($posts as $post)
        <article class="p-10 mx-48 mt-10">
          <h3 class="px-6">{{ $post->title }}</h3>
          <hr class="my-4">
          <p class="px-6">{{ $post->content }}</p>
        </article>

      @endforeach
    </section>
    

  </main>

@endsection