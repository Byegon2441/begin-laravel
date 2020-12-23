<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
        <p><br></p>
        {{-- blade syntax เทียบได้กับ echo --}}
        <div class="container">
            <h1>แถวทั้งหมด{{$productname->total()}} แถวของหน้านี้{{$productname->count()}}</h1>
         <hr>
        <table class="table" >
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>detail</th>
            </tr>
            @foreach ($productname as $item)
            <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->name}}</td>
               <td>{{$item->price}}</td>
               <td>{{$item->detail}}</td>
            </tr>
            @endforeach
           

        </table>
        <br>
        {{$productname->links()}}
    </div>
</p>
</body>
</html>