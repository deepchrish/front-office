<?php include('header.php'); ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-8 col-lg-5 d-flex no-block align-items-center">
            <h4 class="page-title">Contacts</h4>
            <div class="ml-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">

                    </ol>
                </nav>
            </div>
        </div>
        <div class="text-right col-4 col-lg-7 d-flex align-items-center justify-content-end py-3 py-lg-0">
            <!-- <a class="btn fo-btn-primary" href="create-contact.php"><i class="mdi mdi-plus"></i>Create contact</a> -->
            <div class="d-none d-lg-inline-block">
                <ul class="mb-0 fo-shortcut">
                    <li><a href="#"><i class="mdi mdi-checkbox-marked-outline"></i><span>To-Do</span></a></li>
                    <li><a href="#"><i class="mdi mdi-phone"></i><span>Call</span></a></li>
                    <li><a href="#"><i class="mdi mdi-calendar-blank"></i><span>Meeting</span></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#addnote"><i
                                class="mdi mdi-pencil-box-outline"></i><span>Note</span></a></li>
                    <li><a href="#"><i class="mdi mdi-history"></i><span>History</span></a></li>
                    <li><a href="#"><i class="mdi mdi-email-outline"></i><span>E-Mail</span></a></li>
                </ul>
            </div>
            <div class="btn-group ml-2">
                <a href="create-contact.php" class="btn fo-btn-primary px-2">
                    <i class="mdi mdi-plus"></i> New
                </a>
                <button type="button"
                    class="btn fo-btn-primary dropdown-toggle dropdown-toggle-split border-left pt-2 px-2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="ti-angle-down"></span>
                </button>
                <div class="fo-dropdown dropdown-menu">
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="#">Group</a>
                    <a class="dropdown-item" href="#">Company</a>
                    <a class="dropdown-item" href="#">Opportunity</a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addcall">Call</a>
                    <a class="dropdown-item" href="#">Meeting</a>
                    <a class="dropdown-item" href="#">To-Do</a>
                    <a class="dropdown-item" href="#">Other</a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addnote">Note</a>
                    <a class="dropdown-item" href="#">History</a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item disabled" href="#">Subgroup</a>
                    <a class="dropdown-item disabled" href="#">Division</a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="#">Document</a>
                    <a class="dropdown-item" href="#">E-mail message</a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="#">Letter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid my-lg-4 mt-0">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-12 col-sm-12 col-md-3 col-lg-2 col-form-label">Filter by</label>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-4 px-md-0">
                        <select class="form-control">
                            <option>My Contacts</option>
                            <option>New Last Week</option>
                            <option>New This Week</option>
                            <option>Recently Created Contacts</option>
                            <option>Recentli Modified Contacts</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-6 mb-3 mb-md-0">
            <div class="d-flex justify-content-end fo-cont-action-btn">
                <div class="px-3"><a href="#"><i class="ti-printer mr-2"></i>Print</a></div>
                <div class="px-3"><a href="#"><i class="ti-import mr-2"></i>Import</a></div>
                <div class="pl-3 dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="ti-settings mr-2"></i>Customize<i
                            class="ml-1 ti-angle-down"></i>
                    </a>
                    <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Customize Columns</a>
                        <a class="dropdown-item" href="#">Edit Properties</a>
                        <a class="dropdown-item" href="#">Restore Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive fo-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th><label class="customcheckbox mb-3">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label></th>
                            <th scope="col">Contact Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Title</th>
                            <th scope="col">Business Type</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Fax</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Last Activity Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="search" class="form-control" placeholder="Search">
                            </td>
                            <td>
                                <input type="date" class="form-control" placeholder="Search">
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Accounts</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2019</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>Sharon Vinson</td>
                            <td>Vinson's Quick Tax</td>
                            <td>Owner</td>
                            <td>Tax</td>
                            <td>919-9875420</td>
                            <td>919-9875420</td>
                            <td>Mar 5, 2019</td>
                            <td>Mar 5, 2018</td>
                            <td>
                                <div class="fo-tbl-action d-flex justify-content-between">
                                    <a class="fo-btn-edit px-2" title="Edit" href="#"><i class="ti-pencil"></i></a>
                                    <a class="fo-btn-del px-2" title="Delete" href="#" data-toggle="modal"
                                        data-target="#deletecontact"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="ml-1 ti-more-alt"></i>
                                        </a>
                                        <div class="fo-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Customize Columns</a>
                                            <a class="dropdown-item" href="#">Edit Properties</a>
                                            <a class="dropdown-item" href="#">Restore Contacts</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-4 col-md-4 col-lg-6 font-14">Total Contacts: 10</div>
        <div class="col-sm-8 col-md-8 col-lg-6">
            <div class="d-flex justify-content-center flex-wrap justify-content-sm-end align-items-center my-3 my-sm-0">
                <div class="form-group mb-0 mr-3">
                    <select class="form-control">
                        <option>10 records per page</option>
                        <option>20 records per page</option>
                        <option>50 records per page</option>
                        <option>100 records per page</option>
                        <option>250 records per page</option>
                    </select>
                </div>
                <div class="my-3 my-sm-0">
                    <div class="fo-pagination">
                        <a href="#" class="mr-2"><i class="ti-angle-left"></i></a>
                        <span>1 to 10</span>
                        <a href="#" class="ml-2"><i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->
