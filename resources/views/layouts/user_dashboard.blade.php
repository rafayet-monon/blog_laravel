@extends('layouts.user_master')

@section('user_content')



                <div class="description">
                    <h3> {{$user_profile_info->name}}'s Biography : </h3>
                    <hr />
                    <p>
                   {{$user_profile_info->biography}}
                    </p>



                </div>


@endsection
