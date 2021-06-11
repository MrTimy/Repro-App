<?php include("./navigations/header.php") ?>
<?php include("./navigations/nav.php") ?>


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="tables.html#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">Pupils Personal Information</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-responsive" id="dataTable">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Phone No.</th>
                <th>Date of Birth</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Unique Id</th>
                <th>Parent Email</th>
                <th>State</th>
                <th>Registration Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>S/N</th>
                <th>Full Name</th>
                <th>Phone No.</th>
                <th>Date of Birth</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Unique Id</th>
                <th>Parent Email</th>
                <th>State</th>
                <th>Registration Date</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>1</td>
                <td>Tiger Nixon</td>
                <td>08104410083</td>
                <td>21/04/1995</td>
                <td>Primary 1</td>
                <td>Male</td>
                <td>29th street, Edinburgh</td>
                <td>2016/REP/23</td>
                <td>firegood@gmail.com</td>
                <td>Ohia</td>
                <td>21/02/2021</td>
                <td>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="d-block text-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v fa-2x"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="add-result.php">Add Result</a>
                      <a class="dropdown-item" href="view_result.php">View Result</a>
                      <a class="dropdown-item" href="#">Edit Student Info</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <!-- /tables-->
  </div>
  <!-- /container-fluid-->
</div>


<?php include("./navigations/footer.php") ?>