<!-- Delete Action Modal START-->
<div class="modal fade" id="deletecontact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">How would you like to delete "Sharon Vinson"?</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="custom-control custom-radio my-3">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                        select="selected">
                    <label class="custom-control-label" for="customRadio1">Delete this contact with the ability to
                        recover from recycle bin within 30 days</label>
                </div>
                <div class="custom-control custom-radio my-3">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Delete this contact and all its associated
                        contacts permanently</label>
                </div>
            </div>
            <div class="modal-footer pb-4 pt-0">
                <button type="button" class="btn fo-btn-primary">Save</button>
                <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Action Modal END-->
<!-- Notes Modal START-->
<div class="modal fade" id="addnote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="contact">Contact</label>
                            <select class="select2 form-control" multiple="multiple" id="contact"
                                style="height: 36px;width: 100%;">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                            <!-- <small id="contact" class="form-text text-danger">We'll never share your email with anyone
                                else.</small> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="adddate">Date</label>
                            <input type="date" class="form-control" id="adddate" placeholder="Date">
                        </div>
                        <div class="form-group col">
                            <label for="addtime">Time</label>
                            <input type="time" class="form-control" id="addtime" placeholder="Time">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="Attachfile">Attachment</label>
                            <input type="file" class="form-control" id="group" placeholder="contact">
                            <!-- <small id="contact" class="form-text text-danger">We'll never share your email with anyone
                                else.</small> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 mb-0">
                            <div class="fo-editor">
                                <label class="">Details:</label>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 200px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pb-4 pt-0">
                <button type="button" class="btn fo-btn-primary">Save</button>
                <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Notes Modal END-->

