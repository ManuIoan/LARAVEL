@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

    <!--first one!-->
    <div class="row">
        <div class="col-8 offset-2">
        <div class="row">
            <h1 style="padding:0px;">Edit Profile</h1>
        </div>
        <div class="row mb-3">
           <label for="title" class="col-md-4 col-form-label ">Title</label>
           <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title')  }}"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
        </div>

        <!--second one!-->
        <div class="row mb-3">
           <label for="description" class="col-md-4 col-form-label ">Description</label>
           <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror"  value="{{ old('description') }}"  autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
        </div>

      
         <!--third one!-->
        <div class="row mb-3">
           <label for="url" class="col-md-4 col-form-label ">Url</label>
           <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror"  value="{{ old('url') }}"  autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
        </div>


        <div class="row">
        <label for="image" class="col-md-4 col-form-label ">Profile Image</label>

                            <input type="file" class="form-control-file  @error('image') is-invalid @enderror" style="padding: 0px" name="image" id="image">
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

        


       

        <div class="row pt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" style="width:200px; ">Save Profile</button>

        </div>
</div>
</div>
    </form>
</div>
@endsection
