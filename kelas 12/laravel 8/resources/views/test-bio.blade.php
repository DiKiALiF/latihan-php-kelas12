<html>
<body>
<center><h1>Biodata</h1></center>
@foreach($query as $bio)
    <fieldset>
    <legend>Biodata</legend>
    <table>
    <tr><td>Id</td><td>:</td><td>{{$bio->id}}</td></tr>
    <tr><td>Name</td><td>:</td><td>{{$bio->name}}</td></tr>
    <tr><td>Born Date</td><td>:</td><td>{{$bio->bornDate}}</td></tr>
    <tr><td>Gender</td><td>:</td><td>{{$bio->gender}}</td></tr>
    <tr><td>Address</td><td>:</td><td>{{$bio->address}}</td></tr>
    <tr><td>Religion</td><td>:</td><td>{{$bio->religion}}</td></tr>
    <tr><td>Age</td><td>:</td><td>{{$bio->age}}</td></tr>
    <tr><td>Hobby</td><td>:</td><td>{{$bio->hobby}}</td></tr>
    </table>
    </fieldset>
@endforeach
</body>
</html>
