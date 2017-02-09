<?php
/* Smarty version 3.1.29, created on 2017-02-09 15:10:30
  from "C:\Wamp64\www\p2\src\templates\groups\groupsViewsList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c866607cc71_61525175',
  'file_dependency' => 
  array (
    '5b06d7e88121ccffbd1e1eddb69246875c167e56' => 
    array (
      0 => 'C:\\Wamp64\\www\\p2\\src\\templates\\groups\\groupsViewsList.tpl',
      1 => 1486653026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c866607cc71_61525175 ($_smarty_tpl) {
?>
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
 			<?php echo $_smarty_tpl->tpl_vars['fil']->value;?>

 			<small>Gestionnaire</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Fil d'ariane</a></li>
 			<li class="active"><?php echo $_smarty_tpl->tpl_vars['fil']->value;?>
</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<!-- Info boxes -->
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-xs-12">
 					<div class="box">
 						<div class="box-header">
 							<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['fil']->value;?>
</h3>

 							<div class="box-tools">
 								<div class="input-group input-group-sm" style="width: 150px;">
 									<form method="POST">
 										
 										<select>
 											<option value="5">5</option>
 											<option value="10">10</option>
 											<option value="15">15</option>
 											<option value="20">20</option>
 										</select>
 										<button type="submit" class="btn btn-success" name="nbAafficher">Afficher</button>
 									</form>

 									<!-- <div class="input-group-btn">
 										<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
 									</div> -->
 								</div>
 							</div>
 						</div>
 						<!-- /.box-header -->
 						<div class="box-body table-responsive no-padding">
 							<table class="table table-hover">
 								<tr>
 									<th>ID</th>
 									<th>Nom</th>
 									<th>Description</th>
 									<th>Activity</th>
 									<th>Action</th>
 								</tr>
 								<?php
$_from = $_smarty_tpl->tpl_vars['pagination']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Groups_0_saved_item = isset($_smarty_tpl->tpl_vars['Groups']) ? $_smarty_tpl->tpl_vars['Groups'] : false;
$_smarty_tpl->tpl_vars['Groups'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Groups']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Groups']->value) {
$_smarty_tpl->tpl_vars['Groups']->_loop = true;
$__foreach_Groups_0_saved_local_item = $_smarty_tpl->tpl_vars['Groups'];
?>
 								<tr>
 									<td><?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_id'];?>
</td>
 									<td><?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_name'];?>
</td>
 									<td><?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_description'];?>
</td>
 									<td><?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_activity'];?>
</td>
 									<td>
 										<a href="index.php?gestion=groups&action=detailsG&id=<?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_id'];?>
"><i class="fa fa-folder text-infos"></i></a>
 										<a href="index.php?gestion=groups&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_id'];?>
"><i class="fa fa-pencil text-warning"></i></a>
 										<a href="index.php?gestion=groups&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['Groups']->value['group_id'];?>
"><i class="fa fa-close text-danger"></i></a>
 									</td>

 									<?php
$_smarty_tpl->tpl_vars['Groups'] = $__foreach_Groups_0_saved_local_item;
}
if ($__foreach_Groups_0_saved_item) {
$_smarty_tpl->tpl_vars['Groups'] = $__foreach_Groups_0_saved_item;
}
?>

 									

 								</table>
 								<table>
 									<div class="box-footer clearfix">
 										<ul class="pagination pagination-sm no-margin pull-right">
 											<?php
$_from = $_smarty_tpl->tpl_vars['numero']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_num_1_saved_item = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value) {
$_smarty_tpl->tpl_vars['num']->_loop = true;
$__foreach_num_1_saved_local_item = $_smarty_tpl->tpl_vars['num'];
?>
 											<li><a class="btn btn-success" role="button" href="index.php?gestion=groups&action=listGroups&page=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</a></li>
 											<?php
$_smarty_tpl->tpl_vars['num'] = $__foreach_num_1_saved_local_item;
}
if ($__foreach_num_1_saved_item) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_num_1_saved_item;
}
?>
 										</ul>
 									</div>

 								</table>
 							</div>
 							<!-- /.box-body -->
 						</div>
 						<!-- /.box -->
 					</div>
 				</div>
 			</div>

 		</section>
 		<!-- /.content -->
 	</div><?php }
}
