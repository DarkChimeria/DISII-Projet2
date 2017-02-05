<?php
/* Smarty version 3.1.29, created on 2017-02-02 14:04:30
  from "C:\Wamp64\www\gourmandise\templates\produitViewsEdition.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58933c6e36fea7_04902526',
  'file_dependency' => 
  array (
    '4a4185b7ee0e12fe1437106b6b67ae28ae7b2c5b' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\produitViewsEdition.tpl',
      1 => 1486044261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58933c6e36fea7_04902526 ($_smarty_tpl) {
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
					</div>
					<div class="col-md-6">
						<h2>Produits Récents</h2>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<!-- FORMULAIRE -->
							<form role="form" method="POST" onsubmit="return validateForm()" name="Form">
								<div class="form-group">
									<label for="exampleInputPassword1">
										Désignation
									</label>
									<input class="form-control" type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['design']->value;?>
" required> 
									<span id="result"></span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Quantité
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['qt']->value;?>
" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Descriptif
									</label>

									<?php if ($_smarty_tpl->tpl_vars['descri']->value == 'G') {?>
									<div class="bs-docs-example">
										<select class="form-control" name="descriptif" id="select01">
											<option value="G" selected>Grammes</option>
											<option value="P">Poids Pièce</option>
										</select>
									</div>
									<?php } else { ?>
									<div class="bs-docs-example">
										<select class="form-control" name="descriptif" id="select01">
											<option value="G">Grammes</option>
											<option value="P" selected>Poids Pièce</option>
										</select>
									</div>
									<?php }?>

									
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Prix Unitaire HT
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="prixunitaire" value="<?php echo $_smarty_tpl->tpl_vars['pu']->value;?>
" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Stock
									</label>
									<input class="form-control" id="stock" type="number" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Poids Pièce
									</label>
									<input class="form-control" type="number" name="piece" value="<?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
" min="1" id="select02" disabled>
								</div>
								<button type="submit" class="btn btn-warning" name="update">Modifier</button>
							</form>
							<br>
							<a href="index.php" class="btn btn-default"><i class="fa fa-backward "></i>
								Retourner à la liste des produits
							</a>

						</div>
						<div class="col-md-6">

							<?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
							<div class='alert alert-success'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Super !</strong>  Le produit a bien été Modifié
							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == '2') {?>
							<div class='alert alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez rien modifié
							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['success']->value == '3') {?>
							<div class='alert alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez rien modifié
							</div>
							<?php } else { ?>
							<?php }?>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>










<?php }
}
