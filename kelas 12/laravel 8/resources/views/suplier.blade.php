<html>
<body>
<h1>Tampil Data</h1>
@foreach($splr as $data)
<fieldset>
    <legend>Suplier {{$data->id_suplier}}</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id_suplier}}</td></tr>
    <tr><td>Nama Suplier</td><td>:</td><td>{{$data->nama}}</td></tr>
    <tr><td>Alamat</td><td>:</td><td>{{$data->alamat}}</td></tr>
    <tr><td>Kode Pos</td><td>:</td><td>{{$data->kode_pos}}</td></tr>
    <tr><td>Kota</td><td>:</td><td>{{$data->kota}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
