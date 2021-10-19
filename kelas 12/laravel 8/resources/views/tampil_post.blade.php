<html>
<body>
<h1>Data</h1>
 @foreach ($pos as $data2)
        Id      : {{ $data2->id }} <br>
        Title   : {{ $data2->title }} <br>
        Content : {{ $data2->content }} <br>
<hr>
        @endforeach
</body>
</html>