<!-- Call Modal START-->
<div class="modal fade" id="addcall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Call</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="recurrence-tab" data-toggle="tab" href="#recurrence" role="tab" aria-controls="recurrence" aria-selected="false">Recurrence</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <form>
                            <div class="form-row pt-2">
                                <div class="form-group col-12">
                                    <label for="activity_type">Activity Type</label>
                                    <select class="form-control" id="activity_type"
                                      style="height: 36px;width: 100%;">
                                        <option value="CL">Call</option>
                                        <option value="MG">Meeting</option>
                                        <option value="TD">To-do</option>
                                        <option value="AT">Appointment</option>
                                        <option value="PA">Personal Activity</option>
                                        <option value="VN">Vacation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="startdate">Start Date</label>
                                    <input type="date" class="form-control" id="startdate" placeholder="Date">
                                </div>
                                <div class="form-group col">
                                    <label for="enddate">End Date</label>
                                    <input type="date" class="form-control" id="enddate" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="starttime">Start Time</label>
                                    <input type="time" class="form-control" id="starttime" placeholder="Time">
                                </div>
                                <div class="form-group col">
                                    <label for="endtime">End Time</label>
                                    <input type="time" class="form-control" id="endtime" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="duration">Duration</label>
                                    <select class="form-control" id="duration"
                                      style="height: 36px;width: 100%;">
                                        <option value="0">0 Minutes</option>
                                        <option value="5">5 Minutes</option>
                                        <option value="10">10 Minutes</option>
                                        <option value="15">15 Minutes</option>
                                        <option value="30">30 Minutes</option>
                                        <option value="45">45 Minutes</option>
                                        <option value="1">1 Hour</option>
                                        <option value="2">2 Hours</option>
                                        <option value="3">3 Hours</option>
                                        <option value="8">8 Hours</option>
                                        <option value="1">1 Day</option>
                                        <option value="5">5 Days</option>
                                        <option value="30">30 Days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usebanner">
                                        <label class="custom-control-label" for="usebanner">Use Banner</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-9">
                                    <label for="schedule">Schedule With</label>
                                    <select class="select2 form-control" multiple="multiple" id="schedule"
                                        style="height: 36px;width: 100%;">
                                        <option value="ONE">Test One</option>
                                        <option value="TWO">Test Two</option>
                                        <option value="THREE">Test Three</option>
                                    </select>
                                </div>
                                <div class="align-items-end col-3 d-flex form-group">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="contacts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Contacts
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="contacts">
                                        <a class="dropdown-item" href="#">Select Contacts</a>
                                        <a class="dropdown-item" href="#">New Contact</a>
                                        <a class="dropdown-item" href="#">My Record</a>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="send_email">
                                        <label class="custom-control-label" for="send_email">Send activity e-mail to contacts</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-10">
                                    <label for="associate">Associate with</label>
                                    <div class="input-group">
                                      <input type="text" class="form-control" aria-label="associate" aria-describedby="basic-addon1"  name="associate_with" style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                                <div class="form-group col-2 align-items-end d-flex">
                                    <a class="btn btn-secondary" href="#" role="button">......</a>
                                    <!-- <button type="button" class="btn btn-secondary btn-sm"><a href="#">......</a></button> -->
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="regarding">Regarding</label>
                                    <select class="form-control" id="regarding"
                                      style="height: 36px;width: 100%;">
                                        <option value="#">Ask for the order</option>
                                        <option value="BM">Breakfast Meeting</option>
                                        <option value="CC">Cold Call</option>
                                        <option value="CN">Contract Negotiations</option>
                                        <option value="DN">Demonstration</option>
                                        <option value="DM">Dinner Meeting</option>
                                        <option value="FM">First Meeting</option>
                                        <option value="FD">Follow-up on Delivery</option>
                                        <option value="FP">Follow-up on Presentation</option>
                                        <option value="IN">Introduction</option>
                                        <option value="LM">Lunch Meeting</option>
                                        <option value="PN">Presentation</option>
                                        <option value="SC">Sales Call</option>
                                        <option value="SP">Show New Products</option>
                                        <option value="SM">Staff Meeting</option>
                                        <option value="TS">Trade Show</option>
                                        <option value="VN">Vacation</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="resources">Resources</label>
                                    <select class="form-control" id="resources"
                                      style="height: 36px;width: 100%;">
                                        <option value="ONE">Test One</option>
                                        <option value="TWO">Test Two</option>
                                        <option value="THREE">Test Three</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="location">Location</label>
                                    <div class="input-group">
                                      <input type="text" class="form-control" aria-label="location" aria-describedby="basic-addon1"  name="location" style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="priority">Priority</label>
                                    <select class="form-control" id="priority"
                                      style="height: 36px;width: 100%;">
                                        <option value="HH">High</option>
                                        <option value="MM">Medium</option>
                                        <option value="LW">Low</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <div class="form-group">
                                        <label for="hue-demo">Color</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                                    </div>                              
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-8">
                                    <label for="ring_alarm">Ring Alarm</label>
                                    <select class="form-control" id="ring_alarm"
                                      style="height: 36px;width: 100%;">
                                        <option value="0">0 Minutes</option>
                                        <option value="5">5 Minutes</option>
                                        <option value="10">10 Minutes</option>
                                        <option value="15">15 Minutes</option>
                                        <option value="30">30 Minutes</option>
                                        <option value="45">45 Minutes</option>
                                        <option value="1">1 Hour</option>
                                        <option value="2">2 Hours</option>
                                        <option value="3">3 Hours</option>
                                        <option value="8">8 Hours</option>
                                        <option value="1">1 Day</option>
                                        <option value="5">5 Days</option>
                                        <option value="30">30 Days</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 align-items-end d-flex">
                                   <!-- <button type="button" class="btn btn-secondary btn-sm"><a href="#">Schedule For</a></button> -->
                                   <a class="btn btn-secondary" href="#" role="button">Schedule For</a>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="activity_contact">
                                        <label class="custom-control-label" for="activity_contact">Create separate activity for each contact</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <form>
                            <div class="form-row pt-2">
                                <div class="form-group col-12">
                                    <label for="Attachmentfile">Attachment</label>
                                    <input type="file" class="form-control" id="group" placeholder="contact">
                                    <!-- <small id="contact" class="form-text text-danger">We'll never share your email with anyone
                                          else.</small> -->
                                </div>
                            </div>
                            <div class="form-row pt-2">
                                <div class="form-group col-12 pb-4 mb-0">
                                    <div class="fo-editor">
                                        <label class="">Details:</label>
                                        <!-- Create the editor container -->
                                        <div id="attch_editor" style="height: 200px;">
                                            <p>Hello World!</p>
                                            <p>Some initial <strong>bold</strong> text</p>
                                            <p>
                                            <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="recurrence" role="tabpanel" aria-labelledby="recurrence-tab">
                        <form>
                            <h6 class="pt-2 pb-2">Occurs:</h6>
                            <div class="form-row">
                                <div class="form-group col-12 d-flex flex-wrap justify-content-center justify-content-sm-between">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="once" name="occurs" class="custom-control-input" checked="checked">
                                        <label class="custom-control-label" for="once">Once</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="daily" name="occurs" class="custom-control-input">
                                        <label class="custom-control-label" for="daily">Daily</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="weekly" name="occurs" class="custom-control-input">
                                        <label class="custom-control-label" for="weekly">Weekly</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="monthly" name="occurs" class="custom-control-input">
                                        <label class="custom-control-label" for="monthly">Monthly</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="yearly" name="occurs" class="custom-control-input">
                                        <label class="custom-control-label" for="yearly">Yearly</label>
                                    </div>  
                                </div>

                                <div class="content-display">
                                    <div class="col-12">
                                        <div class="once">
                                            <p>This activity occurs only once.</p>
                                        </div>

                                        <div class="daily">
                                            <div class="form-row pb-2">
                                                <div class="form-group col-2">
                                                   <div class="custom-control custom-radio">
                                                       <input type="radio" id="every" name="every" class="custom-control-input">
                                                       <label class="custom-control-label" for="every">Every</label>
                                                   </div>
                                                </div>
                                                <div class="form-group col-2">
                                                    <select class="form-control" id="days"
                                                        style="height: 36px;width: 100%;">
                                                       <option value="1">1</option>
                                                       <option value="2">2</option>
                                                       <option value="3">3</option>
                                                       <option value="4">4</option>
                                                       <option value="5">5</option>
                                                       <option value="6">6</option>
                                                       <option value="7">7</option>
                                                       <option value="8">8</option>
                                                       <option value="9">9</option>
                                                       <option value="10">10</option>
                                                       <option value="11">11</option>
                                                       <option value="12">12</option>
                                                       <option value="13">13</option>
                                                       <option value="14">14</option>
                                                       <option value="15">15</option>
                                                       <option value="16">16</option>
                                                       <option value="17">17</option>
                                                       <option value="18">18</option>
                                                       <option value="19">19</option>
                                                       <option value="20">20</option>
                                                       <option value="21">21</option>
                                                       <option value="22">22</option>
                                                       <option value="23">23</option>
                                                       <option value="24">24</option>
                                                       <option value="25">25</option>
                                                       <option value="26">26</option>
                                                       <option value="27">27</option>
                                                       <option value="28">28</option>
                                                       <option value="29">29</option>
                                                       <option value="30">30</option>
                                                       <option value="31">31</option>

                                                    </select>
                                                </div>
                                                <div class="form-group col-2">
                                                    <p>days</p>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                   <div class="custom-control custom-radio">
                                                       <input type="radio" id="every_weekday" name="every_weekday" class="custom-control-input">
                                                       <label class="custom-control-label" for="every_weekday">Every Weekday</label>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="weekly">
                                            <div class="form-row pb-2">
                                                <div class="form-group col-2">
                                                    <label for="every_weeks">Every</label>
                                                </div>
                                                <div class="form-group col-2">
                                                    <select class="form-control" id="every_weekson"
                                                        style="height: 36px;width: 100%;">
                                                       <option value="1">1</option>
                                                       <option value="2">2</option>
                                                       <option value="3">3</option>
                                                       <option value="4">4</option>
                                                       <option value="5">5</option>
                                                       <option value="6">6</option>
                                                       <option value="7">7</option>
                                                       <option value="8">8</option>
                                                       <option value="9">9</option>
                                                       <option value="10">10</option>
                                                       <option value="11">11</option>
                                                       <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-3">
                                                    <p>weeks on</p>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="monday">
                                                        <label class="custom-control-label" for="monday">Monday</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="tuesday">
                                                        <label class="custom-control-label" for="tuesday">Tuesday</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="wednesday">
                                                        <label class="custom-control-label" for="wednesday">Wednesday</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="thursday">
                                                        <label class="custom-control-label" for="thursday">Thursday</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="friday">
                                                        <label class="custom-control-label" for="friday">Friday</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="saturday">
                                                        <label class="custom-control-label" for="saturday">Saturday</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="sunday">
                                                        <label class="custom-control-label" for="sunday">Sunday</label>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="monthly">
                                            <p>Monthly content</p>
                                        </div>
                                        <div class="yearly">
                                            <p>Yearly content</p>
                                        </div>
                                    </div>

                                   

                                </div>
                            </div>

                            <h6 class="pt-4 pb-2">Range:</h6>
                            <div class="content-display">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="starts">Starts</label>
                                        <input type="date" class="form-control" id="starts" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="noend_date" name="noend_date" class="custom-control-input">
                                            <label class="custom-control-label" for="noend_date">No end date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row pb-2">
                                    <div class="form-group col-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ends" name="ends" class="custom-control-input">
                                            <label class="custom-control-label" for="ends">Ends</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-10">
                                        <input type="date" class="form-control" id="end_Date" placeholder="Date">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
            </div>
            <div class="modal-footer pb-4 pt-0 pt-4">
                <button type="button" class="btn fo-btn-primary">Save</button>
                <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Call Modal END-->
<?php include('footer.php'); ?>