<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot</title>
</head>
<body>
<form action="{{route('forgot_password')}}" method="post">
    {{csrf_field()}}

    @if(session('error'))
        <div>
            {{session('error')}}</div>
        @endif

    @if(session('success'))
        <div>
            {{session('success')}}
        </div>@endif

    <input type = "email" name = "email" id="email">
    <button type="submit" class="btn btn-primary">Submit</button>


</body>
</html>
