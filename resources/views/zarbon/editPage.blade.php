<form action="/zarbon/edit/{{$data->id}}" method="post">
    {{csrf_field()}}
    <input type="text" name="title" value="{{$data->title}}">
    <input type="text" name="content" value="{{$data->content}}">
    <input type="submit" value="save">

</form>
