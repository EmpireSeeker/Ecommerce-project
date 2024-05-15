<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/eme.css') }}">
</head>
<body>
    <form class="container" action="{{route ('register') }}" method="post">
        @csrf
        <h2>sign up</h2>
<input type="text" Placeholder="Name" name="name"></input>
<br/><br/>
<input type="email" placeholder="email" name="email"></input>
<br/><br/>
<input type="hidden" placeholder="email" name="role" value="user"></input>
<br/><br/>
<input type="password" placeholder="password" name="password"></input>
<br/><br/>
<input type="password" placeholder="confirm Password" name="password_confirmation"> </input>
<br/><br/>
<button type="submit">Submit</button>
</form>

</body>
</html>
