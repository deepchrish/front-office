<div class="modal fade" id="newcontact" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Contact</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="company">Company</label>
                        </div>
                        <div class="form-group col-7">
                            <div class="input-group">
                                <input type="text" id="company" class="form-control" aria-label="company"
                                    aria-describedby="basic-addon1" name="company" style="height: 36px;width: 100%;">
                            </div>
                        </div>
                        <div class="form-group col-2">
                            <a class="btn btn-secondary w-100" href="#" data-toggle="modal" data-target="#linktocompany"
                                role="button">...</a>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="contact">Contact</label>
                        </div>
                        <div class="form-group col-7">
                            <div class="input-group">
                                <input type="text" class="form-control" id="contact" aria-label="contact"
                                    aria-describedby="basic-addon1" name="contact" style="height: 36px;width: 100%;">
                            </div>
                        </div>
                        <div class="form-group col-2">
                            <a class="btn btn-secondary w-100" href="#" data-toggle="modal" data-target="#contactname"
                                role="button">...</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="company_role">Title</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="form-control" id="company_role" style="height: 36px;width: 100%;">
                                <option value="Account Manager">Account Manager</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Administrative Assistant">Administrative Assistant</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Analyst">Analyst</option>
                                <option value="Assistant">Assistant</option>
                                <option value="Buyer">Buyer</option>
                                <option value="CEO">CEO</option>
                                <option value="Chairman">Chairman</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Controller">Controller</option>
                                <option value="Customer Service Representative">Customer Service Representative
                                </option>
                                <option value="Director">Director</option>
                                <option value="District Manager">District Manager</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Executive Vice President">Executive Vice President</option>
                                <option value="General Manager">General Manager</option>
                                <option value="Lawyer">Lawyer</option>
                                <option value="Manager">Manager</option>
                                <option value="Marketing Manager">Marketing Manager</option>
                                <option value="Network Administrator">Network Administrator</option>
                                <option value="Office Manager">Office Manager</option>
                                <option value="Owner">Owner</option>
                                <option value="Partner">Partner</option>
                                <option value="President">President</option>
                                <option value="Product Manager">Product Manager</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Purchasing Agent">Purchasing Agent</option>
                                <option value="Purchasing Manager">Purchasing Manager</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Recruiter">Recruiter</option>
                                <option value="Regional Manager">Regional Manager</option>
                                <option value="Sales Manager">Sales Manager</option>
                                <option value="Sales Representative">Sales Representative</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Technician">Technician</option>
                                <option value="Vice President">Vice President</option>
                                <option value="Vice President of Sales">Vice President of Sales</option>
                                <option value="Webmaster">Webmaster</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="form-group col-7">
                            <div class="input-group">
                                <input type="text" class="form-control" id="phone" aria-label="phone"
                                    aria-describedby="basic-addon1" name="phone" style="height: 36px;width: 100%;">
                            </div>
                        </div>
                        <div class="form-group col-2">
                            <a class="btn btn-secondary w-100" href="#" data-toggle="modal" data-target="#phoneformat"
                                role="button">...</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="ext">Ext</label>
                        </div>
                        <div class="form-group col-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="ext" aria-label="ext"
                                    aria-describedby="basic-addon1" name="ext" style="height: 36px;width: 100%;">
                            </div>
                        </div>
                    </div>
                    <!-- two tabs inside new contact modal -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="phoneemail-tab" data-toggle="tab" href="#phone_email"
                                role="tab" aria-controls="phone_email" aria-selected="true">Phone/E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab"
                                aria-controls="business" aria-selected="false">Business Address</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- PhoneEmail tab start-->
                        <div class="tab-pane fade show active" id="phone_email" role="tabpanel"
                            aria-labelledby="phoneemail-tab">
                            <div class="form-row pt-4">
                                <div class="form-group col-3">
                                    <label for="mobile">Mobile</label>
                                </div>
                                <div class="form-group col-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="mobile" aria-label="mobile"
                                            aria-describedby="basic-addon1" name="mobile"
                                            style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                                <div class="form-group col-2">
                                    <a class="btn btn-secondary w-100" href="#" data-toggle="modal"
                                        data-target="#phoneformat" role="button">...</a>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="fax">Fax</label>
                                </div>
                                <div class="form-group col-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fax" aria-label="fax"
                                            aria-describedby="basic-addon1" name="fax"
                                            style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                                <div class="form-group col-2">
                                    <a class="btn btn-secondary w-100" href="#" data-toggle="modal"
                                        data-target="#phoneformat" role="button">...</a>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="email">E-mail</label>
                                </div>
                                <div class="form-group col-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="email" aria-label="email"
                                            aria-describedby="basic-addon1" name="email"
                                            style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="website">Website</label>
                                </div>
                                <div class="form-group col-9">
                                    <div class="input-group">
                                        <input type="url" class="form-control" id="website" aria-label="website"
                                            pattern="https://.*" size="30" aria-describedby="basic-addon1"
                                            name="website" style="height: 36px;width: 100%;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="IDStatus">ID/Status</label>
                                </div>
                                <div class="form-group col-9">
                                    <select class="select2 form-control" multiple="multiple" id="IDStatus"
                                        style="height: 36px;width: 100%;">
                                        <option value="BA">Business Associate</option>
                                        <option value="CL">Cold Lead</option>
                                        <option value="CR">Compeititor</option>
                                        <option value="CT">Consultant</option>
                                        <option value="CR">Contractor</option>
                                        <option value="CW">Co-Worker</option>
                                        <option value="CR">Customer</option>
                                        <option value="DM">Decision Maker</option>
                                        <option value="DR">Distributor</option>
                                        <option value="EE">Employee</option>
                                        <option value="FY">Family</option>
                                        <option value="FD">Friend</option>
                                        <option value="GK">Gate Keeper</option>
                                        <option value="HL">Hot Lead</option>
                                        <option value="IR">Influencer</option>
                                        <option value="IR">Investor</option>
                                        <option value="KC">Key Customer</option>
                                        <option value="LD">Lead</option>
                                        <option value="MR">Manufacturer</option>
                                        <option value="PL">Personal</option>
                                        <option value="PT">Prospect</option>
                                        <option value="QL">Qualified Lead</option>
                                        <option value="RS">Reseller</option>
                                        <option value="RE">Resource</option>
                                        <option value="RR">Retailer</option>
                                        <option value="SR">Shareholder</option>
                                        <option value="SR">Supplier</option>
                                        <option value="VR">Vendor</option>
                                        <option value="WL">Warm Lead</option>
                                        <option value="WR">Wholesaler</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- PhoneEmail tab end-->

                        <!-- Business address tab start -->
                        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                            <div class="form-row pt-4">
                                <div class="form-group col-3">
                                    <label for="address">Address</label>
                                </div>
                                <div class="form-group col-9">
                                    <textarea class="form-control" id="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Business address tab end -->
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="city">City</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="select2 form-control" multiple="multiple" id="city"
                                style="height: 36px;width: 100%;">
                                <option value="city">city</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="state">State</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="select2 form-control" multiple="multiple" id="state"
                                style="height: 36px;width: 100%;">
                                <option value="state">state</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="zipcode">ZIP Code</label>
                        </div>
                        <div class="form-group col-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="zipcode" aria-label="zipcode"
                                    aria-describedby="basic-addon1" name="zipcode" style="height: 36px;width: 100%;">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="country">Country</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="select2 form-control" multiple="multiple" id="country"
                                style="height: 36px;width: 100%;">
                                <option value="country">country</option>
                            </select>
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


