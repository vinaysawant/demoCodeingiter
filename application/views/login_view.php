<html>
<head>
    <title>Little Paws</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jumbotron-narrow.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/signin.css"); ?>"/>
</head>
<body>
<div class="container">
    <div class="header">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Login</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Little Paws</h3>
    </div>

    <div class="jumbotron">
        <?php echo validation_errors(); ?>
        <?php echo form_open('verifylogin', 'class="form-signin"'); ?>
        <!--        <h2 class="form-signin-heading">Please sign in</h2>-->
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="User Name" required
               autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>

    <footer class="footer">
        <p>&copy; NixLab 2015</p>
    </footer>

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.2.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</div>
<!-- /container -->

</body>
</html>