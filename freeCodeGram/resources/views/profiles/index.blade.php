@extends('layouts.app')

@section('content')
<div class="container" style="padding:0% 200px" >
    <div class="row">
        <div class="col-4 p-5 " style="display:flex; justify-content:right; align-items:right;">
             <img style="width:200px; height:200px; "class="rounded-circle"src="https://images.unsplash.com/photo-1645047771026-79104aff5b0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" >
        </div>
        <div class="col-8 pt-5">
             <div class="d-flex justify-content-between align-items-baseline">
                 <h1>{{$user->username}}</h1>
                 <a href="/p/create">Add new Post</a>
                 
             </div>
             <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
             <div class="d-flex">
                 <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                 <div class="pe-5"><strong>23K</strong> followers</div>
                 <div class="pe-5"><strong>212</strong> following</div>
             </div>
            <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
             <div class="">{{$user->profile->description}}</div>
             <div class=""><a href="#" style="text-decoration:none; ">{{$user->profile->url}} </a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img style="width:300px; height:300px;" src="/storage/{{ $post->image}}" alt="">
        </a>
        </div>
        @endforeach

        
    </div>
</div>
@endsection
