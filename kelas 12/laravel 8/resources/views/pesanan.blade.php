<html>
<body>
<h1>Tampil Data</h1>
@foreach($psnn as $data)
<fieldset>
    <legend>Pesanan {{$data->id_pesanan}}</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id_pesanan}}</td></tr>
    <tr><td>Nama Pelanggan</td><td>:</td><td>{{$data->nama_pelanggan}}</td></tr>
    <tr><td>Nama Barang</td><td>:</td><td>{{$data->nama_barang}}</td></tr>
    <tr><td>Qty</td><td>:</td><td>{{$data->qty}}</td></tr>
    <tr><td>Tanggal Pesan</td><td>:</td><td>{{$data->tgl_pesan}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
