<?php
/* Smarty version 3.1.29, created on 2017-02-05 16:42:55
  from "C:\wamp64\www\p2\src\templates\login\loginViews.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5897560fc9a801_42341551',
  'file_dependency' => 
  array (
    '046b207564487c140f402374187a2864610632bb' => 
    array (
      0 => 'C:\\wamp64\\www\\p2\\src\\templates\\login\\loginViews.tpl',
      1 => 1486312971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5897560fc9a801_42341551 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestionnaire | Connexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="includes/libs/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="includes/libs/Design/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="includes/libs/Design/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>GESTIONNAIRE</b>ASSO</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">CONNEXION</p>
    <form role="form" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="umail">
        
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Mot de passe" name="upassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-login">GO!</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

    <a href="#">Mot de passe perdu ?</a><br>
    <a href="register.html" class="text-center">S'inscrire</a>

  </div>
  <!-- /.login-box-body -->
</div>

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="includes/libs/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="includes/libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="includes/libs/Design/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
