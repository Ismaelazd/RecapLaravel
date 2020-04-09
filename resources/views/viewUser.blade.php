<link rel="stylesheet" href="css/theme.css">
@extends('layout/master')
@include('components/nav')

@section('content')


<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Users </h1>
        <hr class="bg-dark">
    </div>
</div>


<section class="sectionUser">
    <div class="container ">
        @error('msg')
        <div class="text-danger">{{  $message  }}</div>
        @enderror
        <div class="row">
            @foreach ($users as $user)

            <!--Profile Card 3-->
            <div class="col-md-4 my-3">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                            alt="profile-sample1" class="background" />
                    </div>
                    <div class="profile-thumb-block">
                        <img src="{{asset('storage/avatar.jpeg')}}" alt="profile-image" class="profile" />
                    </div>
                    <div class="card-content">
                        <h2>{{$user->role->role}}
                            <small>{{$user->name}}
                            </small>
                            <small>{{$user->email}}</small>

                        </h2>
                        <div class="icon-block">

                            <a href="{{route('editUser',$user->id)}}"><i
                                    class="fa fa-pencil"></i></a>
                            @if ($user->id != 1)

                            <a href="{{route('deleteUser',$user->id)}}"> <i class="fa fa-trash"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>



            @endforeach


        </div>
    </div>
</section>
@endsection