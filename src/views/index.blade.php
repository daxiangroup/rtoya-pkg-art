@extends('layouts.master')

@section('content')

<div class="row">
    <div class="small-12">
        <h2>{{ Lang::get('art::labels.art') }} - {{ Lang::get('art::labels.art.featured-arts') }}</h2>
    </div>
</div>

<div class="row">
    <div class="columns small-12 medium-3">
        @include('art::navigation-main')
    </div>

    <div class="columns small-12 medium-9">
        @foreach ($featuredArts as $featuredArt)
        Name: {{ $featuredArt->name }}<br>
        @endforeach
    </div>
</div>

@stop