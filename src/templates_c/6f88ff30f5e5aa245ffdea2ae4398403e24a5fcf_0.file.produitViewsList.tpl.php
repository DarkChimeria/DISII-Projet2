<?php
/* Smarty version 3.1.29, created on 2017-02-01 13:16:34
  from "C:\Wamp64\www\gourmandise\templates\produitViewsList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5891dfb2da7cf5_49319779',
  'file_dependency' => 
  array (
    '6f88ff30f5e5aa245ffdea2ae4398403e24a5fcf' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\produitViewsList.tpl',
      1 => 1485954986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891dfb2da7cf5_49319779 ($_smarty_tpl) {
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
											<th>
												Prix Unitaire HT
											</th>
											<th colspan="3" class="align-center">
												Actions
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->tpl_vars['listProduits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Produit_0_saved_item = isset($_smarty_tpl->tpl_vars['Produit']) ? $_smarty_tpl->tpl_vars['Produit'] : false;
$_smarty_tpl->tpl_vars['Produit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Produit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Produit']->value) {
$_smarty_tpl->tpl_vars['Produit']->_loop = true;
$__foreach_Produit_0_saved_local_item = $_smarty_tpl->tpl_vars['Produit'];
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['designation'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['descriptif'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['prix_unitaire_HT'];?>
</td>
											<td>
												<a href="index.php?gestion=produit&action=read&id=<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
"><i class="fa fa-folder text-infos"></i></a>
												<a href="index.php?gestion=produit&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
"><i class="fa fa-pencil text-warning"></i></a>
												<a href="index.php?gestion=produit&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
"><i class="fa fa-close text-danger"></i></a>
											</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_local_item;
}
if ($__foreach_Produit_0_saved_item) {
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_item;
}
?>
									</tbody>
								</table>
							</div>
						</div>
					</div>









<?php }
}
