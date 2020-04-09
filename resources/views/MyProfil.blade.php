@extends('layout/master')

@section('content')

@include('components/nav')


<div class="container my-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Mon profil </h1>
        <hr class="bg-dark">
    </div>

    <div class="uicard">

        <div class="fon">
            <img src="{{asset('storage/bg.jpg')}}">
        </div>

        <div class="user text-center">
            <img src="{{asset('storage/avatar.jpeg')}}">
            <p>{{$user->name}}</p>
        </div>
        <div class="socialinfo ">
            <div class="socialtext1 d-flex flex-column justify-content-start align-items-center text-center">
                <p>Email :</p>
                <p class="m-0 px-3">{{$user->email}}</p>
                
            </div>

            <div class="socialtext2 d-flex flex-column justify-content-start align-items-center text-center">
                <p>Role :</p>
                <p>{{$user->role->role}}</p>
                
            </div>

           
        </div>
        <div class="icon-block mt-2">

            <a href="{{route('editMyProfil',$user->id)}}"><i
                    class="fa fa-pencil"></i></a>
            @if ($user->id != 1)

            <a href="{{route('deleteMyProfil',$user->id)}}"> <i class="fa fa-trash"></i></a>
            @endif
        </div>

    </div>

    @endsection