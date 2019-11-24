<table>
    <tr>
        <th>Title</th>
        <th>Content</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{$d->title}}</td>
            <td>{{$d->content}}</td>
        </tr>
    @endforeach
</table>
