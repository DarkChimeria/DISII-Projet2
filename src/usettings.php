<?php
require_once 'gestionnaire/classes/class.settings.php';

$u_settings = new SETTINGS();

$stmt = $u_settings->runQuery("SELECT * FROM settings WHERE id=1");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$name = $row['name_website'];
$description = $row['description_website'];
$mail = $row['mail_website'];
$adress = $row['adress_website'];
$phone = $row['phone_website'];
$domain = $row['domain'];
$logo = $row['logo_website'];
$rna = $row['idRNA'];
$price = $row['price_license'];


// if (isset($_POST['uvalider']) && $name == $_POST['aname'] && $firstname == $_POST['afirstname'] && $birthday == $_POST['abirth']){

//   $msg = "<div class='alert alert-warning'><button class='close' data-dismiss='alert'>&times;</button><strong>Abruti !</strong>  Tu n'as rien modifié gros con !</div>";

// }else{

  if (isset($_POST['uvalider'])){
    $name = $_POST['name_website'];
    $description = $_POST['description_website'];
    $mail = $_POST['mail_website'];
    $adress = $_POST['adress_website'];
    $phone = $_POST['phone_website'];
    $domain = $_POST['domain_website'];
    $rna = $_POST['idRNA'];
    $price = $_POST['price_license'];

    // PARAMETRES IMAGES PROFIL
  $imgFile = $_FILES['logo_website']['name'];
  $tmp_dir = $_FILES['logo_website']['tmp_name'];
  $imgSize = $_FILES['logo_website']['size'];
   

  if(empty($imgFile)){

   $errMSG = '<div class="box-body"><div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Attention !</h4>Aucune image sélectionnée</div></div>';
  }
  else
  {
   $upload_dir = 'user_images/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = '<div class="box-body"><div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Attention !</h4>L\'image sélectionnée est trop volumineuse</div></div>';
    }
   }
   else{
    $errMSG = '<div class="box-body"><div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Attention !</h4>Seuls les images de type : JPEG, JPG, PNG, GIF sont acceptées</div></div>';  
   }
  }

if(!isset($errMSG))
  {

    $u_settings->editSettings($name,$description,$mail,$adress,$phone,$domain,$userpic,$rna,$price);
   
    // Header( 'Location: ../index.php?success=1' );
    $msgalert = '<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Super!</h4>Les paramètres ont été édités avec succès !</div></div>';
  }
}

// }


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
        <span class="logo-lg"><b><?php echo $name ?></b>ASSO</span>
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
          Modification
          <small>Paramètres</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Fil d'ariane</a></li>
          <li class="active">Modification des paramètres</li>
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
              <h3 class="box-title">Modification des paramètres</h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom du site </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom" name="name_website" value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom" name="description_website" value="<?php echo $description ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pseudo" name="mail_website" value="<?php echo $mail ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse Postale</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pseudo" name="adress_website" value="<?php echo $adress ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Numéro de téléphone</label>
                  <input type="phone" class="form-control" id="exampleInputEmail1" placeholder="adresse@mail.fr" name="phone_website" value="<?php echo $phone ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adresse du script</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Domain.fr" name="domain_website" value="<?php echo $domain ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">identification RNA</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="N° RNA" name="idRNA" value="<?php echo $rna ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Montant de la licence</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Montant licence" name="price_license" value="<?php echo $price ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Photo de profil</label>
                  <input type="file" id="logo_website" name="logo_website" accept="image/*" value="../user_images/<?php echo $logo ?>">
                  <p class="help-block">Vous pouvez ajouter une photo de profil. Optionnel</p>
                 <img src="user_images/<?php echo $logo ?>" width="50%"/>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="uvalider">Modifier</button>
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
