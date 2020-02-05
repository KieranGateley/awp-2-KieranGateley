@extends('bases.container')

@section('title', 'Create Plugin')

@section('content')
    @include('parts.plugin.form', ['action' => route('create_plugin')])
@endsection
