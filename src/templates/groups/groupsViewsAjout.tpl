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
									<input class="form-control" id="exampleInputPassword1" type="number" name="quantite" value="0" >
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
									<input class="form-control" id="exampleInputPassword1" type="number" name="prixunitaire" value="0" >
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


							{if $success eq '1'}
							<div class='alert alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<strong>Attention !</strong>  Vous n'avez pas ajouté de désignation
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







