<?php
/* Smarty version 3.1.29, created on 2017-02-02 13:18:53
  from "C:\Wamp64\www\gourmandise\templates\produitViewsAjout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589331bd7836b5_82236656',
  'file_dependency' => 
  array (
    '187981ab16d9d417eb2afd2c48936ebab0aff208' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\produitViewsAjout.tpl',
      1 => 1486041520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589331bd7836b5_82236656 ($_smarty_tpl) {
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2></h2>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<!-- FORMULAIRE -->
							<form role="form" method="POST" onsubmit="return validateForm()" name="Form">
								<div class="form-group">
									<label for="exampleInputPassword1">
										Désignation
									</label>
									<input class="form-control" id="exampleInputPassword1" type="text" name="designation" value="" required> 
									<span id="result"></span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Quantité
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="quantite" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Descriptif
									</label>
									<div class="bs-docs-example">
										<select class="form-control" name="descriptif" id="select01">
											<option value="G">Grammes</option>
											<option value="P">Poids Pièce</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Prix Unitaire HT
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="prixunitaire" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Stock
									</label>
									<input class="form-control" id="stock" type="number" name="stock" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Poids Pièce
									</label>
									<input class="form-control" type="number" name="piece" value="0" min="1" id="select02" disabled>
								</div>
								<button type="submit" class="btn btn-success">Ajouter</button>
							</form>
						</div>
						<div class="col-md-6">
							Informations


							<?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
							<div class='alert alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez pas ajouté de désignation
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
