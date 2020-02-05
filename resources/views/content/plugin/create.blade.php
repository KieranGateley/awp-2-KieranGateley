@extends('bases.container')

@section('content')
    @include('parts.plugin.form', ['action' => route('create_plugin')])
@endsection
