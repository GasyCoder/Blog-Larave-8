@extends('layouts.app')

@section('content')



        <div class="mt-10 max-w-xl mx-auto">
            @foreach(\App\Models\Post::all() as $post)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                    <p>{{ Str::limit($post->body, 100) }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection