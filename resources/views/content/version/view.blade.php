@extends('bases.container')

@section('title', 'View Plugin')

@section('content')
    @include('parts.plugin.max', [
        'name' => $plugin->name,
        'version' => $version->version,
        'description' => $version->description,
    ])
@endsection
