<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NextLevelFlix - Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <style>
    .bg-light-green {
      background-color: #643e8a;
    }

    .bg-violet {
      background-color: #e5d5f5;
    }

    html,
    body {
      font-family: tahoma;
    }
    input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            appearance: none; 
            margin: 0; 
        }
        input:hover{
            border-color:green;
        }
        select:hover{
            border-color:green;
        }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 bg-pink text-muted">
        <div class="py-5 text-dark fs-3 fw-semibold text-center animate__animated animate__fadeInUp">
          Step 1 - Enter your Details
          <center><div class="px-5 pt-1 bg-warning col-lg-3 col-5 mt-3"></div></center>
        </div>
        <div class="card p-lg-5 p-2 border-0">
          <form action="{{route('payment.info.store')}}" method="post">
            @csrf
            <input type="hidden" value="{{request()->input('amount')}}" name="amount">
            <input type="hidden" value="{{request()->input('description')}}" name="description">
            <div class="row">
              <div class="col-lg-12">
                <div class="my-2">
                  <div id="email_lbl" class="text-start text-muted mb-2">Email Address</div>
                  <input id="email" type="email" class="form-control rounded-2 p-2 border-2" name="user_email" placeholder="john.doe@example.com" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="my-2">
                  <div class="text-start text-muted mb-2">Phone Number (Optional)</div>
                  <input type="number" class="form-control rounded-2 p-2 border-2" value="" placeholder="+1234567890" name="user_number">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="my-2">
                  <div class="text-start text-muted mb-2">First Name</div>
                  <input type="text" class="form-control rounded-2 p-2 border-2" name="firstName" required="" placeholder="john">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="my-2">
                  <div class="text-start text-muted mb-2">Last Name</div>
                  <input type="text" class="form-control rounded-2 p-2 border-2" name="lastName" required="" placeholder="Doe">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="my-3">
                  <div class="text-start text-muted mb-2">Address Line 1</div>
                  <input type="text" class="form-control rounded-2 p-2 border-2" name="Address_line_1" required="" placeholder="Enter your Address Line 1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="my-3">
                  <div class="text-start text-muted mb-2">Address Line 2 (Optional)</div>
                  <input type="text" class="form-control rounded-2 p-2 border-2" name="Address_line_2" placeholder="Optional Here">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="my-3">
                  <div class="text-start text-muted mb-2">City</div>
                  <input type="text" class="form-control rounded-2 p-2 border-2" name="city" required placeholder="Enter Your City">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="my-3">
                    <div class="text-start text-muted mb-2">State</div>
                    <input id="input" type="text" class="form-control rounded-2 p-2 border-2 " name="state" required placeholder="Enter Your State">
                    <select id="select" class="form-select rounded-2 p-2 border-2 d-none" name="state" required>
                              <option selected disabled>Select State</option>
                              <option value="Alabama">Alabama</option>
                              <option value="Alaska">Alaska</option>
                              <option value="Arizona">Arizona</option>
                              <option value="Arkansas">Arkansas</option>
                              <option value="California">California</option>
                              <option value="Colorado">Colorado</option>
                              <option value="Connecticut">Connecticut</option>
                              <option value="Delaware">Delaware</option>
                              <option value="Florida">Florida</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Hawaii">Hawaii</option>
                              <option value="Idaho">Idaho</option>
                              <option value="Illinois">Illinois</option>
                              <option value="Indiana">Indiana</option>
                              <option value="Iowa">Iowa</option>
                              <option value="Kansas">Kansas</option>
                              <option value="Kentucky">Kentucky</option>
                              <option value="Louisiana">Louisiana</option>
                              <option value="Maine">Maine</option>
                              <option value="Maryland">Maryland</option>
                              <option value="Massachusetts">Massachusetts</option>
                              <option value="Michigan">Michigan</option>
                              <option value="Minnesota">Minnesota</option>
                              <option value="Mississippi">Mississippi</option>
                              <option value="Missouri">Missouri</option>
                              <option value="Montana">Montana</option>
                              <option value="Nebraska">Nebraska</option>
                              <option value="Nevada">Nevada</option>
                              <option value="New Hampshire">New Hampshire</option>
                              <option value="New Jersey">New Jersey</option>
                              <option value="New Mexico">New Mexico</option>
                              <option value="New York">New York</option>
                              <option value="North Carolina">North Carolina</option>
                              <option value="North Dakota">North Dakota</option>
                              <option value="Ohio">Ohio</option>
                              <option value="Oklahoma">Oklahoma</option>
                              <option value="Oregon">Oregon</option>
                              <option value="Pennsylvania">Pennsylvania</option>
                              <option value="Rhode Island">Rhode Island</option>
                              <option value="South Carolina">South Carolina</option>
                              <option value="South Dakota">South Dakota</option>
                              <option value="Tennessee">Tennessee</option>
                              <option value="Texas">Texas</option>
                              <option value="Utah">Utah</option>
                              <option value="Vermont">Vermont</option>
                              <option value="Virginia">Virginia</option>
                              <option value="Washington">Washington</option>
                              <option value="West Virginia">West Virginia</option>
                              <option value="Wisconsin">Wisconsin</option>
                              <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
            </div>
              
              <div class="col-lg-12">
                <div class="my-3">
                  <div class="text-start text-muted mb-2">Postal Code</div>
                  <input type="number" class="form-control rounded-2 p-2 border-2" name="Postal_code" required="" placeholder="Enter Your Postal Code">
                </div>
              </div>
              
              <div class="col-lg-12">
                <div class="my-2">
                  <div class="text-start text-muted mb-2">Country</div>
                  <select class="form-control rounded-2 p-2 border-2" name="country" required id="countrySelect">
                            <option selected disabled>Select Country</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Ascension Island">Ascension Island</option>
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
                          <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="British Virgin Islands">British Virgin Islands</option>
                          <option value="Brunei">Brunei</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo - Brazzaville">Congo - Brazzaville</option>
                          <option value="Congo - Kinshasa">Congo - Kinshasa</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Curaçao">Curaçao</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czechia">Czechia</option>
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
                          <option value="Eswatini">Eswatini</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands">Falkland Islands</option>
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
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong SAR China">Hong Kong SAR China</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
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
                          <option value="Kosovo">Kosovo</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Laos">Laos</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao SAR China">Macao SAR China</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Moldova">Moldova</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="North Macedonia">North Macedonia</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palestinian Territories">Palestinian Territories</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn Islands">Pitcairn Islands</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Réunion">Réunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russia">Russia</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="São Tomé & Príncipe">São Tomé & Príncipe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Sint Maarten">Sint Maarten</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia & South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                          <option value="South Korea">South Korea</option>
                          <option value="South Sudan">South Sudan</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="St. Barthélemy">St. Barthélemy</option>
                          <option value="St. Helena">St. Helena</option>
                          <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                          <option value="St. Lucia">St. Lucia</option>
                          <option value="St. Martin">St. Martin</option>
                          <option value="St. Pierre & Miquelon">St. Pierre & Miquelon</option>
                          <option value="St. Vincent & Grenadines">St. Vincent & Grenadines</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard & Jan Mayen">Svalbard & Jan Mayen</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Timor-Leste">Timor-Leste</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                          <option value="Tristan da Cunha">Tristan da Cunha</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City">Vatican City</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Vietnam</option>
                          <option value="Wallis & Futuna">Wallis & Futuna</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
          </select>
                </div>
              </div>
              <div class="col-lg-12 mt-4">
                <button type="submit" class="btn btn-dark py-2 col-12 rounded-0 fw-semibold rounded-5">Proceed To Payment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 bg-violet mt-lg-0 mt-5 py-lg-0 py-5 text-muted d-flex flex-column justify-content-center align-items-center">
        <div class="mb-5 mt-lg-0 mt-5 fs-3 fw-bold">Billing Details</div>
        <div class="container text-lg-start text-center">
          <div class="fw-semibold">Item Name: <span style="font-size:12px">{{request()->input('description')}}</span> </div>
          <hr class="py-2 col-lg-12">
          <div class="mt-5 fw-semibold">Per Device(s) Cost:
          <?php
            $number = request()->input('amount');
                $decimal_number = number_format($number / 100, 2);
                if($decimal_number!=1.00){
                    echo "$".$decimal_number;
                }else{
                    echo "$0.00";
                    ?>
                    <div style="font-size: 12px">
                         (Your Card will only be authorized temporarily for $1.00)
                    </div>
                    <?php
                }
                
            ?></div>
          <hr class="py-2 col-lg-12">
          <div class="text-center mt-5 fw-semibold" style="font-size:12px">
            Money Back Guarantee<br> within 30 days of purchase
          </div>
        </div>
      </div>

    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function() {
        var countrySelect = $("#countrySelect");
        var input = $("#input");
        var select = $("#select");
        var state = $("#state");

        countrySelect.change(function() {
            if (countrySelect.val() == "United States") {
                select.removeClass("d-none");
                select.prop('disabled', false);

                input.addClass("d-none");
                input.prop('disabled', true);
                state.val(select.val());
            } else {
                input.removeClass("d-none");
                input.prop('disabled', false);

                select.addClass("d-none");
                select.prop('disabled', true);
                state.val(input.val());
            }
        });
    });
</script>
<script>
     $(document).ready(function(){
        $('input, select').click(function(){
            $(this).css('border-color', 'green');
        });
        
        $(document).click(function(event) { 
            if(!$(event.target).closest('input, select').length) {
                $('input, select').css('border-color', '');
            }        
        });
    });
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
