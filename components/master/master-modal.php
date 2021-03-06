<div class="modal fade" id="master-module">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Schedule Activity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="message-show">
                <!--  <p class="daily-everyday">Occurs every <span id="day_Val"> </span> <span class="day_hide">day</span>.</p>
                <p class="daily-weekday">Occurs every weekday.</p> -->
                <!-- <p class="weekly-everyday">Occurs every<span id="monVal"></span></p> -->
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab"
                            aria-controls="general" aria-selected="true">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab"
                            aria-controls="details" aria-selected="false">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="recurrence-tab" data-toggle="tab" href="#recurrence" role="tab"
                            aria-controls="recurrence" aria-selected="false">Recurrence</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- General tab START -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <form>
                            <div class="form-row pt-2">
                                <div class="form-group col-12">
                                    <label for="activity_type">Activity Type</label>
                                    <select class="form-control" id="activity_type" style="height: 36px;width: 100%;">
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
                                    <input type="date" class="form-control datepicker" id="startdate"
                                        placeholder="Date">
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
                                    <input type="time" class="form-control addtime" id="endtime" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="duration">Duration</label>
                                    <select class="form-control" id="duration" style="height: 36px;width: 100%;">
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
                                <div class="form-group col-10">
                                    <label for="schedule">Schedule With</label>
                                    <select class="select2 form-control" multiple="multiple" id="schedule"
                                        style="height: 36px;width: 100%;">
                                        <option value="ONE">Test One</option>
                                        <option value="TWO">Test Two</option>
                                        <option value="THREE">Test Three</option>
                                    </select>
                                </div>
                                <div class="align-items-end col-2 d-flex form-group w-100">
                                    <div class="dropdown w-100">
                                        <button class="btn btn-secondary dropdown-toggle w-100" type="button"
                                            id="contacts" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Contacts
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="contacts">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#selectcontacts">Select Contacts</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#newcontact">New Contact</a>
                                            <a class="dropdown-item" href="#">My Record</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="send_email">
                                        <label class="custom-control-label" for="send_email">Send activity e-mail to
                                            contacts</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-10">
                                    <label for="associate">Associate with</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="associate" aria-label="associate"
                                            aria-describedby="basic-addon1" name="associate_with"
                                            style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                                <div class="form-group col-2 align-items-end d-flex">
                                    <a class="btn btn-secondary w-100" href="#" role="button">......</a>
                                    <!-- <button type="button" class="btn btn-secondary btn-sm"><a href="#">......</a></button> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="regarding">Regarding</label>
                                    <select class="form-control" id="regarding" style="height: 36px;width: 100%;">
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
                                    <select class="form-control" id="resources" style="height: 36px;width: 100%;">
                                        <option value="ONE">Test One</option>
                                        <option value="TWO">Test Two</option>
                                        <option value="THREE">Test Three</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="location">Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="location" aria-label="location"
                                            aria-describedby="basic-addon1" name="location"
                                            style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="priority">Priority</label>
                                    <select class="form-control" id="priority" style="height: 36px;width: 100%;">
                                        <option value="HH">High</option>
                                        <option value="MM">Medium</option>
                                        <option value="LW">Low</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <div class="form-group">
                                        <label for="hue-demo">Color</label>
                                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue"
                                            value="#ff6161">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-10">
                                    <label for="ring_alarm">Ring Alarm</label>
                                    <select class="form-control" id="ring_alarm" style="height: 36px;width: 100%;">
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
                                <div class="form-group col-2 align-items-end d-flex">
                                    <!-- <button type="button" class="btn btn-secondary btn-sm"><a href="#">Schedule For</a></button> -->
                                    <a class="btn btn-secondary w-100" href="#" data-toggle="modal"
                                        data-target="#schedulefor" role="button">Schedule For</a>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="activity_contact">
                                        <label class="custom-control-label" for="activity_contact">Create separate
                                            activity for each contact</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- General tab END -->

                    <!-- Details tab START -->
                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <form>
                            <div class="form-row pt-2">
                                <div class="form-group col-12">
                                    <label for="Attachmentfile">Attachment</label>
                                    <input type="file" class="form-control" id="Attachmentfile" placeholder="contact">
                                    <!-- <small id="contact" class="form-text text-danger">We'll never share your email with anyone
                                          else.</small> -->
                                </div>
                            </div>
                            <div class="form-row pt-2">
                                <div class="form-group col-12 pb-4 mb-0">
                                    <div class="fo-editor">
                                        <label for="details_info">Details:</label>
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
                    <!-- Details tab END -->

                    <!-- Recurrence tab Start -->
                    <div class="tab-pane fade" id="recurrence" role="tabpanel" aria-labelledby="recurrence-tab">
                        <form>
                            <h6 class="pt-2 pb-2">Occurs:</h6>
                            <div class="form-row">
                                <div
                                    class="form-group col-12 d-flex flex-wrap justify-content-center justify-content-sm-between">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="once" name="occurs" class="custom-control-input"
                                            checked="checked">
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
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="once">
                                                <p>This activity occurs only once.</p>
                                            </div>

                                            <div class="daily">
                                                <div class="form-row pt-3">
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="every" name="dailyRBGroup"
                                                                class="custom-control-input" checked="checked">
                                                            <label class="custom-control-label"
                                                                for="every">Every</label>
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
                                                        <span>days</span>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-12">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="every_weekday" name="dailyRBGroup"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="every_weekday">Every
                                                                Weekday</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="weekly">
                                                <div class="form-row pt-3">
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
                                                        <span>weeks on</span>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="monday" value="Monday">
                                                            <label class="custom-control-label"
                                                                for="monday">Monday</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="tuesday" value="Tuesday">
                                                            <label class="custom-control-label"
                                                                for="tuesday">Tuesday</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="wednesday" value="Wednesday">
                                                            <label class="custom-control-label"
                                                                for="wednesday">Wednesday</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="thursday" value="Thursday">
                                                            <label class="custom-control-label"
                                                                for="thursday">Thursday</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="thursday" value="Thursday">
                                                            <label class="custom-control-label"
                                                                for="thursday">Thursday</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="friday" value="Friday">
                                                            <label class="custom-control-label"
                                                                for="friday">Friday</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="saturday" value="Saturday">
                                                            <label class="custom-control-label"
                                                                for="saturday">Saturday</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="sunday" value="Sunday">
                                                            <label class="custom-control-label"
                                                                for="sunday">Sunday</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="monthly pt-3">
                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <label for="every_monthson">Every</label>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <select class="form-control" id="every_monthson"
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
                                                        <span>months on</span>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="ddNumberedDays" name="monthly_days"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="ddNumberedDays">The</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="ddNumberedDays_num">
                                                            <option value="1">1st</option>
                                                            <option value="2">2nd</option>
                                                            <option value="3">3rd</option>
                                                            <option value="4">4th</option>
                                                            <option value="5">5th</option>
                                                            <option value="6">6th</option>
                                                            <option value="7">7th</option>
                                                            <option value="8">8th</option>
                                                            <option value="9">9th</option>
                                                            <option value="10">10th</option>
                                                            <option value="11">11th</option>
                                                            <option value="12">12th</option>
                                                            <option value="13">13th</option>
                                                            <option value="14">14th</option>
                                                            <option value="15">15th</option>
                                                            <option value="16">16th</option>
                                                            <option value="17">17th</option>
                                                            <option value="18">18th</option>
                                                            <option value="19">19th</option>
                                                            <option value="20">20th</option>
                                                            <option value="21">21st</option>
                                                            <option value="22">22nd</option>
                                                            <option value="23">23rd</option>
                                                            <option value="24">24th</option>
                                                            <option value="25">25th</option>
                                                            <option value="26">26th</option>
                                                            <option value="27">27th</option>
                                                            <option value="28">28th</option>
                                                            <option value="29">29th</option>
                                                            <option value="30">30th</option>
                                                            <option value="31">31st</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="ddModifierday" name="monthly_days"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="ddModifierday">The</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="ddModifierday_value"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="first">First</option>
                                                            <option value="second">Second</option>
                                                            <option value="third">Third</option>
                                                            <option value="fourth">Fourth</option>
                                                            <option value="last">Last</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="ddTypedDays"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="monday">Monday</option>
                                                            <option value="tuesday">Tuesday</option>
                                                            <option value="wednesday">Wednesday</option>
                                                            <option value="thursday">Thursday</option>
                                                            <option value="friday">Friday</option>
                                                            <option value="saturday">Saturday</option>
                                                            <option value="sunday">Sunday</option>
                                                            <option value="day">Day</option>
                                                            <option value="weekday">Weekday</option>
                                                            <option value="weekend_day">Weekend Day</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yearly pt-3">
                                                <div class="form-row">
                                                    <div class="form-group col-2 ">
                                                        <label for="every_year">Every</label>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <select class="form-control" id="every_year"
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
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-3 d-flex align-items-center">
                                                        <p>years</p>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="ddYearModifier" name="yearlyRBGroup"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="ddYearModifier">on</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="months"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="january">January</option>
                                                            <option value="february">February</option>
                                                            <option value="march">March</option>
                                                            <option value="april">April</option>
                                                            <option value="may">May</option>
                                                            <option value="june">June</option>
                                                            <option value="july">July</option>
                                                            <option value="august">August</option>
                                                            <option value="september">September</option>
                                                            <option value="october">October</option>
                                                            <option value="november">November</option>
                                                            <option value="december">December</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="ddnumbereddaysmonthly"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="1">1st</option>
                                                            <option value="2">2nd</option>
                                                            <option value="3">3rd</option>
                                                            <option value="4">4th</option>
                                                            <option value="5">5th</option>
                                                            <option value="6">6th</option>
                                                            <option value="7">7th</option>
                                                            <option value="8">8th</option>
                                                            <option value="9">9th</option>
                                                            <option value="10">10th</option>
                                                            <option value="11">11th</option>
                                                            <option value="12">12th</option>
                                                            <option value="13">13th</option>
                                                            <option value="14">14th</option>
                                                            <option value="15">15th</option>
                                                            <option value="16">16th</option>
                                                            <option value="17">17th</option>
                                                            <option value="18">18th</option>
                                                            <option value="19">19th</option>
                                                            <option value="20">20th</option>
                                                            <option value="21">21st</option>
                                                            <option value="22">22nd</option>
                                                            <option value="23">23rd</option>
                                                            <option value="24">24th</option>
                                                            <option value="25">25th</option>
                                                            <option value="26">26th</option>
                                                            <option value="27">27th</option>
                                                            <option value="28">28th</option>
                                                            <option value="29">29th</option>
                                                            <option value="30">30th</option>
                                                            <option value="31">31st</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="ddYearModifierSecond"
                                                                name="yearlyRBGroup" class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="ddYearModifierSecond">on the</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="yearNum"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="first">First</option>
                                                            <option value="second">Second</option>
                                                            <option value="third">Third</option>
                                                            <option value="fourth">Fourth</option>
                                                            <option value="last">Last</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="ddTypedYearlyDays"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="monday">Monday</option>
                                                            <option value="tuesday">Tuesday</option>
                                                            <option value="wednesday">Wednesday</option>
                                                            <option value="thursday">Thursday</option>
                                                            <option value="friday">Friday</option>
                                                            <option value="saturday">Saturday</option>
                                                            <option value="sunday">Sunday</option>
                                                            <option value="day">Day</option>
                                                            <option value="weekday">Weekday</option>
                                                            <option value="weekend_day">Weekend Day</option>
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="form-group col-1 d-flex align-items-center justify-content-center">
                                                        <span>of</span>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <select class="form-control" id="yearlymonths"
                                                            style="height: 36px;width: 100%;">
                                                            <option value="january">January</option>
                                                            <option value="february">February</option>
                                                            <option value="march">March</option>
                                                            <option value="april">April</option>
                                                            <option value="may">May</option>
                                                            <option value="june">June</option>
                                                            <option value="july">July</option>
                                                            <option value="august">August</option>
                                                            <option value="september">September</option>
                                                            <option value="october">October</option>
                                                            <option value="november">November</option>
                                                            <option value="december">December</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <input type="radio" id="noend_date" name="recurEndGroup"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="noend_date">No end date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row pb-2">
                                    <div class="form-group col-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ends" name="recurEndGroup"
                                                class="custom-control-input">
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
                    <!-- Recurrence tab end-->
                </div>
                <div class="modal-footer pb-4 pt-0 pt-4">
                    <button type="button" class="btn fo-btn-primary">Save</button>
                    <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('sub-modules/schedulefor-modal.php'); ?>
<?php include('sub-modules/selectcontacts-modal.php'); ?>
<?php include('sub-modules/newcontact-modal.php'); ?>