@extends('layouts.master')
@section('title')
@lang('translation.checkout')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Ecommerce
@endslot
@slot('title')
Checkout
@endslot
@endcomponent

<div class="row">
    <div class="col-xxl-8">
        <div class="row">
            <div class="col-lg-12">
                <!-- Danger Alert -->
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-cart3 align-baseline me-1"></i> Minimum order must be <b>$1800</b>. You need to add more products with total cost of <b>$300</b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title mb-0">Personal Information</h6>
                    </div>
                    <div class="card-body">
                        <form action="#!">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email address">
                                </div>
                                <div class="col-lg-6">
                                    <label for="cityInput" class="form-label">City</label>
                                    <input type="text" class="form-control" id="cityInput" placeholder="City">
                                </div>
                                <div class="col-lg-4">
                                    <label for="stateInput" class="form-label">State</label>
                                    <input type="text" class="form-control" id="stateInput" placeholder="State">
                                </div>
                                <div class="col-lg-4">
                                    <label for="countryInput" class="form-label">Country</label>
                                    <select id="countryInput" name="countryInput" data-choices class="form-control">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="zipCodeInput" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipCodeInput" placeholder="Zip code">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="addressInput" class="form-label">Address</label>
                                        <textarea class="form-control" id="addressInput" rows="3" placeholder="Enter address"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="card-title flex-grow-1 mb-0">Shipping Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-md mb-0">Choose Address</h5>
                            </div>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-check card-radio rounded-bottom-0">
                                    <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked="">
                                    <label class="form-check-label" for="shippingAddress01">
                                        <span class="mb-3 fw-semibold d-block text-muted text-uppercase">Home Address</span>

                                        <span class="fs-md mb-2 d-block fw-medium">Kiara Corkery</span>
                                        <span class="text-muted fw-normal text-wrap mb-1 d-block">912 Park Ave, Ketchikan, Alaska 99901, USA</span>
                                        <span class="text-muted fw-normal d-block">Mo. (907) 826-3317</span>
                                    </label>
                                </div>
                                <div class="d-flex flex-wrap p-2 py-1 rounded-bottom border mt-n1">
                                    <div>
                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                    </div>
                                    <div>
                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-check card-radio rounded-bottom-0">
                                    <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="shippingAddress02">
                                        <span class="mb-3 fw-semibold d-block text-muted text-uppercase">Office Address</span>

                                        <span class="fs-md mb-2 d-block fw-medium">Jarrett Rempel</span>
                                        <span class="text-muted fw-normal text-wrap mb-1 d-block">2566 Hc 1, Glennallen, Alaska 99588, USA</span>
                                        <span class="text-muted fw-normal d-block">Mo. (907) 225-9273</span>
                                    </label>
                                </div>
                                <div class="d-flex flex-wrap p-2 py-1 rounded-bottom border mt-n1">
                                    <div>
                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#addAddressModal"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                    </div>
                                    <div>
                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a href="#!" class="card bg-light bg-opacity-25 border border-light-subtle shadow-none h-100 text-center">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <div class="fs-4xl mb-2"><i class="bi bi-plus-circle-dotted"></i></div>
                                            <div class="fw-medium fs-md text-primary-emphasis stretched-link" data-bs-toggle="modal" data-bs-target="#addAddressModal">ADD Address</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="fs-md mb-3">Shipping Method</h5>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-check card-radio">
                                        <input id="shippingMethod01" name="shippingMethod" type="radio" class="form-check-input" checked>
                                        <label class="form-check-label d-flex gap-2 align-items-center" for="shippingMethod01">
                                            <span class="avatar-sm">
                                                <span class="avatar-title bg-light rounded text-body fs-4">
                                                    <i class="bi bi-truck"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="fs-md fw-medium mb-1 text-wrap d-block">Free Delivery</span>
                                                <span class="text-muted fw-normal text-wrap d-block">Expected Delivery 3 to 5 Days</span>
                                            </span>
                                            <span class="fs-3xl float-end mt-2 text-wrap d-block fw-semibold">Free</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check card-radio">
                                        <input id="shippingMethod02" name="shippingMethod" type="radio" class="form-check-input">
                                        <label class="form-check-label d-flex gap-2 align-items-center" for="shippingMethod02">
                                            <span class="avatar-sm">
                                                <span class="avatar-title bg-light rounded text-body fs-4">
                                                    <i class="bi bi-airplane"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="fs-md fw-medium mb-1 text-wrap d-block">Express Delivery</span>
                                                <span class="text-muted fw-normal text-wrap d-block">Delivery within 24hrs.</span>
                                            </span>
                                            <span class="fs-3xl float-end mt-2 text-wrap d-block fw-semibold">$24.99</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="card-title flex-grow-1 mb-0">Payment Information</h6>
                        <button class="btn btn-subtle-info flex-shrink-0" data-bs-toggle="modal" data-bs-target="#addCard"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Card</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-check card-radio">
                                    <input id="debitCart01" name="debitCart" type="radio" class="form-check-input" checked="">
                                    <label class="form-check-label bg-primary p-4" for="debitCart01">
                                        <i class="bi bi-cash-coin position-absolute top-0 end-0 display-1 text-white" style="opacity: 0.06;"></i>
                                        <span class="d-flex align-items-center mb-4 pb-4">
                                            <img src="{{ URL::asset('build/images/mastercard.png') }}" alt="" height="20">
                                            <i class="ph-wifi-high ms-auto fs-4 text-white-75"></i>
                                        </span>
                                        <span class="fs-3xl text-white fw-medium mb-2 d-block">9873 6548 9871 0123</span>
                                        <span class="d-flex align-items-center">
                                            <span class="fs-xs text-white-75 d-block">Ophelia Steuber</span>
                                            <span class="fs-xxs text-white-75 d-block ms-auto">Valid <b>32</b></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check card-radio">
                                    <input id="debitCart02" name="debitCart" type="radio" class="form-check-input">
                                    <label class="form-check-label bg-secondary p-4" for="debitCart02">
                                        <i class="bi bi-coin position-absolute top-0 end-0 display-1 text-white" style="opacity: 0.06;"></i>
                                        <span class="d-flex align-items-center mb-4 pb-4">
                                            <img src="{{ URL::asset('build/images/visa.png') }}" alt="" height="20">
                                            <i class="ph-wifi-high ms-auto fs-4 text-white-75"></i>
                                        </span>
                                        <span class="fs-3xl text-white fw-medium mb-2 d-block">9873 6548 9871 0123</span>
                                        <span class="d-flex align-items-center">
                                            <span class="fs-xs text-white-75 d-block">Bethany Nienow</span>
                                            <span class="fs-xxs text-white-75 d-block ms-auto">Valid <b>28</b></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--col -->
    <div class="col-xxl-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-0">Order Summary</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="badge bg-success-subtle text-success">Valid Time: 5:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead class="table-active text-muted">
                                    <tr>
                                        <th style="width: 90px;" scope="col">Product</th>
                                        <th scope="col">Product Info</th>
                                        <th scope="col" class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ URL::asset('build/images/products/48/img-1.png') }}" alt="" class="avatar-sm">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-md"><a href="apps-ecommerce-product-details" class="text-dark">Branded T-Shirts</a></h5>
                                            <p class="text-muted fw-medium mb-0">$161.25 x 03</p>
                                        </td>
                                        <td class="text-end fw-semibold">$483.75</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ URL::asset('build/images/products/48/img-3.png') }}" alt="" class="avatar-sm">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-md"><a href="apps-ecommerce-product-details" class="text-dark">Fossil gen 5E smart watch</a></h5>
                                            <p class="text-muted fw-medium mb-0">$69.60 x 02</p>
                                        </td>
                                        <td class="text-end fw-semibold">$139.20</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ URL::asset('build/images/products/48/img-6.png') }}" alt="" class="avatar-sm">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-md"><a href="apps-ecommerce-product-details" class="text-dark">Olive Printed Men Round Neck</a></h5>
                                            <p class="text-muted fw-medium mb-0">$250.00 x 06</p>
                                        </td>
                                        <td class="text-end fw-semibold">$1,500.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ URL::asset('build/images/products/48/img-9.png') }}" alt="" class="avatar-sm">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-md"><a href="apps-ecommerce-product-details" class="text-dark">Flip-Flops and House Slippers</a></h5>
                                            <p class="text-muted fw-medium mb-0">$150.00 x 01</p>
                                        </td>
                                        <td class="text-end fw-semibold">$150.00</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold" colspan="2">Sub Total :</td>
                                        <td class="fw-semibold text-end">$2,272.95</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Discount <span class="text-muted">(STEEX30)</span> : </td>
                                        <td class="text-end">- $681.89</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Shipping Charge :</td>
                                        <td class="text-end">$49.99</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Estimated Tax (18%): </td>
                                        <td class="text-end">$409.13</td>
                                    </tr>
                                    <tr class="border-top border-dashed">
                                        <th colspan="2">Total (USD) :</th>
                                        <td class="text-end">
                                            <span class="fw-semibold">
                                                $2,050.18
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Additional Service</h5>
                    </div>
                    <div class="card-body d-flex form-check form-switch gap-3">
                        <div class="flex-grow-1">
                            <label for="additionalServices" class="form-check-label fs-md fw-semibold mb-2">Environment Friendly</label>
                            <p class="text-muted mb-0">The primary goal of eco-warriors is creating a better world for future generations.</p>
                        </div>
                        <div class="flex-shrink-0 fw-medium">
                            $25
                        </div>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="additionalServices" checked>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex form-check form-switch gap-3 border-top">
                        <div class="flex-grow-1">
                            <label for="additionalServices2" class="form-check-label fs-md fw-semibold mb-2">Care + Package</label>
                            <p class="text-muted mb-0">Care packages are sent to acknowledge life transitions, from joyous occasions, such as engagements.</p>
                        </div>
                        <div class="flex-shrink-0 fw-medium">
                            $10
                        </div>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="additionalServices2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="text-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#confirmOrderModal" class="btn btn-primary">Confirm Order</button>
            <a href="apps-ecommerce-product-grid" class="btn btn-secondary">Continue Shopping</a>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->


