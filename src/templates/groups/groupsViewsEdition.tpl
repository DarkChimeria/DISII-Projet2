	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<h2>{$title}</h2>
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
									<input class="form-control" type="text" name="designation" value="{$design}" required> 
									<span id="result"></span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Quantité
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="quantite" value="{$qt}" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Descriptif
									</label>

									{if $descri eq 'G'}
									<div class="bs-docs-example">
										<select class="form-control" name="descriptif" id="select01">
											<option value="G" selected>Grammes</option>
											<option value="P">Poids Pièce</option>
										</select>
									</div>
									{else}
									<div class="bs-docs-example">
										<select class="form-control" name="descriptif" id="select01">
											<option value="G">Grammes</option>
											<option value="P" selected>Poids Pièce</option>
										</select>
									</div>
									{/if}

									
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Prix Unitaire HT
									</label>
									<input class="form-control" id="exampleInputPassword1" type="number" name="prixunitaire" value="{$pu}" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Stock
									</label>
									<input class="form-control" id="stock" type="number" name="stock" value="{$stock}" >
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">
										Poids Pièce
									</label>
									<input class="form-control" type="number" name="piece" value="{$pp}" min="1" id="select02" disabled>
								</div>
								<button type="submit" class="btn btn-warning" name="update">Modifier</button>
							</form>
							<br>
							<a href="index.php" class="btn btn-default"><i class="fa fa-backward "></i>
								Retourner à la liste des produits
							</a>

						</div>
						<div class="col-md-6">

							{if $success eq '1'}
							<div class='alert alert-success'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Super !</strong>  Le produit a bien été Modifié
							</div>
							{elseif $success eq '2'}
							<div class='alert alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez rien modifié
							</div>
							{elseif $success eq '3'}
							<div class='alert alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez rien modifié
							</div>
							{else}
							{/if}
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>










