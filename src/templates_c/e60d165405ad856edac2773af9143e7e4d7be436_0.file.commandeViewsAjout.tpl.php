<?php
/* Smarty version 3.1.29, created on 2017-02-01 15:30:23
  from "C:\Wamp64\www\gourmandise\templates\commandeViewsAjout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5891ff0fbc1f90_24228874',
  'file_dependency' => 
  array (
    'e60d165405ad856edac2773af9143e7e4d7be436' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\commandeViewsAjout.tpl',
      1 => 1485962962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891ff0fbc1f90_24228874 ($_smarty_tpl) {
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2></h2>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<!-- FORMULAIRE -->
							<form role="form" method="post">
								<div class="form-group">
									<label for="exampleInputPassword1">
										Code Vendeur
									</label>
									<input class="form-control" id="exampleInputPassword1" type="text" name="code_v" value="" > 
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Code Client
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="code_c" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Date Livraison
									</label>
									<input class="form-control" id="exampleInputPassword1" type="text" name="descriptif" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Date Commande
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="prixunitaire" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Total HT
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="stock" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Total TVA
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="piece" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Etat
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="piece" value="" >
								</div>
								<button type="submit" class="btn btn-success">Ajout</button>
							</form>
						</div>
						<div class="col-md-6">
							Informations
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>







<?php }
}
