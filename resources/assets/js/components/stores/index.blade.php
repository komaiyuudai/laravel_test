@extends('layouts.app')

@section('header')
    <link href="/css/stores/store.css" rel="stylesheet" type="text/css">
@endsection

@section('title', 'ショップ一覧')

@section('content')
<div id="store-list">
    <h2>ショップ一覧</h2>
    @foreach ($stores as $store)
    <span class="store-name">
        <a href="/store/{{ $store->id }}">{{ $store->name }}</a>
    </span>
    @endforeach
</div>
@endsection
