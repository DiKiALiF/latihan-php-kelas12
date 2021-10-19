<html>
<body>
<h1>Tampil Data</h1>
@foreach($pmbl as $data)
<fieldset>
    <legend>Pembeli {{$data->id_pembeli}}</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id_pembeli}}</td></tr>
    <tr><td>Nama Suplier</td><td>:</td><td>{{$data->nama}}</td></tr>
    <tr><td>Jenis Kelamin</td><td>:</td><td>{{$data->jns_kelamin}}</td></tr>
    <tr><td>Alamat</td><td>:</td><td>{{$data->alamat}}</td></tr>
    <tr><td>Kode Pos</td><td>:</td><td>{{$data->kode_pos}}</td></tr>
    <tr><td>Kota</td><td>:</td><td>{{$data->kota}}</td></tr>
    <tr><td>Tanggal Lahir</td><td>:</td><td>{{$data->tgl_lahir}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
