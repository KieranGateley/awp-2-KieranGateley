<div class="version" style="border: 2px solid black; border-radius: 5px; padding-left: 5px; padding-right: 5px">
    <div id="header" class="border-bottom"><b>{{ $name }}&#64;{{ $version }}</b></div>
    <div id="body">{{ Str::words($description, $limit=50, $end='...') ?? "" }}</div>
    <div id="footer" class="border-top">
        <div id="info" class="text-left" style="width: 70%; display: inline-block">
            Update Created {{ $date }}
        </div>
        <div class="text-right" style="width: 29%; display: inline-block">
            <a href="{{ route('view_plugin', ['plugin' => $plugin, ]) }}">Read more...</a>
        </div>
    </div>
</div>
