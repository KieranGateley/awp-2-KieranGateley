@extends('bases.container')

@section('title', 'Create Version')

@section('content')
    @include('parts.version.form', ['action' => route('create_version', ['plugin' => $plugin])])
@endsection
