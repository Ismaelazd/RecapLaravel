@extends('layouts/app')

@section('content')
<div class="container">
    <div class="text-center mb-5">

        <h1 class="  p-3 mt-3 ">Modifier l'article : {{$user->name}} </h1>
        <hr class="bg-dark">
    </div>
    <form action="{{route('updateUser',$user->id)}}" method="post" enctype="multipart/form-data">
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
            <input value="@if($errors->first('email'))@else{{old('email')}}@endif" type="email" name="email"
                class=" @error('email') is-invalid @enderror" id="email">
            @error('email')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka">
            <label class="h3" for="role_id">Role :</label>
            <select class="form-control" name="role_id" id="role_id">
                @foreach ($roles as $role)
                    @if ($role->id !=1)
                        @if ($role->id===$user->role_id)
                            <option selected value="{{$role->id}}">{{$role->role}}</option>
                        @else
                            <option value="{{$role->id}}">{{$role->role}}</option>
                        @endif
                    @endif
                @endforeach
            </select>
            @error('role_id')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>







@endsection