<!-- Sub module of New contact modal via Link to comapny modal start-->
<div class="modal fade" id="linktocompany" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Link to Company</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="content-display mb-3">
                        <h6>View:</h6>
                        <div class="form-row pt-2">
                            <div class="form-group col-12">
                                <select class="form-control" id="companies" style="height: 36px;width: 100%;">
                                    <option value="#">Companies</option>
                                    <option value="#">Companies List</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="include_divisions">
                                    <label class="custom-control-label" for="include_divisions">Include
                                        divisions</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-9">
                            <label for="lookForText">Find</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="lookForText" aria-label="look"
                                    aria-describedby="basic-addon1" name="lookForText"
                                    style="height: 36px;width: 100%;">
                            </div>
                        </div>

                        <div class="form-group col-3 d-flex align-items-end">
                            <a class="btn btn-secondary w-100 justify-content-center" href="#" role="button">
                                Search
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive mb-3 fo-table table-h ">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col" class="tb-h">Company</th>
                                    <th scope="col" class="tb-h">Company Description</th>
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

                    <div class="form-row">
                        <div class="col-12">
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
                <div class="modal-footer pb-4 pt-0 pt-4">
                    <button type="button" class="btn fo-btn-primary">Save</button>
                    <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Sub module of New contact modal via Link to comapny modal end-->


