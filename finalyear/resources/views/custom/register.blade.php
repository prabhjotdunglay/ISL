<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v9 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/nunito-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>

    {{-- Bootstrapcdn--}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="form-v9">

<div class="page-content">
    <div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
        <form class="form-detail" action={{route('register')}} method="post">
            @csrf
            <h2>Registration Form</h2>
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p class = "alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
            <div class="form-row-total">
                <div class="form-row">
                    <input type="text" name="name" id="name" class="input-text" value = "{{old('name')}}"placeholder="Your Name" required>
                </div>

                <div class="form-row">
                    <input type="text" name="email" id="email" class="input-text"  value = "{{old('email')}}"placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
            </div>
            <div class="form-row-total">
                <div class="form-row">
                    <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
                </div>
                <div class="form-row">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="input-text" placeholder="Confirm Password">
                </div>
            </div>

            <div class="form-row-total">
                <div class="form-row">
                    <input type="text" name="address" id="address" class="input-text" placeholder="Address" required>
                </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Register">
            </div>
        </form>
    </div>
</div>


{{-- jquery--}}
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>


{{-- javascript--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
