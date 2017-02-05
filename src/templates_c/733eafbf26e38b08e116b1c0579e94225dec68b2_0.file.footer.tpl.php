<?php
/* Smarty version 3.1.29, created on 2017-02-03 15:39:15
  from "C:\Wamp64\www\gourmandise\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5894a423b6e859_51557422',
  'file_dependency' => 
  array (
    '733eafbf26e38b08e116b1c0579e94225dec68b2' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\templates\\footer.tpl',
      1 => 1486136352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5894a423b6e859_51557422 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="index.php">Brand</a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="index.php">Liste des produits</a>
			</li>
			<li>
				<a href="index.php?gestion=commande">Liste des commandes</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produits<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="index.php?gestion=produit&action=add">Ajouter</a>
					</li>
					<li>
						<a href="#">Another action</a>
					</li>
					<li>
						<a href="#">Something else here</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">Separated link</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">One more separated link</a>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Commandes<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="index.php?gestion=commande&action=add">Ajouter</a>
					</li>
					<li>
						<a href="#">Another action</a>
					</li>
					<li>
						<a href="#">Something else here</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">Separated link</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">One more separated link</a>
					</li>
				</ul>
			</li>
		</ul>

		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input class="form-control" type="text">
			</div> 
			<button type="submit" class="btn btn-default">
				Submit
			</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">Link</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Action</a>
					</li>
					<li>
						<a href="#">Another action</a>
					</li>
					<li>
						<a href="#">Something else here</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">Separated link</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
</div>
</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
		document.getElementById('select01').onchange = function () {
		document.getElementById("select02").disabled = this.value == 'G';
		document.getElementById("select02").value = "0";
	}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	function validateForm()
	{
		var stock=document.forms["Form"]["stock"].value;
		if (stock==null || stock=="" || stock=="0")
		{
			alert("Attention ! Le stock ne peut être nul");
			return false;
		}
	}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="templates/bootstrap/js/bootbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
