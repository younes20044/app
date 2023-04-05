<!DOCTYPE html>
<html>
<head>
<title>Registration Form </title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->

<link rel="stylesheet" type="text/css" href="{!! asset('css/styleregist.css') !!}">
 
</head>
<body>
<div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="{{url('post-registration')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="first_name" id="name" placeholder="first name"/>
                    </div>
                    <div class="form-group">
                        <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="last_name" id="name" placeholder="last name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="adresse"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="adresse" id="" placeholder="Your adresse"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                    </div>
                    
                    
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/food/7600037.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
<script src="{!! asset('js/jquery.min.js') !!}"></script>
</body>
</html>