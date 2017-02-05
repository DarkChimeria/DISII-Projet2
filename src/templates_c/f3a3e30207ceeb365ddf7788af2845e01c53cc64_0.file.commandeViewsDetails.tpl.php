<?php
/* Smarty version 3.1.29, created on 2017-02-02 15:07:27
  from "C:\Wamp64\www\gourmandise\templates\commande\commandeViewsDetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58934b2f7a3f37_73748682',
  'file_dependency' => 
  array (
    'f3a3e30207ceeb365ddf7788af2845e01c53cc64' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\commande\\commandeViewsDetails.tpl',
      1 => 1486048043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58934b2f7a3f37_73748682 ($_smarty_tpl) {
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
						<h2>Informations complémentaires</h2>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<!-- FORMULAIRE -->
							<table class="table table-bordered table-inverse">
								<thead>
									<tr>
										<th colspan="4">Commande N° : <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</th>

									</tr>
								</thead>
								<tbody>
									<tr>      
										<td  rowspan=8><img class="img-responsive img-rounded" src="../img/toasts.jpg" alt=""/></td>
										<td colspan="2">Numéro de la commande</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</td>
									</tr>
									<tr>
										<td colspan="2">Code du vendeur</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['codev']->value;?>
</td>
									</tr>
									<tr>
										<td colspan="2">Code du client</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['codec']->value;?>
</td>
									</tr> 
									<tr>
										<td colspan="2">Date de livraison</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['dl']->value;?>
</td>
									</tr> 
									<tr>
										<td colspan="2">Date de commande</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['dc']->value;?>
</td>
									</tr> 
									<tr>
										<td colspan="2">Total HT</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['tht']->value;?>
</td>
									</tr> 
									<tr>
										<td colspan="2">Total TVA</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['ttva']->value;?>
</td>
									</tr> 
									<tr>
										<td colspan="2">Etat</td>
										<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['etat']->value;?>
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


										</td>
									</tr>
								</tbody>
							</table>
							<a href="index.php?gestion=commande" class="btn btn-warning"><i class="fa fa-backward "></i>
								Retourner à la liste des produits
							</a>
						</div>
						<div class="col-md-6">
							<?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

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
$_from = $_smarty_tpl->tpl_vars['listLignes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Lignes_0_saved_item = isset($_smarty_tpl->tpl_vars['Lignes']) ? $_smarty_tpl->tpl_vars['Lignes'] : false;
$_smarty_tpl->tpl_vars['Lignes'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Lignes']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Lignes']->value) {
$_smarty_tpl->tpl_vars['Lignes']->_loop = true;
$__foreach_Lignes_0_saved_local_item = $_smarty_tpl->tpl_vars['Lignes'];
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['Lignes']->value['ref'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Lignes']->value['nl'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Lignes']->value['num'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Lignes']->value['qtdemandee'];?>
</td>
										<td>
												<!-- <a href="index.php?gestion=produit&action=read&id=<?php echo $_smarty_tpl->tpl_vars['Lignes']->value['ref'];?>
"><i class="fa fa-folder text-infos"></i></a>
												<a href="index.php?gestion=produit&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['Lignes']->value['ref'];?>
"><i class="fa fa-pencil text-warning"></i></a>
												<a href="index.php?gestion=produit&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['Lignes']->value['ref'];?>
"><i class="fa fa-close text-danger"></i></a> -->
											</td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['Lignes'] = $__foreach_Lignes_0_saved_local_item;
}
if ($__foreach_Lignes_0_saved_item) {
$_smarty_tpl->tpl_vars['Lignes'] = $__foreach_Lignes_0_saved_item;
}
?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>










<?php }
}
