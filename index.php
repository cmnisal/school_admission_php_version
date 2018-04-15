<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <link rel = "stylesheet" type = "text/css" href = "public/stylesheets/myStyle.css" />
    <link rel = "stylesheet" type = "text/css" href = "public/xel/stylesheets/material.theme.css" />
</head>
<body>
    <div class="container">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title"> Sign In </div>
                    <div class="forgot-password"> <a href="#">Forgot password?</a> </div>
                </div>
                <div class="panel-body panel-pad">
                    <div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div>
                    <form id="loginform" class="form-horizontal" role="form"  method = "post" action="includes/login.php">
                        <div class="input-group margT25">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" />
                        </div>
                        <div class="input-group margT25">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password"/>
                        </div>
                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group margT10">
                            <div class="col-sm-12 controls">
                                <input id="btn-login" href="#" class="btn btn-block btn-success" type="submit" name="Login" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div class="no-acc">
                                    Don't have an account!
                                    <a href="#"> Sign Up Here </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="public/xel/xel.min.js" ></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
