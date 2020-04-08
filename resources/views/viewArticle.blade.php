@extends('layout/master')

@section('content')

@include('components/nav')


<div class="container my-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Nos Articles </h1>
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
                <div class="d-flex justify-content-around mb-4">
                    {{-- <a href="{{route('article',$article->id)}} " class="btn btn-outline-dark">Lire l'article</a>
                    @if (Auth::check() && Auth::user()->id_role!=2)
                    @if ($abonnements->where('id_article',$article->id)->where('id_user',Auth::id())->first())

                    <a class="btn btn-success text-white" href="{{route('deleteAbonnement',$article->id)}}"><i
                            class="fa fa-bell-slash"></i></a>
                    @else
                    <a class="btn btn-dark  " href="{{route('saveAbonnement',$article->id)}}"><i
                            class="fa fa-bell"></i></a>
                    @endif
                    @endif --}}
                </div> 
            </div> 
        </div>
        @endforeach
  
</div> 




</div>

@endsection
