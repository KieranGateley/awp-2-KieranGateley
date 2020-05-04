<div id="title" class="border-bottom">
    <h1 style="display: inline-block;">{{ $name }}</h1>
    @if(Auth::check())
            <a href="{{ route('edit_plugin', ['plugin' => $plugin]) }}">Edit&nbsp;&nbsp;</a>
            <a href="{{ route('delete_plugin', ['plugin' => $plugin]) }}">Delete</a>
    @endif
</div>
<div id="body">
    @isset($authors)<em>Authors: </em>{{ $authors }}<br>@endisset
    @isset($website)<em>Website: </em>{!! $linkify->process($website) !!}<br>@endisset
    @isset($dependencies)<em>Dependencies: </em>{{ $dependencies }}<br>@endisset
    @isset($soft_dependencies)<em>Soft-Dependencies: </em>{{ $soft_dependencies }}<br>@endisset
    @isset($description)<p></p><div id="title">{{ $description }}</div>@endisset
    <p></p>
    <table id="versions" style="width: 100%;" class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 20%">Version</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        @isset($versions)
            @foreach($versions as $version)
                @include('parts.version.min_row', ['version' => $version->version, 'description' => $version->description, 'url' => $version->download_url])
            @endforeach
        @endisset
    </table>
    @if(Auth::check())
    <div class="d-flex justify-content-end"><form action="{{ route('create_version', ['plugin' => $plugin]) }}"><button type="submit" class="btn btn-primary">Add Version</button></form></div>
    @endif
</div>
