<?php
/* Smarty version 3.1.29, created on 2017-02-02 15:03:39
  from "C:\Wamp64\www\gourmandise\templates\commande\commandeViewsAjout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58934a4bbee478_22935023',
  'file_dependency' => 
  array (
    '495af60bd7b532ece2c33e1c13a1b1ae081f05f7' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\commande\\commandeViewsAjout.tpl',
      1 => 1486047817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58934a4bbee478_22935023 ($_smarty_tpl) {
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
									<input class="form-control" id="exampleInputPassword1" type="text" name="date_livraison" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Date Commande
									</label>
									<input class="form-control" id="exampleInputPassword1" type="text" name="date_commande" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Total HT
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="total_ht" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Total TVA
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="total_tva" value="" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Etat
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="etat" value="" >
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
