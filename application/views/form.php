<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2><?= $header_title; ?></h2>

			<form method="POST" action="<?= ($edit_mode)? base_url()."project/update/".$id:base_url()."project/add" ?>">
			<div class="form-group">
				<label for="projectName">Project name</label>
				<input value="<?= ($edit_mode)? $project['project_name']:''; ?>" type="text" class="form-control" name="project_name" id="projectName"  placeholder="">
			</div>
			<div class="form-group">
				<label for="projectAuthor">Project author</label>
				<input value="<?= ($edit_mode)? $project['project_author']:''; ?>" type="text" class="form-control" name="project_author" id="projectAuthor" placeholder="">
			</div>
			<div class="form-group">
				<label for="projectType">Project type</label>
				<select  name="project_type" class="form-control" id="projectType">
					<?php foreach($types as $type): ?>
						<option <?= ($edit_mode && $project['project_type'] == $type)? 'selected':''; ?> value="<?= $type ?>"><?= $type ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="projectStatus">Project status</label>
				<select name="project_status" class="form-control" id="projectStatus">
					<?php foreach($statuses as $status): ?>
						<option <?= ($edit_mode && $project['project_status'] == $status)? 'selected':''; ?> value="<?= $status ?>"><?= $status ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="projectDescription">Description</label>
				<textarea name="project_description" class="form-control" id="projectDescription" ><?= ($edit_mode)? $project['project_description']:''; ?>
				</textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btb btn-primary" id="submitBtn" value="Submit">
			</div>
		</form>
		</div>
	</div>
</div>
