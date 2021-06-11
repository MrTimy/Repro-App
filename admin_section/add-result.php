<?php include("./navigations/header.php") ?>
<?php include("./navigations/nav.php") ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="tables.html#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Add Results</li>
    </ol>
    <!-- Example DataTables Card-->
    <form action="">
      <div class="card mb-3">
        <div class="card-header">
          <!-- <h6>Add Result for Student One</h6> -->
          <div class="row">
            <div class="col-2">
              <label for="" class="pt-2">
                <i class="fa fa-users"></i> Select Pupil
              </label>
            </div>
            <div class="col-4">
              <select name="" id="" class="form-control">
                <option value="12">Pupil One</option>
              </select>
              <!-- <select name="" id="" class="form-control">
                        <option value="english">English</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="computer">Computer Science</option>
                        <option value="agric">Agricultural Science</option>
                        <option value="social"> Social Studies</option>
                        <option value="Quantitative">Quantitative Reasoning </option>
                        <option value="spelling">Spelling</option>
                        <option value="econs">Home Economics</option>
                        <option value="arts">Creative Arts</option>
                        <option value="health">Health Education</option>
                        <option value="civic">Civic</option>

                    </select> -->
            </div>
            <div class="col-3">
              <select name="" id="" class="form-control">
                <option value="">Select Term</option>
                <option value="1">First Term</option>
              </select>
            </div>
            <div class="col-3">
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
          </div>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Subjects</th>
                  <th>CA score</th>
                  <th>Exam Score</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Subjects</th>
                  <th>CA score</th>
                  <th>Exam Score</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>1</td>
                  <!-- <td>2016/REP/23</td> -->
                  <td>English Language</td>
                  <td>
                    <input type="number" class="form-control">
                  </td>
                  <td>
                    <input type="number" class="form-control">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </form>

    <!-- /tables-->
  </div>
  <!-- /container-fluid-->
</div>


<?php include("./navigations/footer.php") ?>