<?php
/* Smarty version 3.1.29, created on 2017-02-01 13:00:11
  from "C:\Wamp64\www\gourmandise\templates\produitViewsSuppression.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5891dbdb8fe4f0_03868244',
  'file_dependency' => 
  array (
    'b641340e6319976c3aceae9d742639e553a36f07' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\produitViewsSuppression.tpl',
      1 => 1485954009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891dbdb8fe4f0_03868244 ($_smarty_tpl) {
?>
	
tpl supp
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
									<table class="table table-bordered table-inverse">
										<thead>
											<tr>
												<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['design']->value;?>
</th>

											</tr>
										</thead>
										<tbody>
											<tr>      
												<td  rowspan=7><img class="img-responsive img-rounded" src="../img/toasts.jpg" alt=""/></td>
												<td colspan="2">Nom de la recette</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['design']->value;?>
</td>
											</tr>
											<tr>
												<td colspan="2">Descriptif</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['descri']->value;?>
</td>
											</tr>
											<tr>
												<td colspan="2">Référence</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
</td>
											</tr> 
											<tr>
												<td colspan="2">Prix Unitaire HT</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['pu']->value;?>
 €</td>
											</tr> 
											<tr>
												<td colspan="2">Quantité</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['qt']->value;?>
</td>
											</tr> 
											<tr>
												<td colspan="2">Stock</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</td>
											</tr> 
											<tr>
												<td colspan="2">Poids Pièce</td>
												<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['pp']->value;?>
</td>
											</tr> 



											<td colspan="5">Informations Complémentaires:</td>

											<tr>
												<td colspan="5">

													<p>

														Latius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.

														Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.

														Eo adducta re per Isauriam, rege Persarum bellis finitimis inligato repellenteque a conlimitiis suis ferocissimas gentes, quae mente quadam versabili hostiliter eum saepe incessunt et in nos arma moventem aliquotiens iuvant, Nohodares quidam nomine e numero optimatum, incursare Mesopotamiam quotiens copia dederit ordinatus, explorabat nostra sollicite, si repperisset usquam locum vi subita perrupturus.
													</p>
													<form method="POST">
									<button type="submit" name="supp" class="btn btn-danger"><i class="fa fa-close "></i> Supprimer</button>
									</form>

												</td>
											</tr>
										</tbody>
									</table>
									<a href="index.php" class="btn btn-warning"><i class="fa fa-backward "></i>
										Retourner à la liste des produits
									</a>
									
								</div>
								<div class="col-md-6">
									

								</div>
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>










<?php }
}
