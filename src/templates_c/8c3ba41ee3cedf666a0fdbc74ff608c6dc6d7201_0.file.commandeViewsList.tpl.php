<?php
/* Smarty version 3.1.29, created on 2017-02-02 15:05:55
  from "C:\Wamp64\www\gourmandise\templates\commande\commandeViewsList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58934ad3860d56_50417803',
  'file_dependency' => 
  array (
    '8c3ba41ee3cedf666a0fdbc74ff608c6dc6d7201' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\commande\\commandeViewsList.tpl',
      1 => 1486047923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58934ad3860d56_50417803 ($_smarty_tpl) {
?>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">

								<?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
								<div class='alert alert-success'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Super !</strong>  Le produit a bien été ajouté
									<a href="index.php?gestion=produit&action=add">Voulez-vous ajouter un autre produit ?</a>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == '2') {?>
								<div class='alert alert-success'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Super !</strong>  Le produit a bien été Modifié
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == '3') {?>
								<div class='alert alert-warning'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Super !</strong>  Le produit a bien été supprimé
								</div>
								<?php } else { ?>
								<?php }?>
								<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['nblignes']->value;?>
</h2>
								<table class="table table-hover">
									<thead>
										<tr>
											<th>
												Référence
											</th>
											<th>
												Désignation
											</th>
											<th>
												Descriptif
											</th>

											<th colspan="3" class="align-center">
												Actions
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->tpl_vars['listCommandes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Commande_0_saved_item = isset($_smarty_tpl->tpl_vars['Commande']) ? $_smarty_tpl->tpl_vars['Commande'] : false;
$_smarty_tpl->tpl_vars['Commande'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Commande']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Commande']->value) {
$_smarty_tpl->tpl_vars['Commande']->_loop = true;
$__foreach_Commande_0_saved_local_item = $_smarty_tpl->tpl_vars['Commande'];
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['Commande']->value['numero'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['Commande']->value['code_v'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['Commande']->value['code_c'];?>
</td>
											<td>
												<a href="index.php?gestion=commande&action=read&id=<?php echo $_smarty_tpl->tpl_vars['Commande']->value['numero'];?>
"><i class="fa fa-folder text-infos"></i></a>
												<a href="index.php?gestion=commande&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['Commande']->value['numero'];?>
"><i class="fa fa-pencil text-warning"></i></a>
												<a href="index.php?gestion=commande&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['Commande']->value['numero'];?>
"><i class="fa fa-close text-danger"></i></a>
											</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['Commande'] = $__foreach_Commande_0_saved_local_item;
}
if ($__foreach_Commande_0_saved_item) {
$_smarty_tpl->tpl_vars['Commande'] = $__foreach_Commande_0_saved_item;
}
?>
									</tbody>
								</table>
							</div>
						</div>
					</div><?php }
}
