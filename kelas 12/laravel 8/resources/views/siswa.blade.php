<html>
<body>
<ul>
@foreach($siswas as $data)
    id : {{ $data['id'] }} <br>
    nama : {{ $data['nama'] }} <br>
    username : {{ $data['username'] }} <br>
    email : {{ $data['email'] }} <br>
    alamat : {{ $data['alamat'] }} <br>
    mata pelajaran :
    <ul>
    @foreach($data['mapel'] as $mapel)
        <li>{{ $mapel }}</li>
    @endforeach
    </ul>
@endforeach
</ul>
</body>
</html>
