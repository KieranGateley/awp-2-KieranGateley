<tr>
    <th scope="row"><a href="{{ route('view_plugin', ['plugin' => $plugin]) }}">{{ $name }}</a></th>
    <td style="word-wrap: break-word;">{{ $description }}</td>
    <td style="word-wrap: break-word;">{{ $authors }}</td>
    <td style="word-wrap: break-word;">{!! $website !!}</td>
    <td style="word-wrap: break-word;">{{ $dependencies }}</td>
    <td style="word-wrap: break-word;">{{ $soft_dependencies }}</td>
</tr>
