<div class="modal fade" id="addhistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Record History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="activityTypeComboBox">Type</label>
                            <select class="form-control" id="activityTypeComboBox" style="height: 36px; width: 100%;">
                                <option value="0" selected="selected">Call</option>
                                <option value="1">Meeting</option>
                                <option value="2">To-do</option>
                                <option value="3">Appointment</option>
                                <option value="4">Personal Activity</option>
                                <option value="5">Vacation</option>
                                <option value="6">Other</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="typeComboBox">Result</label>
                            <select class="form-control" id="typeComboBox" style="height: 36px;width: 100%;">
                                <option selected="selected" value="0">Call Attempted</option>
                                <option value="1">Call Completed</option>
                                <option value="2">Call Left Message</option>
                                <option value="3">Call Received</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-10">
                            <label for="contactPicker1">Contact</label>
                            <select class="form-control" id="contactPicker1" style="height: 36px;width: 100%;">
                                <option value="0" selected="selected">User@gmail.com</option>
                            </select>
                        </div>
                        <div class="form-group col-2 align-items-end d-flex">
                            <a class="btn btn-secondary w-100" href="#" data-toggle="modal" data-target="#linktocompany"
                                role="button">Contacts</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="historydate">Date</label>
                            <input type="date" class="form-control" id="historydate" placeholder="Date">
                        </div>

                        <div class="form-group col-4">
                            <label for="historytime">Time</label>
                            <input type="time" class="form-control" id="historytime" placeholder="Time">
                        </div>

                        <div class="form-group col-4">
                            <label for="history_duration">Duration</label>
                            <select class="form-control" id="history_duration" style="height: 36px;width: 100%;">
                                <option value="0">0 minutes</option>
                                <option value="5">5 minutes</option>
                                <option value="10">10 minutes</option>
                                <option value="15">15 minutes</option>
                                <option value="30">30 minutes</option>
                                <option value="45">45 minutes</option>
                                <option value="60">1 hour</option>
                                <option value="90">1 hour 30 minutes</option>
                                <option value="2 hours">2 hours</option>
                                <option value="2 hours 30 minutes">2 hours 30 minutes</option>
                                <option value="3 hours">3 hours</option>
                                <option value="3 hours 30 minutes">3 hours 30 minutes</option>
                                <option value="4 Hours">4 Hours</option>
                                <option value="4 hours 30 minutes">4 hours 30 minutes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="Attachfile">Attachment</label>
                            <input type="file" class="form-control" id="Attachfile" placeholder="contact">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-10">
                            <label for="sharewith">Share with</label>
                            <input type="text" class="form-control" id="sharewith" aria-label="sharewith"
                                aria-describedby="basic-addon1" name="sharewith" style="height: 36px;width: 100%;" ->
                        </div>
                        <div class="form-group col-2 align-items-end d-flex">
                            <a class="btn btn-secondary w-100" href="#" data-toggle="modal" data-target="#linktocompany"
                                role="button">...</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="record_manager">Record Manager</label>
                            <select class="form-control" id="record_manager" style="height: 36px;width: 100%;">
                                <option value="user@gmail.com">User@gmail.com</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label for="history_regarding">Regarding</label>
                            <select class="form-control" id="history_regarding" style="height: 36px;width: 100%;">
                                <option value="CN">Check in</option>
                                <option value="CL">Cold Call</option>
                                <option value="CT">Confirm Appointment</option>
                                <option value="CS">Confirm Shipment</option>
                                <option value="DS">Discuss Legal Points</option>
                                <option value="FP">Follow-up</option>
                                <option value="GR">Get the order</option>
                                <option value="GE">Give Quote</option>
                                <option value="IN">Initial Communication</option>
                                <option value="NT">Needs Assessment</option>
                                <option value="RG">Request Updated Catalog</option>
                                <option value="RS">Request Updated Prices</option>
                                <option value="RL">Returning Call</option>
                                <option value="SG">Schedule a Meeting</option>
                                <option value="SN">Schedule Presentation</option>
                                <option value="TU">Thank You</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 mb-0">
                            <div class="fo-editor">
                                <label class="">Details:</label>
                                <!-- Create the editor container -->
                                <div id="history-editor" style="height: 200px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer pb-4 pt-0">
                    <button type="button" class="btn fo-btn-primary">Save</button>
                    <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>