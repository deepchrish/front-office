<?php include('header.php'); ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 d-flex no-block align-items-center">
            <h4 class="page-title">Contacts</h4>
            <div class="ml-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Create Contact</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid">
    <h5 class="my-3">Create Contact</h5>
    <form class="mt-2">
        <div class="fo-form form-row">
            <!-- Contact Name -->
            <div class="form-group col-md-3 py-2">
                <label for="inputEmail4">Contact Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Enter">
            </div>
            <!-- Contact Name -->

            <!-- Company -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Company</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- Company -->

            <!-- Title -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Title</label>
                <select class="form-control" placeholder="Select">
                    <option>Select</option>
                </select>
            </div>
            <!-- Title -->

            <!-- Business Type -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Business Type</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- Business Type -->

            <!-- Phone No. -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Phone No.</label>
                <input type="tel" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- Phone No. -->

            <!-- Mobile No. -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Mobile No.</label>
                <input type="tel" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- Mobile No. -->

            <!-- FAX -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">FAX</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- FAX -->

            <!-- Email -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Email</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- Email -->

            <!-- DOB -->
            <div class="form-group col-md-3 py-2">
                <label for="dob">DOB</label>
                <div class="input-group">
                    <input type="text" class="form-control mydatepicker" placeholder="MM dd">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>              
            <!-- DOB -->

            <!-- Address -->
            <div class="form-group col-md-12 py-2">
                <label for="inputPassword4">Address</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>
            <!-- Address -->

            <!-- Country -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">Country</label>
                <select class="form-control" placeholder="Select">
                    <option>Select</option>
                </select>
            </div>
            <!-- Country -->

            <!-- State -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">State</label>
                <select class="form-control" placeholder="Select">
                    <option>Select</option>
                </select>
            </div>
            <!-- State -->

            <!-- City -->
            <div class="form-group col-md-3 py-2">
                <label for="city">City</label>
                <input type="city" class="form-control" id="city" placeholder="City">
            </div>
            <!-- City -->

            <!-- ZIP -->
            <div class="form-group col-md-3 py-2">
                <label for="inputPassword4">ZIP</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter">
            </div>
            <!-- ZIP -->
            
            
        </div>
        <!-- Save Button -->
        <button type="submit" class="btn fo-btn-primary">Save</button>
        <!-- Save Button -->
    </form>
</div>
<!-- End Container fluid  -->
<?php include('footer.php'); ?>