@extends('layouts.app')

@section('header')
    <link href="/css/layouts/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/tops/top.css" rel="stylesheet" type="text/css">
@endsection
@section('title', 'TOPページ')
@section('content')
    @include('layouts.left-content')
    <div id="content-top">
        <top></top>
    </div>
@endsection