<form action="/zarbon/create" method="post">
    {{csrf_field()}}
    <input type="text" name="title" >
    <input type="text" name="content" >
    <input type="submit" value="save">
</form>
