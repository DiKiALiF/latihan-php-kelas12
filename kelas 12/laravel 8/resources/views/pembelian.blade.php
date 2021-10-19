<html>
<body>
<h1>Tampil Data</h1>
@foreach($pmbln as $data)
<fieldset>
    <legend>Pembelian {{$data->id_pembelian}}</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id_pembelian}}</td></tr>
    <tr><td>Nama Barang</td><td>:</td><td>{{$data->nama_barang}}</td></tr>
    <tr><td>Nama Suplier</td><td>:</td><td>{{$data->nama_suplier}}</td></tr>
    <tr><td>Qty</td><td>:</td><td>{{$data->qty}}</td></tr>
    <tr><td>Tanggal</td><td>:</td><td>{{$data->tgl}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
