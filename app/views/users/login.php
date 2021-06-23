<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo URLROOT ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URLROOT ?>admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail"
                                class="form-control <?php echo ((empty($data['email_err']) ? '' : 'is-invalid')) ?>"
                                placeholder="Email address" name="email" autofocus="autofocus" value="<?php echo (empty($data['email']) ? '' : $data['email']) ?>">
                            <label for="inputEmail">Email address</label>
                            <div class="invalid-feedback">
                                <?php echo ($data['email_err']) ?>!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword"
                                class="form-control <?php echo ((empty($data['password_err']) ? '' : 'is-invalid')) ?>"
                                placeholder="Password" name="password">
                            <label for="inputPassword">Password</label>
                            <div class="invalid-feedback">
                                <?php echo ($data['password_err']) ?>!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login" />
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URLROOT ?>admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URLROOT ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URLROOT ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>