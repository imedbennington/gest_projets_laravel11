@extends('layouts.app')

@section('title', 'Add Category')

@section('css')
{{-- Include additional CSS here if needed --}}
@endsection

@section('content')
<div class="row full-height">
    <div class="col-lg-8">
        <a href="{{route('get-register')}}">Register</a>
       <a href="{{route('get-login')}}">Log in user</a>
    </div>
</div>
@endsection

@section('js')
{{-- Include additional JavaScript here if needed --}}
@endsection
