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


    <div class="mb-10></div>

    <section class="flex flex-col ">
      @foreach ($posts as $post)
        <article class="p-10 mx-48 mt-10">
          
          <div class="flex flex-row space-x-2 items-end  px-6 mb-4">
            <a href="/posts/{{ $post->id }}" class="hover:underline self-start inline-block">
              <h2 class="text-3xl">{{ $post->title }}</h3>
            </a>
            <p>.</p>
            <p>
              by  {{ $post->user->username }}
            </p>
            <p>.</p>
            <p>
              {{ $post->getTime() }}
            </p>
          </div>
          
          <p class="px-6">{{ $post->content }}</p>
        </article>
        @if (!$loop->last)
          <hr class="my-10 border-dashed mx-40">
        @endif
      @endforeach
    </section>
    

  </main>

@endsection