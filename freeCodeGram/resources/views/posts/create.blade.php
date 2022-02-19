@extends('layouts.app')

@section('content')
<div class="container" style="padding:0% 200px" >
<form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
        <div class="row">
            <h1 style="padding:0px;">Add New Post</h1>
        </div>
        <div class="row mb-3">
           <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>
           <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror"  value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
        </div>


        <div class="row">
        <label for="image" class="col-md-4 col-form-label ">Post Image</label>

                            <input type="file" class="form-control-file  @error('image') is-invalid @enderror" style="padding: 0px" name="image" id="image">
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

        


       

        <div class="row pt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" style="width:200px; ">Add new post</button>

        </div>
</div>
</div>
    </form>
</div>
@endsection
