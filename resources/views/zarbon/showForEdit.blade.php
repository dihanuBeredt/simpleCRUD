<table>
    <tr>
        <th>Title</th>
        <th>Content</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d->title}}</td>
        <td>{{$d->content}}</td>
        <td><a href="/zarbon/editPage/{{$d->id}}"><button type="button" class="btn-dark">edit</button></a></td>
    </tr>
        @endforeach
</table>
