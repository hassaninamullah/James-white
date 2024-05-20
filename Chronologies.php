<?php include 'header.php';?>



<style>
  div#save-stage_filter {
    float: right;
  }

  div#save-stage_paginate {
    float: right;
  }

  .modal-backdrop.show {
    opacity: -0.5 !important;
    display: none !important;
  }
</style>


<div id="app">
  <div class="main-wrapper main-wrapper-1">

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <ul class="breadcrumb breadcrumb-style ">
          <li class="breadcrumb-item">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add
              Chronologies</button>

          </li>
          <!-- <li class="breadcrumb-item">
              <a href="index.php">
                <i data-feather="home"></i></a>
            </li> -->




          <!-- <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item">Data Tables</li> -->
        </ul>

        <div class="section-body">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Chronologies</h4>
                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                      <thead>
                        <tr>
                          <th>S. No.</th>
                          <th>Event</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Place</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Lorem Ipsum</td>
                          <td>10/10/20</td>
                          <td>10/10/21</td>
                          <td>Lorem Ipsum</td>

                          <td>
                            <div class="row">
                              <div class="col-md-2">
                                <p><a href="Holidaysedit.php">

                                    <i class="fa fa-edit" style="color:lightgreen" data-toggle="modal"
                                      data-target="#myModal"></i></a></p>
                              </div>
                              <div class="col-md-2">
                                  <p><a href="Chronologiesview.php"><i class="fa fa-eye" style="color:#0da8ee"></i></a></p>
                                </div>
                              <div class="col-md-2">
                                <p><i class="fa fa-trash" style="color:red"></i></p>
                              </div>

                            </div>
                          </td>
                          <!-- <td><a href="Edit.php">Edit</a></td> -->

                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- modal -->



  </div>
</div>

<!-- modal  -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chronologies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
          <div class="form-group">
            <label>From :</label>
            <input type="date" class="form-control">
          </div>
         
          <div class="form-group">
            <label>To :</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <label>Place :</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Description :</label>
            <textarea class="form-control"></textarea>
          </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>




</html>


<?php include 'footer.php';?>