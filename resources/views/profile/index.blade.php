@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2 pl-5">
                <img src="/svg/GazaSkyGeeksLogo.jpg" style="height: 120px;width: 120px" alt="" class="rounded-circle">
            </div>
            <div class="col-9 pt-2">
                <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
                    <a href="/post/create">Add new post</a>

                </div>
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>26.2k</strong> followers</div>
                    <div class="pr-5"><strong>74</strong> following</div>
                </div>
                <div class="pt-3"><strong>{{$user->profile->title ?? 'N/A'}}</strong></div>
                <div class="pr-5">{{$user->profile->description ?? 'N/A'}}
                </div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}} </a></div>
            </div>

        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100 h-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
