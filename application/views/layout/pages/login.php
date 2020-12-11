<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Task</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?= base_url(); ?>resource/css/style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container">
        <div class="row" id="login-form">
            <div class="col-md-4 col-md-offset-4">
            <?php if($this->session->flashdata('login_error') !=null ): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('login_error');; ?>
                    </div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Form</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('site/validate_credentails'); ?>
                        <fieldset>
                            <div class="form-group">
                                <label>Email <small>*</small></label>
                                <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  value="" required>
                            </div>
                            <div class="form-group">
                            <label>Password <small>*</small></label>
                                <input type="password" name="password" class="form-control" value="" pattern=".{8,}" required >
                            </div>
                            <input class="btn btn-success btn-block" name="login" type="submit" value="Login">
                        </fieldset>
                        <?php echo form_close(); ?>
                        <hr/>
                        <center><h4>OR</h4></center>
                        <a href="<?= base_url(); ?>site/register" class="btn btn-block btn-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>