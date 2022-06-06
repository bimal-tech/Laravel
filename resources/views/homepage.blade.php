<html>
<body>

<h1 class="heading">
    Roles
</h1>
<table class="table table-striped">
<tr>
    <th >name</th>
</tr>
@foreach($data as $d)
    <tr>
        <td>{{$d->name}}</td>
    </tr>
@endforeach
</table>
</body>


</html>
