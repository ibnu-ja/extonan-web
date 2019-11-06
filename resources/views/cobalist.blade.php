@extends('layouts.app')
@section('navbar')
@include('partials.navbar2')
@endsection

@section('content')

<div class="container">
{{$tampil}}
    <ul>
    @foreach ($tampil as $data)
    <li><a href="{{url($data->anime->slug)}}">{{$data->anime->judul}}</a></li>
    @endforeach
    </ul>
</div>

@endsection