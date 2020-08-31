<?php include('header.php'); ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 d-flex no-block align-items-center">
            <h4 class="page-title">Contacts</h4>
            <div class="ml-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Import</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-6 text-right">
            <!-- <a class="btn fo-btn-primary" href="create-contact.php"><i class="mdi mdi-plus"></i>Create contact</a> -->
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid my-4">
    <h4 class="text-center pt-4 pb-2">What would you like to import?</h4>
    <div class="row justify-content-center text-center">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-3">
            <div class="fo-card">
                <img src="images/ffs.png" alt="Files from system">
                <h5 class="my-3">Files from system</h5>
                <span>Drag and drop your files here</span>
                <span>or</span>
                <div class="my-4">
                    <label for="exampleFormControlFile1" class="fo-btn-primary">Browse</label>
                    <input type="file" class="d-none form-control-file" id="exampleFormControlFile1">
                </div>
                <p>Upload any CSV, XLS or XLSX file with upto 5000 records at a time.</p>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-3">
            <div class="fo-card">
                <img src="images/crm.jpg" alt="Files from system">
                <h5 class="my-3">Files from other CRM's</h5>
                <span>Which CRM are you importing data from?</span>
                <div class="my-4 px-4">
                    <select class="form-control form-control-sm">
                    <option>Select</option>
                    </select>
                </div>
                <p>Importing data from other CRM's is just a click away. Choose a CRM from which you would like to import.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->
<?php include('footer.php'); ?>