@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="sm-12 md-10">
            <h3>{{$user->name}}</h3>
        </div>
        <div class="sm-12 md-2">
            <span class="badge">{{$user->created_at->diffForHumans()}}</span>
        </div>

    </div>
        @foreach($photos as $photo)
            @if($photo->path)
                <img height="150" src="{{$photo->getPath($photo, $user)}}" alt="">
            @endif
        @endforeach
</div>
@endsection
