<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>List of All Projects</h2>
			<div>
				<a href="<?= base_url().'project/add-new-form'?>" style="margin-bottom: 10px;" class='btn btn-primary btn-lg'>
					<i>Add new</i>
				</a>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">Project Name</th>
				<th scope="col">Project Author</th>
				<th scope="col">Type</th>
				<th scope="col">Status</th>
				<th scope="col">Description</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ( $projects as $project): ?>
			<tr>
				<th scope="row">
					<a href="<?= base_url().'project/edit-form/'.$project['_id'] ?>" class='btn btn-sm'>
						<i class="material-icons">mode_edit</i>
					</a>
					<button class='btn btn-sm' data-toggle="modal" data-target="#confirmDelete">
						<i style="color: red;" class="material-icons">delete</i>
					</button>

					<!-- Modal -->
					<div id="confirmDelete" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Confirm Delete</h4>
								</div>
								<div class="modal-body">
									<p>Are you sure you want to delete this item?</p>
								</div>
								<div class="modal-footer">
									<form method="DELETE" action="<?= base_url()."project/delete/".$project['_id'] ?>">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<input type="submit" class="btn btn-danger">
									</form>
								</div>
							</div>

						</div>
					</div>
				</th>
				<td><?=$project['project_name'];?></td>
				<td><?=$project['project_author'];?></td>
				<td><?=$project['project_type'];?></td>
				<td><?=$project['project_status'];?></td>
				<td><?=$project['project_description'];?></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
