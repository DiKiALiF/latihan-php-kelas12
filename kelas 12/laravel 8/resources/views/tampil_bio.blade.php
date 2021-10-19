<html>
<body>
<h1>Tampil Bio</h1>
@foreach($bio as $data)
<fieldset>
    <legend>Biodata</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$data->id}}</td></tr>
    <tr><td>Name</td><td>:</td><td>{{$data->name}}</td></tr>
    <tr><td>Born Date</td><td>:</td><td>{{$data->bornDate}}</td></tr>
    <tr><td>Gender</td><td>:</td><td>{{$data->gender}}</td></tr>
    <tr><td>Address</td><td>:</td><td>{{$data->address}}</td></tr>
    <tr><td>Religion</td><td>:</td><td>{{$data->religion}}</td></tr>
    <tr><td>Age</td><td>:</td><td>{{$data->age}}</td></tr>
    <tr><td>Hobby</td><td>:</td><td>{{$data->hobby}}</td></tr>
    </table>
    </fieldset>
    @endforeach
</body>
</html>
