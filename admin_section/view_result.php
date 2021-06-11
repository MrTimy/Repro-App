<?php include("./navigations/header.php") ?>
<?php include("./navigations/nav.php") ?>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="user-profile.html#">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">View Result</li>
		</ol>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="form-group">
						<label>Year</label>
						<select name="" id="" class="form-control">
							<?php
							$year_today = date('Y');
							$min_year = 2000; // The year here should be the reg yr of pupil
							for ($count = $min_year; $count <= $year_today; $count++) {
								echo ("
								<option value='$count'>$count</option>
								");
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Term</label>
						<select name="" id="" class="form-control">
							<option value="12">1st</option>
							<option value="12">2nd</option>
							<option value="12">3rd</option>
						</select>
					</div>
					<p class="text-center">
						<a href="preview_result.php" class="btn_1 medium">PROCEED</a>
					</p>

				</div>
			</div>

		</div>
		<!-- /row-->

	</div>
	<!-- /.container-fluid-->
</div>
<?php include("./navigations/footer.php") ?>