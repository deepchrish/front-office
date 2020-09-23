<?php include('header.php'); ?>
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb contact-breadcrumb py-4">
    <div class="row">
        <div class="col-6 d-flex no-block align-items-center">
            <h4 class="page-title">Contact List</h4>
            <div class="ml-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Contact List</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid pt-0">
    <div class="row">
        <div class="col-2 tab-bar pt-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-activities-tab" data-toggle="pill" href="#v-pills-activities"
                    role="tab" aria-controls="v-pills-activities" aria-selected="true">Actvities</a>
                <a class="nav-link" id="v-pills-opportunities-tab" data-toggle="pill" href="#v-pills-opportunities"
                    role="tab" aria-controls="v-pills-opportunities" aria-selected="false">Opportunities</a>
                <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab"
                    aria-controls="v-pills-history" aria-selected="false">History</a>
                <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab"
                    aria-controls="v-pills-notes" aria-selected="false">Notes</a>
                <a class="nav-link" id="v-pills-documents-tab" data-toggle="pill" href="#v-pills-documents" role="tab"
                    aria-controls="v-pills-documents" aria-selected="false">Documents</a>
                <a class="nav-link" id="v-pills-companies-tab" data-toggle="pill" href="#v-pills-companies" role="tab"
                    aria-controls="v-pills-companies" aria-selected="false">Groups/Companies</a>
                <a class="nav-link" id="v-pills-secondary-contacts-tab" data-toggle="pill" href="#v-pills-secondary-contacts" role="tab"
                    aria-controls="v-pills-secondary-contacts" aria-selected="false">Secondary Contacts</a>
                <a class="nav-link" id="v-pills-relationships-tab" data-toggle="pill" href="#v-pills-relationships" role="tab"
                    aria-controls="v-pills-relationships" aria-selected="false">Relationships</a> 
                <a class="nav-link" id="v-pills-webinfo-tab" data-toggle="pill" href="#v-pills-webinfo" role="tab"
                    aria-controls="v-pills-webinfo" aria-selected="false">Web Info</a> 
                <a class="nav-link" id="v-pills-personalinfo-tab" data-toggle="pill" href="#v-pills-personalinfo" role="tab"
                    aria-controls="v-pills-personalinfo" aria-selected="false">Personal Info</a>   
                <a class="nav-link" id="v-pills-contact-access-tab" data-toggle="pill" href="#v-pills-contact-access" role="tab"
                    aria-controls="v-pills-contact-access" aria-selected="false">Contact Access</a> 
                <a class="nav-link" id="v-pills-user-fields-tab" data-toggle="pill" href="#v-pills-user-fields" role="tab"
                    aria-controls="v-pills-user-fields" aria-selected="false">User Fields</a>  
                <a class="nav-link" id="v-pills-compaignresults-tab" data-toggle="pill" href="#v-pills-compaignresults" role="tab"
                    aria-controls="v-pills-compaignresults" aria-selected="false">Compaign Results</a> 
                <a class="nav-link" id="v-pills-marketingautomation-tab" data-toggle="pill" href="#v-pills-marketingautomation" role="tab"
                    aria-controls="v-pills-marketingautomation" aria-selected="false">Marketing Automation</a>   
                <a class="nav-link" id="v-pills-timeline-tab" data-toggle="pill" href="#v-pills-timeline" role="tab"
                    aria-controls="v-pills-timeline" aria-selected="false">Timeline</a>
            </div>
        </div>
        <div class="col-10 pt-3">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-activities" role="tabpanel"
                    aria-labelledby="v-pills-activities-tab">
                    <div class="contact-header pt-4">
                        <div class="form-row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="dates">Dates</label>
                                    <select class="form-control" id="dates" style="height: 40px;width: 100%;">
                                        <option value="#">All Dates</option>
                                        <option value="#">Today</option>
                                        <option value="#">Past</option>
                                        <option value="#">Future</option>
                                        <option value="#">Today and Future</option>
                                        <option value="#">Tomorrow</option>
                                        <option value="#">Last 7 Days</option>
                                        <option value="#">Last 30 Days</option>
                                        <option value="#">Last 90 Days</option>
                                        <option value="#">Last Week</option>
                                        <option value="#">Last Month</option>
                                        <option value="#">Current Week</option>
                                        <option value="#">Current Month</option>
                                        <option value="#">Next Week</option>
                                        <option value="#">Next Month</option>
                                        <option value="#">Custom</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="types">Types</label>
                                    <select class="select2 form-control" multiple="multiple" id="types"
                                        style="height: 36px;width: 100%;">
                                        <option value="#">Call</option>
                                        <option value="#">Meeting</option>
                                        <option value="#">To-do</option>
                                        <option value="#">Appointment</option>
                                        <option value="#">Personal Activity</option>
                                        <option value="#">Vacation</option>
                                        <option value="#">None</option>
                                    </select>   
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="priorities">Priorities</label>
                                    <select class="select2 form-control" multiple="multiple" id="priorities"
                                        style="height: 36px;width: 100%;">
                                        <option value="#">High</option>
                                        <option value="#">Medium</option>
                                        <option value="#">Low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="keyword" aria-label="keyword"
                                            aria-describedby="basic-addon1" name="keyword"
                                            style="height: 40px;width: 100%;">
                                    </div>
                                </div>
                            </div>

                        </div>

                        

                        <div class="form-row">
                            <div class="col-2 align-items-end d-flex">
                                <div class="form-group">
                                    <a class="btn btn-custom" href="#" data-toggle="modal"
                                        data-target="#selectusers" role="button"><i class="mdi mdi-account mr-1"></i>
                                        Select Users
                                    </a>
                                </div>
                            </div>

                            <div class="col-3 align-items-center d-flex">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" id="show_private">
                                        <label class="custom-control-label" for="show_private">Show Private</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="show_cleared">
                                        <label class="custom-control-label" for="show_cleared">Show Cleared</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <a class="btn  btn-custom" href="#" data-toggle="modal"
                                        data-target="#selectusers" role="button"><i class="fas fa-phone-volume mr-2"></i>Follow up
                                    </a>
                                </div>
                            </div>

                            <div class="col-5 align-items-center d-flex justify-content-end">
                                <div class="form-group">
                                    <a  class="custom-icon" href="" data-toggle="modal" data-target="#selectusers"><i class="fas fa-search icon-s m-2"></i></a>
                                    <a class="custom-icon" href="" data-toggle="modal" data-target="#selectusers"><i class="fas fa-columns icon-s m-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="table-responsive fo-table contact-list-tb">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><i class="fas fa-angle-down icon-s"></i></th>
                                            <th scope="col"><i class="fas fa-angle-up icon-s"></i></th>
                                            <th scope="col">Type</th>
                                            <th scope="col"><i class="mdi mdi-refresh icon-s"></i></th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Prioirity</th>
                                            <th scope="col">Schedule With</th>
                                            <th scope="col">Regarding</th>
                                            <th scope="col"><i class="fas fa-info-circle mr-2 icon-s"></i></th>
                                            <th scope="col">Scheduled By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-opportunities" role="tabpanel" aria-labelledby="v-pills-opportunities-tab">Oppotunities</div>
                <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">History</div>
                <div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">Notes</div>
                <div class="tab-pane fade" id="v-pills-documents" role="tabpanel" aria-labelledby="v-pills-documents-tab">Documents</div>
                <div class="tab-pane fade" id="v-pills-companies" role="tabpanel" aria-labelledby="v-pills-companies-tab">Companies</div>
                <div class="tab-pane fade" id="v-pills-secondary-contacts" role="tabpanel" aria-labelledby="v-pills-secondary-contacts-tab">Secondary Contacts</div>
                <div class="tab-pane fade" id="v-pills-relationships" role="tabpanel" aria-labelledby="v-pills-relationships-tab">Relationships</div>
                <div class="tab-pane fade" id="v-pills-webinfo" role="tabpanel" aria-labelledby="v-pills-webinfo-tab">WebInfo</div>
                <div class="tab-pane fade" id="v-pills-personalinfo" role="tabpanel" aria-labelledby="v-pills-personalinfo-tab">Personal Info</div>
                <div class="tab-pane fade" id="v-pills-contact-access" role="tabpanel" aria-labelledby="v-pills-contact-access-tab">Contact Access</div>
                <div class="tab-pane fade" id="v-pills-user-fields" role="tabpanel" aria-labelledby="v-pills-user-fields-tab">User fields</div>
                <div class="tab-pane fade" id="v-pills-compaignresults" role="tabpanel" aria-labelledby="v-pills-compaignresults-tab">Compaign Results</div>
                <div class="tab-pane fade" id="v-pills-marketingautomation" role="tabpanel" aria-labelledby="v-pills-marketingautomation-tab">Marketing Automation</div>
                <div class="tab-pane fade" id="v-pills-timeline" role="tabpanel" aria-labelledby="v-pills-timeline-tab">Timeline</div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Container fluid  -->
<?php include('footer.php'); ?>