<table>
    <tr>
        <th>Title</th>
        <th>Content</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>{{$d->title}}</td>
            <td>{{$d->content}}</td>
            <td><a href="/zarbon/delete/{{$d->id}}"><button type="button" class="btn-dark">delete</button></a></td>
        </tr>
    @endforeach
</table>
