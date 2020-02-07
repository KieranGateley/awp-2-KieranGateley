<div id="title" class="border-bottom">
    <h1 style="display: inline-block;">{{ $name }}</h1>
</div>
<div id="body">
    @isset($authors)<em>Authors: </em>{{ $authors }}<br>@endisset
    @isset($website)<em>Website: </em>{{ $website }}<br>@endisset
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
                @include('parts.version.row', ['version' => $version->version, 'description' => $version->description])
            @endforeach
        @endisset
    </table>
</div>
