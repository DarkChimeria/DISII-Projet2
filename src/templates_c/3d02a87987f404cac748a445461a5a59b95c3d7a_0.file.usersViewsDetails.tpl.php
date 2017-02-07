<?php
/* Smarty version 3.1.29, created on 2017-02-07 21:35:48
  from "C:\wamp64\www\p2\src\templates\users\usersViewsDetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589a3db4587954_22428940',
  'file_dependency' => 
  array (
    '3d02a87987f404cac748a445461a5a59b95c3d7a' => 
    array (
      0 => 'C:\\wamp64\\www\\p2\\src\\templates\\users\\usersViewsDetails.tpl',
      1 => 1486503347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589a3db4587954_22428940 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\p2\\src\\includes\\libs\\Smarty\\plugins\\modifier.date_format.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<h1>
  			Profil du membre
  		</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  			<li><a href="#">Examples</a></li>
  			<li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">

  		<div class="row">
  			<div class="col-md-3">

  				<!-- Profile Image -->
  				<div class="box box-primary">
  					<div class="box-body box-profile">
  						<img class="profile-user-img img-responsive img-circle" src="upload_files/user_avatar/<?php echo $_smarty_tpl->tpl_vars['user_profilPicture']->value;?>
" alt="User profile picture">

  						<h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['user_firstname']->value;?>
</h3>

  						<p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
</p>

  						<ul class="list-group list-group-unbordered">
  							<li class="list-group-item">
  								<b>Date d'inscription</b> <a class="pull-right"><?php echo utf8_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_dateCreation']->value,"%d %B %Y"));?>
</a>
  							</li>
  							<li class="list-group-item">
  								<b>Statut</b> <a class="pull-right"><?php echo $_smarty_tpl->tpl_vars['usertype_name']->value;?>
</a>
  							</li>
  							<li class="list-group-item">
  								<b>Licence</b> <a class="pull-right"><?php echo $_smarty_tpl->tpl_vars['license']->value;?>
</a>
  							</li>
  						</ul>

  						<a href="#" class="btn btn-primary btn-block"><b>Envoyer Licence</b></a>
  					</div>
  					<!-- /.box-body -->
  				</div>
  				<!-- /.box -->

  				<!-- About Me Box -->
  				<div class="box box-primary">
  					<div class="box-header with-border">
  						<h3 class="box-title">A PROPOS</h3>
  					</div>
  					<!-- /.box-header -->
  					<div class="box-body">
  						<strong><i class="fa fa-book margin-r-5"></i> Groupe Actuel</strong>

  						<p>
  							<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
</span>
  							<span class="label label-success">Entré le : <?php echo utf8_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['datestart']->value,"%d %B %Y"));?>
</span>
<!--   							<span class="label label-info">Javascript</span>
  							<span class="label label-warning">PHP</span>
  							<span class="label label-primary">Node.js</span> -->
  						</p>

  						<hr>

  						<strong><i class="fa fa-map-marker margin-r-5"></i> Adresse</strong>
  						<p class="text-muted"></p>
  						<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['user_adress']->value;?>
</p>
  						<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['user_cp']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['user_city']->value;?>
</p>

  						<hr>

  						<strong><i class="fa fa-phone margin-r-5"></i> Informations de contact</strong>

  						
  						<p class="text-muted"></p>
  						<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['user_phone']->value;?>
</p>
  						<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['user_mobile']->value;?>
</p>
  						<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
</p>

  						<hr>

  						<strong><i class="fa fa-file-text-o margin-r-5"></i> Commentaires</strong>

  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
  					</div>
  					<!-- /.box-body -->
  				</div>
  				<!-- /.box -->
  			</div>
  			<!-- /.col -->
  			<div class="col-md-9">
  				<div class="nav-tabs-custom">
  					<ul class="nav nav-tabs">
  						<li class="active"><a href="#activity" data-toggle="tab">Tableau de bord</a></li>
  						<li><a href="#history" data-toggle="tab">Historique</a></li>
  						<li><a href="#settings" data-toggle="tab">Paramètres</a></li>
  					</ul>
  					<div class="tab-content">
  						<div class="active tab-pane" id="activity">
  							<!-- Post -->
  							<div class="post">
  								<div class="user-block">
  									
  									<span class="username">
  										<a href="#">Licence à imprimer</a>
  										<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
  									</span>
  									<span class="description"></span>
  								</div>
  								<!-- /.user-block -->
  								<p>
                  <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['carteLicence']->value;?>
" height="600" width="381" alt="user image">
  									
  								</p>
  								

  										
  									</div>
  									<!-- /.post -->

  									<!-- Post -->
  									
  									<!-- /.post -->

  									<!-- Post -->
  									
  											<!-- /.post -->
  										</div>
  										<!-- /.tab-pane -->
  										<div class="tab-pane" id="history">


  											<!-- The timeline -->
  											<ul class="timeline timeline-inverse">

  												<?php
$_from = $_smarty_tpl->tpl_vars['history']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_History_0_saved_item = isset($_smarty_tpl->tpl_vars['History']) ? $_smarty_tpl->tpl_vars['History'] : false;
$_smarty_tpl->tpl_vars['History'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['History']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['History']->value) {
$_smarty_tpl->tpl_vars['History']->_loop = true;
$__foreach_History_0_saved_local_item = $_smarty_tpl->tpl_vars['History'];
?>
  												

  											<?php if ($_smarty_tpl->tpl_vars['History']->value['ifActif'] == '0') {?>
  											<li class="time-label">
  													<span class="bg-red">
  														<?php echo utf8_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['History']->value['datefinish'],"%d %B %Y"));?>

  													</span>
  												</li>
  												<?php } else { ?>
  											<li class="time-label">
  												<span class="bg-green">
  													Actif : <?php echo utf8_encode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['History']->value['datestart'],"%d %B %Y"));?>

  												</span>
  											</li>
  											<?php }?>

  											<!-- /.timeline-label -->
  											<!-- timeline item -->
  											<li>
  												<i class="fa fa-users bg-blue"></i>

  												<div class="timeline-item">
  													<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

  													<h3 class="timeline-header"><a href="#"><?php echo $_smarty_tpl->tpl_vars['History']->value['group_name'];?>
</a></h3>


  													<!-- <?php echo $_smarty_tpl->tpl_vars['History']->value['datestart'];?>

  													<?php echo $_smarty_tpl->tpl_vars['History']->value['datefinish'];?>
 -->

  													
  													<div class="timeline-body">
  													Description du groupe : 
  														<?php echo $_smarty_tpl->tpl_vars['History']->value['group_description'];?>
<br>
                             Activité du groupe : <?php echo $_smarty_tpl->tpl_vars['History']->value['group_activity'];?>

  													</div>
  													<div class="timeline-footer">
  														<a class="btn btn-primary btn-xs">Voir le groupe</a>
  													</div>
  												</div>
  											</li>

  											<?php
$_smarty_tpl->tpl_vars['History'] = $__foreach_History_0_saved_local_item;
}
if ($__foreach_History_0_saved_item) {
$_smarty_tpl->tpl_vars['History'] = $__foreach_History_0_saved_item;
}
?>

  											<li>
  												<i class="fa fa-clock-o bg-gray"></i>
  											</li>
  										</ul>
  									</div>




  									<!-- /.tab-pane -->

  									<div class="tab-pane" id="settings">
  										<form class="form-horizontal">
  											<div class="form-group">
  												<label for="inputName" class="col-sm-2 control-label">Name</label>

  												<div class="col-sm-10">
  													<input type="email" class="form-control" id="inputName" placeholder="Name">
  												</div>
  											</div>
  											<div class="form-group">
  												<label for="inputEmail" class="col-sm-2 control-label">Email</label>

  												<div class="col-sm-10">
  													<input type="email" class="form-control" id="inputEmail" placeholder="Email">
  												</div>
  											</div>
  											<div class="form-group">
  												<label for="inputName" class="col-sm-2 control-label">Name</label>

  												<div class="col-sm-10">
  													<input type="text" class="form-control" id="inputName" placeholder="Name">
  												</div>
  											</div>
  											<div class="form-group">
  												<label for="inputExperience" class="col-sm-2 control-label">Experience</label>

  												<div class="col-sm-10">
  													<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
  												</div>
  											</div>
  											<div class="form-group">
  												<label for="inputSkills" class="col-sm-2 control-label">Skills</label>

  												<div class="col-sm-10">
  													<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
  												</div>
  											</div>
  											<div class="form-group">
  												<div class="col-sm-offset-2 col-sm-10">
  													<div class="checkbox">
  														<label>
  															<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
  														</label>
  													</div>
  												</div>
  											</div>
  											<div class="form-group">
  												<div class="col-sm-offset-2 col-sm-10">
  													<button type="submit" class="btn btn-danger">Submit</button>
  												</div>
  											</div>
  										</form>
  									</div>
  									<!-- /.tab-pane -->
  								</div>
  								<!-- /.tab-content -->
  							</div>
  							<!-- /.nav-tabs-custom -->
  						</div>
  						<!-- /.col -->
  					</div>
  					<!-- /.row -->

  				</section>
  				<!-- /.content -->
  			</div><?php }
}
