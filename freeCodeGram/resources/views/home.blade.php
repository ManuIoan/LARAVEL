@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-4 p-5 " style="display:flex; justify-content:right; align-items:right;">
             <img style="width:200px; height:200px; "class="rounded-circle"src="https://images.unsplash.com/photo-1645047771026-79104aff5b0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" >
        </div>
        <div class="col-7 pt-5">
             <div class="">
                 <h1>freecodecamp</h1>
             </div>
             <div class="d-flex">
                 <div class="pe-5"><strong>153</strong> posts</div>
                 <div class="pe-5"><strong>23K</strong> followers</div>
                 <div class="pe-5"><strong>212</strong> following</div>
             </div>
             <div class="pt-4 fw-bold">FreeCodeCamp.org</div>
             <div class="">We're a global community of millions of people learning to code together.</div>
             <div class=""><a href="#" style="text-decoration:none; ">https://www.freecodecamp.org/</a></div>
        </div>
    </div>
</div>
@endsection
