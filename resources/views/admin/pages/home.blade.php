@extends('admin.master')

@section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif
    <h4 style="color:blueviolet" front size="24px">
        Dashboard
    </h4>
@endsection