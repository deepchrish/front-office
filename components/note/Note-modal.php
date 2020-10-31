<div class="modal fade" id="addnote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
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
                            <input type="time" class="form-control addtime" id="addtime" placeholder="Time">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="Attachfile">Attachment</label>
                            <input type="file" class="form-control" id="Attachfile" placeholder="contact">
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
                </div>

                <div class="modal-footer pb-4 pt-0">
                    <button type="button" class="btn fo-btn-primary">Save</button>
                    <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>