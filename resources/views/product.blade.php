<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <form class="container" action="{{route ('registerproduct') }}" method="POST">
        @csrf
    <input type="text" Placeholder="Name" name="name"></input>
<br/><br/>
<input type="text" placeholder="description" name="description"></input>
<br/><br/>
<input type="text" placeholder="price" name="price"></input>
<br/><br/>
<input type="text" placeholder="quantity" name="quantity"></input>
<br/><br/>
<input type="text" placeholder="status" name="status"></input>
<br/><br/>
<input type="text" placeholder="size" name="size"> </input>
<br/><br/>
<button type="submit">craete</button>
    </form>
</body>
</html>
