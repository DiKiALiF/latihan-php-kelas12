<html>
<body>
<h1>Tampil Data</h1>
@foreach($brng as $data)
<fieldset>
    <legend>Barang {{$data->id_barang}}</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id_barang}}</td></tr>
    <tr><td>Nama Barang</td><td>:</td><td>{{$data->nama}}</td></tr>
    <tr><td>Varian</td><td>:</td><td>{{$data->varian}}</td></tr>
    <tr><td>Harga Beli</td><td>:</td><td>{{$data->harga_beli}}</td></tr>
    <tr><td>Harga Jual</td><td>:</td><td>{{$data->harga_jual}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
