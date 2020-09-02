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
                    <a class="dropdown-item" href="#">Call</a>
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
<?php include('footer.php'); ?>