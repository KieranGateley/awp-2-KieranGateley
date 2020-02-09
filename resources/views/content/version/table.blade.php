@extends('bases.container')

@section('title', 'All Plugins')

@section('scripts')
    $(document).ready(function(){ $('#plugins').DataTable(); });
@endsection

@section('content')
    <table id="plugins" style="width: 100%;" class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Plugin</th>
            <th scope="col">Version</th>
            <th scope="col">Description</th>
            <th scope="col">Release Date</th>
        </tr>
        </thead>
        @foreach ($versions as $version)
            @include('parts.plugin.row', [
                        'plugin' => $version->plugin->name,
                        'version' => $version->version,
                        'description' => $version->description,
                        'created_on' => $version->created_on
                    ])
        @endforeach
    </table>
@endsection

