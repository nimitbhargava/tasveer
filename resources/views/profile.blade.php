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
        @forelse($photos as $photo)
            @if($photo->path)
                <img height="150" src="{{$photo->getPath($photo, $user)}}" alt="">
            @endif
        @empty
                <p>You don't have any images, would you like to upload? <a href="{{route('user.upload')}}">Upload</a></p>
        @endforelse

        @if(!$photos->isEmpty())
            <p class="row justify-content-center"><a href="{{route('user.upload')}}">Add More +</a></p>
        @endif
</div>
@endsection
