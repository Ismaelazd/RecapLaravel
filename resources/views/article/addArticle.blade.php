@extends('layouts/app')

@section('content')
        <div class="container">
            <div class="text-center mb-5">

                <h1 class="  p-3 mt-3 ">Ajouter un article </h1>
                <hr class="bg-dark">
            </div>
            <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-darka ">
                    <label class="h3" for="titre ">Nom :</label>
                    <input value=""
                    type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" >
                    @error('name')
                        <div  class="alert alert-danger">{{  $message  }}</div>
                    @enderror
                </div>
                <div class="form-group text-darka ">
                    <label class="h3" for="img">Image :</label> <br>
                    <input value=""
                    type="file" name="img" class=" @error('img') is-invalid @enderror" id="img" >
                    @error('img')
                        <div  class="alert alert-danger">{{  $message  }}</div>
                    @enderror
                </div>
                <div class="form-group text-darka">
                    <label class="h3"  for="description">Description :</label>
                    <input value="" type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" >
                    @error('description')
                        <div  class="alert alert-danger">{{  $message  }}</div>
                    @enderror
                </div>
               
                <div class="text-center">

                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>

            </form>
        </div>
    
 
        



    
@endsection