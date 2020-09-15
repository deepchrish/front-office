<div class="modal fade" id="selectcontacts">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Contacts</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="content-display mb-3">
                        <h6 class="pb-2">Select from:</h6>
                        <div class="form-row pt-2">
                            <div class="form-group col-12">
                                <!-- <label for="regarding">Regarding</label> -->
                                <select class="form-control" id="allcontacts" style="height: 36px;width: 100%;">
                                    <option value="#">All Contacts</option>
                                    <option value="#">Current Lookup</option>
                                    <option value="#">Groups</option>
                                    <option value="#">Companies</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <!-- <label for="regarding">Regarding</label> -->
                                <select class="form-control" id="allcontacts" style="height: 36px;width: 100%;">
                                    <option value="#">Select</option>
                                    <option value="#">Current Lookup</option>
                                    <option value="#">Groups</option>
                                    <option value="#">Companies</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="content-display">
                        <h6 class="pb-2">Look for:</h6>
                        <div class="form-row">
                            <div class="form-group col-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="look" aria-label="look"
                                        aria-describedby="basic-addon1" name="look" style="height: 36px;width: 100%;">
                                </div>
                            </div>

                            <div class="form-group col-3">
                                <a class="btn btn-secondary w-100" href="#" role="button">
                                    Search
                                </a>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="contact_now" name="contactsGroup"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="contact_now">Contact</label>
                                </div>
                            </div>
                            <div class="form-group col-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="company" name="contactsGroup" class="custom-control-input">
                                    <label class="custom-control-label" for="company">Company</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>