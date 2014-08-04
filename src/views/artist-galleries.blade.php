@extends('layouts.master')

@section('content')

<div class="row">
    <div class="small-12">
        <h2>{{ Lang::get('art::labels.artist-galleries') }} - {{ $artist->name }}</h2>
    </div>
</div>

<div class="row">
    <div class="columns small-12 medium-3">
        @include('art::navigation-main')
    </div>

    <div class="columns small-12 medium-9">
        @foreach ($galleries as $gallery)
            {{
            HTML::linkRoute('art.gallery', $gallery->name, array(
                $artist->id,
                $artist->name_slug,
                $gallery->id,
                $gallery->name_slug,
            ))
            }}<br>
        @endforeach
    </div>
</div>

@stop