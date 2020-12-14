<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quam ut doloribus earum, consequatur ullam ipsa perferendis doloremque beatae iusto ratione maxime iste cupiditate delectus, optio accusantium voluptates molestias tenetur.
<p>
        
        {{-- blade syntax เทียบได้กับ echo --}}

        <table border="1">
            <tr>
                <th>#</th>
            </tr>
            @foreach ($productname as $item)
            <tr>
                <td>{{$item}}</td>
            </tr>
            @endforeach
           

        </table>
</p>
</body>
</html>