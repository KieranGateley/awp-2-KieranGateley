@extends('bases.container')

@section('title', 'View Plugin')

@section('content')
    @include('parts.plugin.max', [
        'name' => $plugin->name,
        'description' => $plugin->description,
        'website' => $plugin->website,
        'authors' => $plugin->authors,
        'dependencies' => $plugin->dependencies,
        'soft_dependencies' => $plugin->soft_dependencies,
        'versions' => $plugin->versions->sortByDesc('release_date'),
    ])
@endsection
