<form action="/zarbon/create" method="post">
{{--    {{csrf_field()}}--}}
    @csrf
    <input type="text" name="title" >
    <input type="text" name="content" >
    <input type="submit" value="save">
</form>
<h1>Create Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