<!-- Contact name submodal of New Contact Modal start-->
<div class="modal fade" id="contactname" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Name</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-12">
                            <span>Act! uses the First Name and Last Name for sorting and lookups.</span>
                            <span>Act! has determined the following to be the First Name, Middle Name, and Last Name of
                                this contact. If any of these names is incorrect, select the correct name from the
                                dropdown list.</span>
                        </div>
                    </div>

                    <h6 class="pt-4 pb-2">Name details:</h6>
                    <div class="content-display">
                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="contact_Value">Contact</label>
                            </div>
                            <div class="form-group col-9">
                                <div class="input-group">
                                    <input type="text" id="contact_Value" class="form-control"
                                        aria-label="contact_Value" aria-describedby="basic-addon1" name="contact_Value"
                                        style="height: 36px;width: 100%;">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="firstname">First name</label>
                            </div>
                            <div class="form-group col-9">
                                <select class="form-control" id="firstname" style="height: 36px; width: 100%;">
                                    <option value="#">Select</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="middlename">Middle name</label>
                            </div>
                            <div class="form-group col-9">
                                <select class="form-control" id="middlename" style="height: 36px; width: 100%;">
                                    <option value="#">Select</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="lastname">Last name</label>
                            </div>
                            <div class="form-group col-9">
                                <select class="form-control" id="lastname" style="height: 36px; width: 100%;">
                                    <option value="#">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row pt-3">
                        <div class="form-group col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chkAuto">
                                <label class="custom-control-label" for="chkAuto">
                                    Automatically show this dialog if the contact name contains more than two names
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-4 pt-0 pt-4">
                    <button type="button" class="btn fo-btn-primary">Save</button>
                    <button type="button" class="btn fo-btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact name submodal of New Contact Modal end-->

