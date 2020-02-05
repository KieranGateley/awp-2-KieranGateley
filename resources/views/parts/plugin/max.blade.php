<div id="title" class="border-bottom">
    <h1 style="display: inline-block;">{{ $name }}</h1>
</div>
<div id="body">
    @isset($authors)<em>Authors: </em>{{ $authors }}<br>@endisset
    @isset($website)<em>Website: </em>{{ $website }}<br>@endisset
    @isset($dependencies)<em>Dependencies: </em>{{ $dependencies }}<br>@endisset
    @isset($soft_dependencies)<em>Soft-Dependencies: </em>{{ $soft_dependencies }}<br>@endisset
    @isset($description)<p></p><div id="title">{{ $description }}</div>@endisset
</div>
