<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset</title>
</head>
<body>
<h1>Hello {{$user->name}}</h1>
<p>Please reset your password</p>
<form action ="{{route('reset_password'.$user->email.'/'.$send)}}" method ="post">

    <input type = "password" name = "password" id="password">
    <input type = "password" name = "password_password" id="password_password">

    <button type="submit" class="btn btn-primary">Reset password </button>

</body>
</html>
