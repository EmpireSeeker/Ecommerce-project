<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>



    <center>
    <form action="{{ route('loggin')}}" method="post">

        @csrf
    <h2>Login</h2>

    <div class="input">
        <input type="text" class="input1" placeholder="Email" name="email" required>
    </div>
    <br/>
    <div class="input">
    <input type="password" class="input1" placeholder="password" name="password" required>
        <i class="fa-solid fa-envelope"></i>
    </div>
    <br>
    <div class="check">
        <div class="sign">
            <button type="submit">Sign In</button>
        </div>
    </form>
    <a href="#">Forget password</a>
    <br>
    <form action="{{route('registration')}}" method="get"> <button type="submit">Register</button>
        @csrf
    </form>
    </div>


</center>


</body>
</html>
