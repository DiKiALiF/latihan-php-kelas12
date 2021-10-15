<html>
<body>
<ul>
@foreach($hobies as $data)
    nis : {{ $data['nis'] }} <br>
    nama : {{ $data['nama'] }} <br>
    kelas : {{ $data['kelas'] }} <br>
    hobi :
    <ul>
    @foreach($data['hobi'] as $hobi)
        <li>{{ $hobi }}</li>
    @endforeach
    <hr>
    </ul>
@endforeach
</ul>

</body>
</html>
