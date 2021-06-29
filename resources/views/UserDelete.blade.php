<h1>Deleting A User</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    .w-5{
        display:none
    }
    
    </style>
</head>
<body>

</body>
</html>



<h1>Database Information In Table Format</h1>


<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>age</th>
<th>address</th>
<th>email</th>
<th>action</th>
</tr>
@foreach($datastorage as $mysql)
<tr>
<td>{{$mysql['id']}}</td>
<td>{{$mysql['name']}}</td>
<td>{{$mysql['age']}}</td>
<td>{{$mysql['address']}}</td>
<td>{{$mysql['email']}}</td>

<!-- CODE TO LINK DELETE OPTION-->
<td><a href="{{'delete/'.$mysql['id']}}">delete</a>

<!-- Edit Code -->
<a href="{{'edit/'.$mysql['id']}}">edit</a>
</td> 

</tr>
@endforeach




<!-- CODE TO EFFECT PAGINATE -->






