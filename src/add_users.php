<?php


require_once 'gestionnaire/classes/class.user.php';

$reg_user = new USER();


if(isset($_POST['btn-signup']))
{
  $uname = $_POST['name'];
  $ufirstname = $_POST['firstname'];
  $ubirth = $_POST['birth'];
  $uadress = $_POST['adress'];
  $uphone = $_POST['phone'];
  $umobile = $_POST['mobile'];
  $umail = $_POST['mail'];
  $utype = $_POST['type'];
  $upseudo = $_POST['pseudo'];
  $ugender = $_POST['gender'];
  $upicture = $_POST['picture'];
  $upassword = $_POST['password'];

  $stmt = $reg_user->runQuery("SELECT * FROM users WHERE mail_user=:email");
  $stmt->execute(array(":email"=>$umail));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if($stmt->rowCount() > 0)
  {
    $msgalert = '<div class="box-body"><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Attention !</h4>L\'adresse est déjà utilisée</div></div>
        ';
  }
  else
  {
    if($reg_user->register($uname,$ufirstname,$ubirth,$uadress,$uphone,$umobile,$umail,$utype,$upseudo,$ugender,$upicture,$upassword))
    {     
          
      $message = "          
            Hello $upseudo
            <br /><br />
            Bienvenue sur Gestionnaire Asso!<br/>
            Voici vos informations de connexion :<br/>
            Login : $umail <br/>
            Mot de passe : $upassword
            <br /><br />
            
            <br /><br />
            Thanks,";
            
      $subject = "Creation de compte";
            
      $reg_user->send_mail($umail,$message,$subject); 
      $msgalert = '<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Super !</h4>Le compte a bien été créé</div></div>
        ';
    }
    else
    {
      echo "sorry , Query could no execute...";
    }   
  }
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestionnaire | Accueil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>GS</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>GESTIONNAIRE</b>ASSO</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">MENU</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Membre depuis Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Rechercher...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <li class="header">MENU</li>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="index.html"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>Utilisateurs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="#">Liste des utilisateurs</a></li>
              <li><a href="pages/add_user.html">Ajouter un utilisateur</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-users"></i> <span>Groupes</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Liste des groupes</a></li>
              <li><a href="#">Ajouter un groupe</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-gear"></i> <span>Paramètres</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Editer les paramètres du site</a></li>
              <li><a href="#">Modifier les informations</a></li>
            </ul>
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Ajout
          <small>Utilisateur</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Fil d'ariane</a></li>
          <li class="active">Ajout d'un utilisateur</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
         <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter un utilisateur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prénom</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom" name="firstname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control"  placeholder="adresse@mail.fr" name="birth">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pseudo</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pseudo" name="pseudo">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse</label>
                  <input type="text" class="form-control"  placeholder="adresse@mail.fr" name="adress">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Téléphone</label>
                  <input type="text" class="form-control"  placeholder="adresse@mail.fr" name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control"  placeholder="adresse@mail.fr" name="mobile">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Type</label>
                  <input type="text" class="form-control"  placeholder="adresse@mail.fr" name="type">
                </div>
                <div class="form-group">
                  <div class="form-group">
                  <label>Genre</label>
                  <select class="form-control" name="gender">
                    <option>Homme</option>
                    <option>Femme</option>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="adresse@mail.fr" name="mail" required>
                </div>
                 
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Photo de profil</label>
                  <input type="file" id="exampleInputFile" name="picture">

                  <p class="help-block">Vous pouvez ajouter une photo de profil. Optionnel</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="btn-signup">Ajouter</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Informations</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php
          if ( isset($msgalert)){
     // treat the succes case ex:
            echo $msgalert;
          }elseif( isset($errMSG)){

            echo $errMSG;
          }
          ?>
          <br>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box-body -->
        </div>

        <!-- /.col -->

        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>


        <!-- /.col -->

        <!-- /.col -->
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Gestionnaire Association
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">SF</a>.</strong> Tous droits réservés.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
   </body>
   </html>