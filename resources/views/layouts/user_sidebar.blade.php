@extends('layouts.user_master')
@section('user_sidebar')

<div class="user-wrapper">
    <img src="{{URL::to($user_profile_info->profile_picture)}}" class="img-responsive" />
    <div class="description">
        <h4>{{$user_profile_info->name}}</h4>
        <h5> <strong> {{$user_profile_info->profession }}</strong></h5>
        <p>
            {{$user_profile_info->about_me}}
        </p>
        <hr />

    </div>
</div>

    @endsection