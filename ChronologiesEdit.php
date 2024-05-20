<?php include 'header.php';?>



<div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Chronologies Edit</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i data-feather="home"></i></a>
            </li>
            <!-- <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item">Basic Form</li> -->
          </ul>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Chronologies Edit</h4>
                  </div>
                  <div class="card-body">
                
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
                  <div class="card-footer text-right">
                      <div class="row">
                          <div class="col-md-1">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
                </div>
                    <!-- <button class="btn btn-secondary" type="reset">Close</button> -->
                  </div>
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
      </div>
    
    </div>
  </div>
                              

<?php include 'footer.php';?>