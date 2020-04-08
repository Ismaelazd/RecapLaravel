@extends('layout/master')

@section('content')

@include('components/nav')


<div class="container my-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Nos Articles <span class="mx-3 "><a href="{{route('addArticle')}}" title="Add article"><i
            class=" text-secondary ion ion-android-add-circle "></i></a></span> </h1>
        <hr class="bg-dark">
    </div>

    <div class="row  d-flex justify-content-around">
        @foreach ($articles as $article)
        <div class="col-6 mb-5">
            <div class="card bg-white text-white border-dark">
                <img src="{{asset('storage/'.$article->img)}}" class="img-fluid " alt="...">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title"><u><b>{{$article->name}}</b></u> :</h5>
                    <p class="card-text">{{$article->description}}</p>

                </div>
                <div class="d-flex justify-content-around my-2 ">
                 
                    <a class="linkArticles" title="Show" href="{{route('showArticle',$article->id)}}"> <i
                        class="text-primary fa-2x fa fa-eye"></i></a>
                    <a class="linkArticles" title="Edit" href="{{route('editArticle',$article->id)}}"> <i
                        class="text-warning fa-2x fa fa-edit"></i></a>
                    <a class="linkArticles" title="Delete" href="{{route('deleteArticle',$article->id)}}"> <i
                        class="text-danger fa-2x fa fa-trash"></i></a>
                   
                </div> 
            </div> 
        </div>
        @endforeach
  
</div> 




</div>

@endsection
