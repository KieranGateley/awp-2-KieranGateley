@extends('bases.container')

@section('title', 'All Plugins')

@section('scripts')
    $(document).ready(function(){ $('#plugins').DataTable(); });
@endsection

@section('content')
    <table id="plugins" style="width: 100%;" class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Authors</th>
            <th scope="col">Website</th>
            <th scope="col">Dependencies</th>
            <th scope="col">Soft Dependencies</th>
        </tr>
        </thead>
        @foreach ($plugins as $plugin)
            @include('parts.plugin.row', [
                        'name' => $plugin->name,
                        'description' => $plugin->description,
                        'authors' => $plugin->authors,
                        'website' => $plugin->website,
                        'dependencies' => $plugin->dependencies,
                        'soft_dependencies' => $plugin->soft_dependencies,
                    ])
        @endforeach
    </table>
@endsection

