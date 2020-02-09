@extends('bases.container')

@section('title', 'Update Plugin')

@section('content')
    @include('parts.plugin.form', [
        'action' => route('edit_version', ['plugin' => $plugin, 'version' => $version]),
        'version' => $version->version,
        'description' => $version->description,
    ])
@endsection
