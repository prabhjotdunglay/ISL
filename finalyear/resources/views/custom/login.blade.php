<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel = "stylesheet" href = "css/login.css" />
    </head>
<body>


<div class="box-form">
    <div class="left">
        <div class="overlay">
            <h1>ISL System</h1>

        </div>

    </div>

    <div class="right">
        <h5>Login</h5>
        <form action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <div class="inputs">
                <input type="email" name="email" id="email" class="form-control input-sm" required ="email" value = "{{old('email')}}" placeholder="Email">
                <br>
                <input type="password" name="password" id="password" required ="password" class="form-control input-sm" placeholder="Password">
            </div>

            <br><br>
            <div class="content">
                <div class="title m-b-md">
                    @if(session('Status'))
                        <p>{{session('Status')}}</p>
                    @endif

                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class = "alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
            <div class="remember-me--forget-password">
                <!-- Angular -->

                <p><a href="./forgot_password"> Forgotten Password? </a></p>
            </div>

            <br>
            <button type="submit" value="Login" class="btn btn-primary">Submit</button>


    </div>
</div>
</body>
</html>