<!-- Phone format submodal of New Contact Modal start-->
<div class="modal fade" id="phoneformat" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Phone Format</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="ddlCountry">Country</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="form-control" id="ddlCountry" style="height: 36px; width: 100%;">
                                <option value="#">Select</option>
                                <option value="Afghanistan">Afghanistan [93]</option>
                                <option value="Albania">Albania [355]</option>
                                <option value="Algeria">Algeria [213]</option>
                                <option value="American Samoa">American Samoa [684]</option>
                                <option value="Andorra">Andorra [376]</option>
                                <option value="Angola">Angola [244]</option>
                                <option value="Anguilla">Anguilla [1]</option>
                                <option value="Antarctica">Antarctica [672]</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda [1]</option>
                                <option value="Argentina">Argentina [54]</option>
                                <option value="Armenia">Armenia [374]</option>
                                <option value="Aruba">Aruba [297]</option>
                                <option value="Ascension Island">Ascension Island [247]</option>
                                <option value="Australia">Australia [61]</option>
                                <option value="Austria">Austria [43]</option>
                                <option value="Azerbaijan">Azerbaijan [994]</option>
                                <option value="Bahamas, The">Bahamas, The [1]</option>
                                <option value="Bahrain">Bahrain [973]</option>
                                <option value="Bangladesh">Bangladesh [880]</option>
                                <option value="Barbados">Barbados [1]</option>
                                <option value="Belarus">Belarus [375]</option>
                                <option value="Belgium">Belgium [32]</option>
                                <option value="Belize">Belize [501]</option>
                                <option value="Benin">Benin [229]</option>
                                <option value="Bermuda">Bermuda [1]</option>
                                <option value="Bhutan">Bhutan [975]</option>
                                <option value="Bolivia">Bolivia [591]</option>
                                <option value="Bonaire">Bonaire [599]</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina [387]</option>
                                <option value="Botswana">Botswana [267]</option>
                                <option value="Brazil">Brazil [55]</option>
                                <option value="Brunei">Brunei [673]</option>
                                <option value="Bulgaria">Bulgaria [359]</option>
                                <option value="Burkina Faso">Burkina Faso [226]</option>
                                <option value="Burundi">Burundi [257]</option>
                                <option value="Cambodia">Cambodia [855]</option>
                                <option value="Cameroon">Cameroon [237]</option>
                                <option value="Canada">Canada [1]</option>
                                <option value="Cape Verde">Cape Verde [238]</option>
                                <option value="Cayman Islands">Cayman Islands [1]</option>
                                <option value="Central African Republic">Central African Republic [236]</option>
                                <option value="Chad">Chad [235]</option>
                                <option value="Channel Islands">Channel Islands [44]</option>
                                <option value="Chile">Chile [56]</option>
                                <option value="China">China [86]</option>
                                <option value="Christmas Island">Christmas Island [61]</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands [61]</option>
                                <option value="Colombia">Colombia [57]</option>
                                <option value="Comoros">Comoros [269]</option>
                                <option value="Congo (DRC)">Congo (DRC) [243]</option>
                                <option value="Congo">Congo [242]</option>
                                <option value="Cook Islands">Cook Islands [682]</option>
                                <option value="Costa Rica">Costa Rica [506]</option>
                                <option value="Côte d’Ivoire">Côte d’Ivoire [225]</option>
                                <option value="Croatia">Croatia [385]</option>
                                <option value="Cuba">Cuba [53]</option>
                                <option value="Curaçao">Curaçao [599]</option>
                                <option value="Cyprus">Cyprus [357]</option>
                                <option value="Czech Republic">Czech Republic [420]</option>
                                <option value="Denmark">Denmark [45]</option>
                                <option value="Diego Garcia">Diego Garcia [246]</option>
                                <option value="Djibouti">Djibouti [253]</option>
                                <option value="Dominica">Dominica [1]</option>
                                <option value="Dominican Republic">Dominican Republic [1]</option>
                                <option value="Ecuador">Ecuador [593]</option>
                                <option value="Egypt">Egypt [20]</option>
                                <option value="El Salvador">El Salvador [503]</option>
                                <option value="Equatorial Guinea">Equatorial Guinea [240]</option>
                                <option value="Eritrea">Eritrea [291]</option>
                                <option value="Estonia">Estonia [372]</option>
                                <option value="Ethiopia">Ethiopia [251]</option>
                                <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)
                                    [500]</option>
                                <option value="Faroe Islands">Faroe Islands [298]</option>
                                <option value="Fiji Islands">Fiji Islands [679]</option>
                                <option value="Finland">Finland [358]</option>
                                <option value="France">France [33]</option>
                                <option value="French Guiana">French Guiana [594]</option>
                                <option value="French Polynesia">French Polynesia [689]</option>
                                <option value="Gabon">Gabon [241]</option>
                                <option value="Gambia, The">Gambia, The [220]</option>
                                <option value="Georgia">Georgia [995]</option>
                                <option value="Germany">Germany [49]</option>
                                <option value="Ghana">Ghana [233]</option>
                                <option value="Gibraltar">Gibraltar [350]</option>
                                <option value="Greece">Greece [30]</option>
                                <option value="Greenland">Greenland [299]</option>
                                <option value="Grenada">Grenada [1]</option>
                                <option value="Guadeloupe">Guadeloupe [590]</option>
                                <option value="Guam">Guam [1]</option>
                                <option value="Guantanamo Bay">Guantanamo Bay [53]</option>
                                <option value="Guatemala">Guatemala [502]</option>
                                <option value="Guernsey">Guernsey [44]</option>
                                <option value="Guinea">Guinea [224]</option>
                                <option value="Guinea-Bissau">Guinea-Bissau [245]</option>
                                <option value="Guyana">Guyana [592]</option>
                                <option value="Haiti">Haiti [509]</option>
                                <option value="Honduras">Honduras [504]</option>
                                <option value="Hong Kong SAR">Hong Kong SAR [852]</option>
                                <option value="Hungary">Hungary [36]</option>
                                <option value="Iceland">Iceland [354]</option>
                                <option value="India">India [91]</option>
                                <option value="Indonesia">Indonesia [62]</option>
                                <option value="INMARSAT (Atlantic-East)">INMARSAT (Atlantic-East) [871]</option>
                                <option value="INMARSAT (Atlantic-West)">INMARSAT (Atlantic-West) [874]</option>
                                <option value="INMARSAT (Indian)">INMARSAT (Indian) [873]</option>
                                <option value="INMARSAT (Pacific)">INMARSAT (Pacific) [872]</option>
                                <option value="INMARSAT">INMARSAT [870]</option>
                                <option value="International Freephone Service">International Freephone Service [800]
                                </option>
                                <option value="Iran">Iran [98]</option>
                                <option value="Iraq">Iraq [964]</option>
                                <option value="Ireland">Ireland [353]</option>
                                <option value="Isle of Man">Isle of Man [44]</option>
                                <option value="Israel">Israel [972]</option>
                                <option value="Italy">Italy [39]</option>
                                <option value="Jamaica">Jamaica [1]</option>
                                <option value="Japan">Japan [81]</option>
                                <option value="Jersey">Jersey [44]</option>
                                <option value="Jordan">Jordan [962]</option>
                                <option value="Kazakhstan">Kazakhstan [7]</option>
                                <option value="Kenya">Kenya [254]</option>
                                <option value="Kiribati">Kiribati [686]</option>
                                <option value="Korea">Korea [82]</option>
                                <option value="Kuwait">Kuwait [965]</option>
                                <option value="Kyrgyzstan">Kyrgyzstan [996]</option>
                                <option value="Laos">Laos [856]</option>
                                <option value="Latvia">Latvia [371]</option>
                                <option value="Lebanon">Lebanon [961]</option>
                                <option value="Lesotho">Lesotho [266]</option>
                                <option value="Liberia">Liberia [231]</option>
                                <option value="Libya">Libya [218]</option>
                                <option value="Liechtenstein">Liechtenstein [423]</option>
                                <option value="Lithuania">Lithuania [370]</option>
                                <option value="Luxembourg">Luxembourg [352]</option>
                                <option value="Macao S.A.R.">Macao S.A.R. [853]</option>
                                <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav
                                    Republic of [389]</option>
                                <option value="Madagascar">Madagascar [261]</option>
                                <option value="Malawi">Malawi [265]</option>
                                <option value="Malaysia">Malaysia [60]</option>
                                <option value="Maldives">Maldives [960]</option>
                                <option value="Mali">Mali [223]</option>
                                <option value="Malta">Malta [356]</option>
                                <option value="Marshall Islands">Marshall Islands [692]</option>
                                <option value="Martinique">Martinique [596]</option>
                                <option value="Mauritania">Mauritania [222]</option>
                                <option value="Mauritius">Mauritius [230]</option>
                                <option value="Mayotte">Mayotte [269]</option>
                                <option value="Mexico">Mexico [52]</option>
                                <option value="Micronesia">Micronesia [691]</option>
                                <option value="Moldova">Moldova [373]</option>
                                <option value="Monaco">Monaco [377]</option>
                                <option value="Mongolia">Mongolia [976]</option>
                                <option value="Montenegro">Montenegro [382]</option>
                                <option value="Montserrat">Montserrat [1]</option>
                                <option value="Morocco">Morocco [212]</option>
                                <option value="Mozambique">Mozambique [258]</option>
                                <option value="Myanmar">Myanmar [95]</option>
                                <option value="Namibia">Namibia [264]</option>
                                <option value="Nauru">Nauru [674]</option>
                                <option value="Nepal">Nepal [977]</option>
                                <option value="Netherlands">Netherlands [31]</option>
                                <option value="New Caledonia">New Caledonia [687]</option>
                                <option value="New Zealand">New Zealand [64]</option>
                                <option value="Nicaragua">Nicaragua [505]</option>
                                <option value="Niger">Niger [227]</option>
                                <option value="Nigeria">Nigeria [234]</option>
                                <option value="Niue">Niue [683]</option>
                                <option value="Norfolk Island">Norfolk Island [672]</option>
                                <option value="North Korea">North Korea [850]</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands [670]</option>
                                <option value="Norway">Norway [47]</option>
                                <option value="Oman">Oman [968]</option>
                                <option value="Pakistan">Pakistan [92]</option>
                                <option value="Palau">Palau [680]</option>
                                <option value="Palestinian Authority">Palestinian Authority [970]</option>
                                <option value="Panama">Panama [507]</option>
                                <option value="Papua New Guinea">Papua New Guinea [675]</option>
                                <option value="Paraguay">Paraguay [595]</option>
                                <option value="Peru">Peru [51]</option>
                                <option value="Philippines">Philippines [63]</option>
                                <option value="Poland">Poland [48]</option>
                                <option value="Portugal">Portugal [351]</option>
                                <option value="Puerto Rico">Puerto Rico [1]</option>
                                <option value="Qatar">Qatar [974]</option>
                                <option value="Reunion">Reunion [262]</option>
                                <option value="Romania">Romania [40]</option>
                                <option value="Rota Island">Rota Island [670]</option>
                                <option value="Russia">Russia [7]</option>
                                <option value="Rwanda">Rwanda [250]</option>
                                <option value="Saba">Saba [599]</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon [508]</option>
                                <option value="Saipan">Saipan [670]</option>
                                <option value="Samoa">Samoa [685]</option>
                                <option value="San Marino">San Marino [378]</option>
                                <option value="São Tomé and Príncipe">São Tomé and Príncipe [239]</option>
                                <option value="Saudi Arabia">Saudi Arabia [966]</option>
                                <option value="Senegal">Senegal [221]</option>
                                <option value="Serbia">Serbia [381]</option>
                                <option value="Seychelles">Seychelles [248]</option>
                                <option value="Sierra Leone">Sierra Leone [232]</option>
                                <option value="Singapore">Singapore [65]</option>
                                <option value="Sint Eustatius">Sint Eustatius [599]</option>
                                <option value="Sint Maarten">Sint Maarten [1]</option>
                                <option value="Slovakia">Slovakia [421]</option>
                                <option value="Slovenia">Slovenia [386]</option>
                                <option value="Solomon Islands">Solomon Islands [677]</option>
                                <option value="Somalia">Somalia [252]</option>
                                <option value="South Africa">South Africa [27]</option>
                                <option value="Spain">Spain [34]</option>
                                <option value="Sri Lanka">Sri Lanka [94]</option>
                                <option value="St. Helena">St. Helena [290]</option>
                                <option value="St. Kitts and Nevis">St. Kitts and Nevis [1]</option>
                                <option value="St. Lucia">St. Lucia [1]</option>
                                <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines [1]
                                </option>
                                <option value="Sudan">Sudan [249]</option>
                                <option value="Suriname">Suriname [597]</option>
                                <option value="Svalbard">Svalbard [47]</option>
                                <option value="Swaziland">Swaziland [268]</option>
                                <option value="Sweden">Sweden [46]</option>
                                <option value="Switzerland">Switzerland [41]</option>
                                <option value="Syria">Syria [963]</option>
                                <option value="Taiwan">Taiwan [886]</option>
                                <option value="Tajikistan">Tajikistan [992]</option>
                                <option value="Tanzania">Tanzania [255]</option>
                                <option value="Thailand">Thailand [66]</option>
                                <option value="Timor-Leste">Timor-Leste [670]</option>
                                <option value="Tinian Island">Tinian Island [670]</option>
                                <option value="Togo">Togo [228]</option>
                                <option value="Tokelau">Tokelau [690]</option>
                                <option value="Tonga">Tonga [676]</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago [1]</option>
                                <option value="Tunisia">Tunisia [216]</option>
                                <option value="Turkey">Turkey [90]</option>
                                <option value="Turkmenistan">Turkmenistan [993]</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands [1]</option>
                                <option value="Tuvalu">Tuvalu [688]</option>
                                <option value="Uganda">Uganda [256]</option>
                                <option value="Ukraine">Ukraine [380]</option>
                                <option value="United Arab Emirates">United Arab Emirates [971]</option>
                                <option value="United Kingdom">United Kingdom [44]</option>
                                <option selected="selected" value="United States">United States [1]</option>
                                <option value="Uruguay">Uruguay [598]</option>
                                <option value="Uzbekistan">Uzbekistan [998]</option>
                                <option value="Vanuatu">Vanuatu [678]</option>
                                <option value="Vatican City">Vatican City [39]</option>
                                <option value="Venezuela">Venezuela [58]</option>
                                <option value="Vietnam">Vietnam [84]</option>
                                <option value="Virgin Islands">Virgin Islands [1]</option>
                                <option value="Virgin Islands, British">Virgin Islands, British [1]</option>
                                <option value="Wallis and Futuna">Wallis and Futuna [681]</option>
                                <option value="Yemen">Yemen [967]</option>
                                <option value="Zambia">Zambia [260]</option>
                                <option value="Zimbabwe">Zimbabwe [263]</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="format">Format</label>
                        </div>
                        <div class="form-group col-9">
                            <select class="form-control" id="format" style="height: 36px; width: 100%;">
                                <option value="%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%">Free Form</option>
                                <option selected="selected" value="(%%%) %%%-%%%%">(%%%) %%%-%%%%</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="phonenumber">Phone Number</label>
                        </div>
                        <div class="form-group col-9">
                            <div class="input-group">
                                <input type="text" id="phonenumber" class="form-control" aria-label="phonenumber"
                                    aria-describedby="basic-addon1" name="contact_Value"
                                    style="height: 36px;width: 100%;">
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
<!-- Phone format submodal of New Contact Modal end-->