<div class="modal fade" id="selectcontacts">
    <div class="modal-dialog modal-lg" role="document">
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

                        <div class="form-row pb-3 selectframes">
                            <div class="col-12">
                                <a href="https://www.w3schools.com" target="iframe_a">All</a>
                                <a href="https://www.w3schools.com" target="iframe_a">A</a>
                                <a href="https://codepen.io/brenzy/pen/zxMZmO?editors=1010" target="iframe_a">B</a>
                                <a href="#" target="iframe_a">C</a>
                                <a href="#" target="iframe_a">D</a>
                                <a href="#" target="iframe_a">E</a>
                                <a href="#" target="iframe_a">F</a>
                                <a href="#" target="iframe_a">G</a>
                                <a href="#" target="iframe_a">H</a>
                                <a href="#" target="iframe_a">I</a>
                                <a href="#" target="iframe_a">J</a>
                                <a href="#" target="iframe_a">K</a>
                                <a href="#" target="iframe_a">L</a>
                                <a href="#" target="iframe_a">M</a>
                                <a href="#" target="iframe_a">N</a>
                                <a href="#" target="iframe_a">O</a>
                                <a href="#" target="iframe_a">P</a>
                                <a href="#" target="iframe_a">Q</a>
                                <a href="#" target="iframe_a">R</a>
                                <a href="#" target="iframe_a">S</a>
                                <a href="#" target="iframe_a">T</a>
                                <a href="#" target="iframe_a">U</a>
                                <a href="#" target="iframe_a">V</a>
                                <a href="#" target="iframe_a">W</a>
                                <a href="#" target="iframe_a">X</a>
                                <a href="#" target="iframe_a">Y</a>
                                <a href="#" target="iframe_a">Z</a>
                            </div>
                        </div>

                        <div class="form-row frames_outer">
                            <div class="col-5">
                                <span>Contacts to select from</span>
                                <div class="table-responsive mb-3 fo-table table-h mt-2">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tb-h">Name</th>
                                                <th scope="col" class="tb-h">Company</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">demo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">This is a description part</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-wrap justify-content-start my-3 my-sm-0">
                                    <div class="form-group mb-0 mr-3">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="align-items-center d-flex my-3 my-sm-0">
                                        <div class="fo-pagination">
                                            <a href="#" class="mr-2"><i class="ti-angle-left"></i></a>
                                            <span>1 to 10</span>
                                            <a href="#" class="ml-2"><i class="ti-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 align-items-center d-flex flex-wrap my-5">
                                <a class="btn btn-secondary w-100" href="#" role="button">> </a>
                                <a class="btn btn-secondary w-100" href="#" role="button">
                                    < </a> <a class="btn btn-secondary w-100" href="#" role="button">>>
                                </a>
                                <a class="btn btn-secondary w-100" href="#" role="button">
                                    << </a> 
                            </div> 
                            <div class="col-5">
                                <span> Selected contacts</span>
                                <div class="table-responsive mb-3 fo-table table-h mt-2">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tb-h">Name</th>
                                                <th scope="col" class="tb-h">Company</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">demo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">This is a description part</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-wrap justify-content-start my-3 my-sm-0">
                                    <div class="form-group mb-0 mr-3">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="align-items-center d-flex my-3 my-sm-0">
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
                    <div class="form-row py-4">
                        <div class="col">
                            <button type="button" class="btn fo-btn-primary">New Contact</button>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn fo-btn-primary mr-4">Save</button>
                            <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <!-- <div class="modal-footer pb-4 pt-0 pt-4">
                        <button type="button" class="btn fo-btn-primary">Save</button>
                        <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>