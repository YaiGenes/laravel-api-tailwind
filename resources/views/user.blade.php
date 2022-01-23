@extends('layouts.default')

@section('foreach')

    @foreach($users as $user)
        <div class="bg-white hover:bg-red-100 border-gray-200 p-5">
            <h2 class="font-bold text-lg md-4">{{$user->name}}</h2>
            <p class="text-xs">{{$user->email}}</p>
            <p class="text-xs text-right">{{$user->created_at->diffForHumans()}}</p>
        </div>
    @endforeach

@endsection

@section('pagination')
    <div class="mb-10 center">
        {{$users->links()}}
    </div>
@endsection
