 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
 			{$fil}
 			<small>Gestionnaire</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Fil d'ariane</a></li>
 			<li class="active">{$fil}</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<!-- Info boxes -->
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-xs-12">
 					<div class="box">
 						<div class="box-header">
 							<h3 class="box-title">{$fil}</h3>

 							<div class="box-tools">
 								<div class="input-group input-group-sm" style="width: 150px;">
 									<form method="POST">
 										
 										<select>
 											<option value="5">5</option>
 											<option value="10">10</option>
 											<option value="15">15</option>
 											<option value="20">20</option>
 										</select>
 										<button type="submit" class="btn btn-success" name="nbAafficher">Afficher</button>
 									</form>

 									<!-- <div class="input-group-btn">
 										<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
 									</div> -->
 								</div>
 							</div>
 						</div>
 						<!-- /.box-header -->
 						<div class="box-body table-responsive no-padding">
 							<table class="table table-hover">
 								<tr>
 									<th>ID</th>
 									<th>Nom</th>
 									<th>Description</th>
 									<th>Activity</th>
 									<th>Action</th>
 								</tr>
 								{foreach from=$pagination item=Groups}
 								<tr>
 									<td>{$Groups.group_id}</td>
 									<td>{$Groups.group_name}</td>
 									<td>{$Groups.group_description}</td>
 									<td>{$Groups.group_activity}</td>
 									<td>
 										<a href="index.php?gestion=groups&action=detailsG&id={$Groups.group_id}"><i class="fa fa-folder text-infos"></i></a>
 										<a href="index.php?gestion=groups&action=edit&id={$Groups.group_id}"><i class="fa fa-pencil text-warning"></i></a>
 										<a href="index.php?gestion=groups&action=delete&id={$Groups.group_id}"><i class="fa fa-close text-danger"></i></a>
 									</td>

 									{/foreach}

 									

 								</table>
 								<table>
 									<div class="box-footer clearfix">
 										<ul class="pagination pagination-sm no-margin pull-right">
 											{foreach from=$numero item=num}
 											<li><a class="btn btn-success" role="button" href="index.php?gestion=groups&action=listGroups&page={$num}">{$num}</a></li>
 											{/foreach}
 										</ul>
 									</div>

 								</table>
 							</div>
 							<!-- /.box-body -->
 						</div>
 						<!-- /.box -->
 					</div>
 				</div>
 			</div>

 		</section>
 		<!-- /.content -->
 	</div>