@extends('layouts/app')

@section('content')
<div class="container">
    <div class="text-center mb-5">

        <h1 class="  p-3 mt-3 ">Modifier l'article : {{$user->name}} </h1>
        <hr class="bg-dark">
    </div>
    <form action="{{route('updateMyProfil',$user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-darka ">
            <label class="h3" for="name ">Nom :</label>
            <input value="{{$user->name}}" type="text" name="name"
                class="form-control @error('name') is-invalid @enderror" id="name">
            @error('name')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="email">Email :</label> <br>
            <input value="{{$user->email}}" type="email" name="email"
                class="form-control @error('email') is-invalid @enderror" id="email">
            @error('email')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka">
            <label class="h3" for="password">Mot de passe :</label>
            <input value="{{$user->password}}" type="password" name="password"
                class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>







@endsection
