@extends('layouts.app')

@section('content')
<div class="container" style="padding:0% 200px" >
   <div class="row">
       <div class="col-8">
           <img src="/storage/{{$post->image}}" class="w-100">
       </div>
       <div class="col-4">
           <div class="">
               <h3>
                   {{$post->user->username}}
                   
               </h3>
               <p>
                   {{$post->caption}}
               </p>

           </div>
       </div>
   </div>
</div>
@endsection
