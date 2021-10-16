<html>
<body>
<center><h1>Data Post</h1></center>
@foreach($query as $item)
    <h2>{{$item->title}}</h2>
    <h2>{{$item->content}}</h2>
    <hr>
@endforeach
</body>
</html>
