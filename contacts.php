<?php include('header.php'); ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 d-flex no-block align-items-center">
            <h4 class="page-title">Contacts</h4>
            <div class="ml-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">

                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-6 text-right">
            <a class="btn fo-btn-primary" href="create-contact.php"><i class="mdi mdi-plus"></i>Create contact</a>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid my-4">
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
                    <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-settings mr-2"></i>Customize<i class="ml-1 ti-angle-down"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
                                    <a class="fo-btn-del px-2" title="Delete" href="#"><i class="ti-trash"></i></a>
                                    <div class="dropdown px-2">
                                        <a class="fo-btn-more" title="More options" class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ml-1 ti-more-alt"></i>
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
<?php include('footer.php'); ?>