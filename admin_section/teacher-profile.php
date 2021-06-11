<?php include("./navigations/header.php") ?>
<?php include("./navigations/nav.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="teacher-profile.html#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Teacher Profile</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Basic info</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Your name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Last name</label>
						<input type="text" class="form-control" placeholder="Your last name">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" class="form-control" placeholder="Your telephone number">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Your email">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Profile picture</label>
						<form action="http://ansonika.com/file-upload" class="dropzone" ></form>
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-share-alt"></i>Social profiles</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Facebook</label>
						<input type="text" class="form-control" placeholder="Link">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Linkdin</label>
						<input type="text" class="form-control" placeholder="Link">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Google Plus</label>
						<input type="text" class="form-control" placeholder="Link">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Twitter</label>
						<input type="text" class="form-control" placeholder="Link">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file-text"></i>Curriculum</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Professional statement</label>
						<textarea rows="5" class="form-control" style="height:100px;" placeholder="Description"></textarea>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Specialization <a href="teacher-profile.html#0" data-toggle="tooltip" data-placement="top" title="Separated by commas"><i class="fa fa-fw fa-question-circle"></i></a></label>
						<input type="text" class="form-control" placeholder="Ex: Biologist, Pediatrician...">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-folder"></i>Courses</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h6>Course item</h6>
					<table id="pricing-list-container" style="width:100%;">
						<tr class="pricing-list-item">
							<td>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Title">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" class="form-control"  placeholder="Category">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Price">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<a class="delete" href="teacher-profile.html#"><i class="fa fa-fw fa-remove"></i></a>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<a href="teacher-profile.html#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
					</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		<p><a href="teacher-profile.html#0" class="btn_1 medium">Save</a></p>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
     <?php include("./navigations/footer.php") ?>