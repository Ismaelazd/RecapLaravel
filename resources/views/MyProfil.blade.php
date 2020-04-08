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
                <p class="m-0">{{$user->email}}</p>
                
            </div>

            <div class="socialtext2 d-flex flex-column justify-content-start align-items-center text-center">
                <p>Role :</p>
                <p>{{$user->role->role}}</p>
                
            </div>

           
        </div>

    </div>

    @endsection