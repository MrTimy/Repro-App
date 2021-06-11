<?php include("./navigations/header.php") ?>
<?php include("./navigations/nav.php") ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="user-profile.html#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">UPDATE</li>
    </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>Profile details</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Your photo</label>
            <form action="http://ansonika.com/file-upload" class="dropzone"></form>
          </div>
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Your name">
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
            <div class="col-md-6">
              <div class="form-group">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" placeholder="dateOfBirth">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Class</label>
                <input type="text" class="form-control" placeholder="Specify Class">
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Home Address</label>
                <textarea style="height:100px;" class="form-control" placeholder="Personal info"></textarea>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
    </div>
    <!-- /box_general-->
    <div class="row">
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-lock"></i>Change password</h2>
          </div>
          <div class="form-group">
            <label>Old password</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>New password</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>Confirm new password</label>
            <input class="form-control" type="password">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-envelope"></i>Change email</h2>
          </div>
          <div class="form-group">
            <label>Old email</label>
            <input class="form-control" name="old_email" id="old_email" type="email">
          </div>
          <div class="form-group">
            <label>New email</label>
            <input class="form-control" name="new_email" id="new_email" type="email">
          </div>
          <div class="form-group">
            <label>Confirm new email</label>
            <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
          </div>
        </div>
      </div>
    </div>
    <!-- /row-->
    <p><a href="index.html" class="btn_1 small">
    <i class="fa fa-fw fa-cloud-upload"></i>UPLOAD</a></p>
  </div>
  <!-- /.container-fluid-->
</div>
<?php include("./navigations/footer.php") ?>