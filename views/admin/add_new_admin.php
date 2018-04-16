<html>
<head>
    <title>
        Add new admin
    </title>
    <?php
    include('header.php');
    ?>
</head>
<body>
<?php
include ('sidebar_admin.php');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="wrapper">
                <h2>Register a new admin</h2>
                <p>Please fill your details to register.</p>
                <form action="../../includes/register_admin.php" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username"class="form-control">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="repassword" class="form-control">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                    <p>Have an account? <a href="register.php">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>
/.container-fluid
/.content-wrapper
</body>
</html>