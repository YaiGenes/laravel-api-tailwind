@extends('layouts.default')

@section('foreach')

    @foreach($posts as $post)
        <div class="bg-white hover:bg-red-100 border-gray-200 p-5">
            <h2 class="font-bold text-lg md-4">{{$post->title}}</h2>
            <p class="text-xs">{{$post->excerpt}}</p>
            <p class="text-xs text-right">{{$post->published_at}}</p>
        </div>
    @endforeach

@endsection

@section('pagination')
    <div class="mb-10 center">
        {{$posts->links()}}
    </div>
@endsection
