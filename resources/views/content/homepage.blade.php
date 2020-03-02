@extends('bases.container')

@section('title', 'Homepage')

@section('content')

    @foreach($versions as $version)
        @include('parts.version.min', [
                    'name' => $version->plugin->name,
                    'version' => $version->version,
                    'description' => $version->description,
                    'plugin' => $version->plugin,
                    'date' => $version->created_at
                    ])
    @endforeach
    {{ $versions->links() }}
@endsection