<!-- Modal -->
<div class="modal fade" id="addCard" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header px-4">
                <h1 class="modal-title fs-5" id="addCardLabel">Add Card</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="card-wrapper mb-3"></div>

                <div class="form-container active">
                    <form action="#!" id="card-form-elem" autocomplete="off">
                        <div class="mb-3 mt-4">
                            <label for="card-number-input" class="form-label">Card Number</label>
                            <input class="form-control" placeholder="Card number" type="tel" id="card-number-input">
                        </div>
                        <div class="mb-3">
                            <label for="card-name-input" class="form-label">Card Holder</label>
                            <input class="form-control" placeholder="Full name" type="text" id="card-name-input">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="card-expiry-input" class="form-label">Expiry</label>
                                    <input class="form-control" placeholder="MM/YY" type="tel" id="card-expiry-input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="card-cvc-input" class="form-label">CVC</label>
                                    <input class="form-control" placeholder="CVC" type="number" id="card-cvc-input">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-secondary w-100" type="submit">Add Card</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- removeItemModal -->
<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <i class="ph-trash display-5 text-danger"></i>
                    <div class="mt-4 pt-2 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this address ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger ">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- editItemModal -->
<div id="addAddressModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAddressModalLabel">Add Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="mb-3">
                        <label for="addaddress-Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="addaddress-Name" placeholder="Enter name">
                    </div>

                    <div class="mb-3">
                        <label for="addaddress-textarea" class="form-label">Address</label>
                        <textarea class="form-control" id="addaddress-textarea" placeholder="Enter address" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="addaddress-phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="addaddress-phone" placeholder="Enter phone no.">
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">Address Type</label>
                        <select class="form-select" id="state" data-choices data-choices-search-false>
                            <option value="homeAddress">Home (7am to 10pm)</option>
                            <option value="officeAddress">Office (11am to 7pm)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                <button type="button" class="btn btn-primary">Add Address</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--confirm orders-->
<div id="confirmOrderModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <i class="bi bi-shop display-6"></i>
                    <div class="mt-4 pt-2 mx-4 mx-sm-5">
                        <h4>Confirm your order ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to confirm order ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                    <button type="button" class="btn w-sm btn-success ">Yes, Confirm Order</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!--Card js-->
<script src="{{ URL::asset('build/libs/card/card.js') }}"></script>

<!--Ecommerce Checkout init js-->
<script src="{{ URL::asset('build/js/pages/ecommerce-checkout.init.js') }}"></script>

<!-- App js -->
 <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection