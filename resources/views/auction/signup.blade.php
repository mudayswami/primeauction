<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Auction | Sign Up</title>
    <link rel="icon" type="image/x-icon" href="assets/logo-bg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            padding: 10px 0;
            background: #ecf0f4;
            width: 100%;
            height: 100%;
            font-size: 18px;
            line-height: 1.5;
            color: #222;
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;

        }

        .container {
            max-width: 1230px;
            width: 100%;
        }

        h1 {
            font-weight: 700;
            font-size: 45px;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            margin-bottom: 80px;
        }

        #description {
            font-size: 24px;
        }

        .form-wrap {
            background: rgba(255, 255, 255, 1);
            width: 100%;
            max-width: 850px;
            padding: 50px;
            margin: 0 auto;
            position: relative;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        }

        .form-wrap:before {
            content: "";
            width: 90%;
            height: calc(100% + 60px);
            left: 0;
            right: 0;
            margin: 0 auto;
            position: absolute;
            top: -30px;
            background: rgb(16 35 67);
            z-index: -1;
            opacity: 0.8;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group>label {
            display: block;
            font-size: 18px;
            color: #000;
        }

        .custom-control-label {
            color: #000;
            font-size: 16px;
        }

        .form-control {
            height: 50px;
            background: #ffff;
            /* border-color: ; */
            padding: 0 15px;
            font-size: 16px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: rgb(16 35 67);
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        textarea.form-control {
            height: 160px;
            padding-top: 15px;
            resize: none;
        }

        .btn {
            padding: .657rem .75rem;
            font-size: 18px;
            letter-spacing: 0.050em;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: rgb(16 35 67);
            border-color: rgb(16 35 67);
        }

        .btn-primary:hover {
            color: rgb(16 35 67);
            background-color: #ffffff;
            border-color: rgb(16 35 67);
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: rgb(16 35 67);
            background-color: #ffffff;
            border-color: rgb(16 35 67);
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
            color: rgb(16 35 67);
            background-color: #ffffff;
            border-color: rgb(16 35 67);
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        .checkbox-wrapper *,
        .checkbox-wrapper *:after,
        .checkbox-wrapper *:before {
            box-sizing: border-box;
        }

        .checkbox-wrapper input {
            position: absolute;
            opacity: 0;
        }

        .checkbox-wrapper input:checked+label svg path {
            stroke-dashoffset: 0;
        }

        .checkbox-wrapper input:focus+label {
            transform: scale(1.03);
        }

        .checkbox-wrapper input+label {
            display: block;
            border: 2px solid #333;
            width: var(--size);
            height: var(--size);
            border-radius: 6px;
            cursor: pointer;
            transition: all .2s ease;
        }

        .checkbox-wrapper input+label:active {
            transform: scale(1.05);
            border-radius: 12px;
        }

        .checkbox-wrapper input+label svg {
            pointer-events: none;
            padding: 5%;
        }

        .checkbox-wrapper input+label svg path {
            fill: none;
            stroke: #333;
            stroke-width: 4px;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 101;
            transition: all 250ms cubic-bezier(1, 0, .37, .91);
        }
        
        .upload-section{
            border:2px dashed gray;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header d-flex justify-content-center">
            <img class="" src="assets/logo-bg.png" width="150">
        </header>
        <div class="form-wrap">
            <form id="form-registeration" class=" ">
                <div class="" id="registeration">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group validated">
                                <label id="fname-label" for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="" class="form-control "
                                    required>
                                <div class="invalid-feedback">
                                    First Name is required
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group invalid">
                                <label id="lname-label" for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" placeholder="" class="form-control "
                                    required>
                                <div class="invalid-feedback">
                                    Second Name is required
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label id="email-label" for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="" class="form-control"
                                    required>
                                <div class="invalid-feedback">
                                    Email is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="password-label" for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="" class="form-control"
                                    required>
                                <div class="invalid-feedback">
                                    Passowrd must contain 1 uppercase and 1 lowercase letter, 1 number and 1 symbol.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="passconfirm-label" for="passconfirm">Confirm Password</label>
                                <input type="password" name="passconfirm" id="passconfirm" placeholder=""
                                    class="form-control" required>
                                <div class="invalid-feedback">
                                    Password Confirmation doesn't match
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label id="addressline1-label" for="addressline1">Address Line 1</label>
                                <input type="text" name="addressline1" id="addressline1" placeholder=""
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="addressline2-label" for="addressline2">Address Line 2</label>
                                <input type="text" name="addressline2" id="addressline2" placeholder=""
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="addressline3-label" for="addressline3">Address Line 3</label>
                                <input type="text" name="addressline3" id="addressline3" placeholder=""
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="town-label" for="town">Town</label>
                                <input type="text" name="town" id="town" placeholder="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="country-label" for="country">Country</label>
                                <input type="text" name="country" id="country" placeholder="" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="pcode-label" for="pcode">Postcode</label>
                                <input type="text" name="pcode" id="pcode" placeholder="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="country-label" for="country-d">Country</label>
                                <select id="country-d" name="country-d" class="form-control" required>
                                    <option disabled selected value>Select</option>
                                    <option value="1"> Afghanistan</option>
                                    <option value="2"> Åland Islands</option>
                                    <option value="3"> Albania</option>
                                    <option value="4"> Algeria</option>
                                    <option value="5"> American Samoa</option>
                                    <option value="6"> Andorra</option>
                                    <option value="7"> Angola</option>
                                    <option value="8"> Anguilla</option>
                                    <option value="9"> Antarctica</option>
                                    <option value="10"> Antigua and Barbuda</option>
                                    <option value="11"> Argentina</option>
                                    <option value="12"> Armenia</option>
                                    <option value="13"> Aruba</option>
                                    <option value="14"> Australia</option>
                                    <option value="15"> Austria</option>
                                    <option value="16"> Azerbaijan</option>
                                    <option value="17"> Bahamas</option>
                                    <option value="18"> Bahrain</option>
                                    <option value="19"> Bangladesh</option>
                                    <option value="20"> Barbados</option>
                                    <option value="21"> Belarus</option>
                                    <option value="22"> Belgium</option>
                                    <option value="23"> Belize</option>
                                    <option value="24"> Benin</option>
                                    <option value="25"> Bermuda</option>
                                    <option value="26"> Bhutan</option>
                                    <option value="27"> Bolivia, Plurinational State of</option>
                                    <option value="28"> Bonaire, Sint Eustatius and Saba</option>
                                    <option value="29"> Bosnia and Herzegovina</option>
                                    <option value="30"> Botswana</option>
                                    <option value="31"> Bouvet Island</option>
                                    <option value="32"> Brazil</option>
                                    <option value="33"> British Indian Ocean Territory</option>
                                    <option value="34"> Brunei Darussalam</option>
                                    <option value="35"> Bulgaria</option>
                                    <option value="36"> Burkina Faso</option>
                                    <option value="37"> Burundi</option>
                                    <option value="38"> Cambodia</option>
                                    <option value="39"> Cameroon</option>
                                    <option value="40"> Canada</option>
                                    <option value="41"> Cape Verde</option>
                                    <option value="42"> Cayman Islands</option>
                                    <option value="43"> Central African Republic</option>
                                    <option value="44"> Chad</option>
                                    <option value="45"> Chile</option>
                                    <option value="46"> China</option>
                                    <option value="47"> Christmas Island</option>
                                    <option value="48"> Cocos (Keeling) Islands</option>
                                    <option value="49"> Colombia</option>
                                    <option value="50"> Comoros</option>
                                    <option value="51"> Congo</option>
                                    <option value="52"> Congo, the Democratic Republic of the</option>
                                    <option value="53"> Cook Islands</option>
                                    <option value="54"> Costa Rica</option>
                                    <option value="55"> Côte d'Ivoire</option>
                                    <option value="56"> Croatia</option>
                                    <option value="57"> Cuba</option>
                                    <option value="58"> Curaçao</option>
                                    <option value="59"> Cyprus</option>
                                    <option value="60"> Czech Republic</option>
                                    <option value="61"> Denmark</option>
                                    <option value="62"> Djibouti</option>
                                    <option value="63"> Dominica</option>
                                    <option value="64"> Dominican Republic</option>
                                    <option value="65"> Ecuador</option>
                                    <option value="66"> Egypt</option>
                                    <option value="67"> El Salvador</option>
                                    <option value="68"> Equatorial Guinea</option>
                                    <option value="69"> Eritrea</option>
                                    <option value="70"> Estonia</option>
                                    <option value="71"> Ethiopia</option>
                                    <option value="72"> Falkland Islands (Malvinas)</option>
                                    <option value="73"> Faroe Islands</option>
                                    <option value="74"> Fiji</option>
                                    <option value="75"> Finland</option>
                                    <option value="76"> France</option>
                                    <option value="77"> French Guiana</option>
                                    <option value="78"> French Polynesia</option>
                                    <option value="79"> French Southern Territories</option>
                                    <option value="80"> Gabon</option>
                                    <option value="81"> Gambia</option>
                                    <option value="82"> Georgia</option>
                                    <option value="83"> Germany</option>
                                    <option value="84"> Ghana</option>
                                    <option value="85"> Gibraltar</option>
                                    <option value="86"> Greece</option>
                                    <option value="87"> Greenland</option>
                                    <option value="88"> Grenada</option>
                                    <option value="89"> Guadeloupe</option>
                                    <option value="90"> Guam</option>
                                    <option value="91"> Guatemala</option>
                                    <option value="92"> Guernsey</option>
                                    <option value="93"> Guinea</option>
                                    <option value="94"> Guinea-Bissau</option>
                                    <option value="95"> Guyana</option>
                                    <option value="96"> Haiti</option>
                                    <option value="97"> Heard Island and McDonald Islands</option>
                                    <option value="98"> Holy See (Vatican City State)</option>
                                    <option value="99"> Honduras</option>
                                    <option value="100"> Hong Kong</option>
                                    <option value="101"> Hungary</option>
                                    <option value="102"> Iceland</option>
                                    <option value="103"> India</option>
                                    <option value="104"> Indonesia</option>
                                    <option value="105"> Iran, Islamic Republic of</option>
                                    <option value="106"> Iraq</option>
                                    <option value="107"> Ireland</option>
                                    <option value="108"> Isle of Man</option>
                                    <option value="109"> Israel</option>
                                    <option value="110"> Italy</option>
                                    <option value="111"> Jamaica</option>
                                    <option value="112"> Japan</option>
                                    <option value="113"> Jersey</option>
                                    <option value="114"> Jordan</option>
                                    <option value="115"> Kazakhstan</option>
                                    <option value="116"> Kenya</option>
                                    <option value="117"> Kiribati</option>
                                    <option value="118"> Korea, Democratic People's Republic of</option>
                                    <option value="119"> Korea, Republic of</option>
                                    <option value="120"> Kuwait</option>
                                    <option value="121"> Kyrgyzstan</option>
                                    <option value="122"> Lao People's Democratic Republic</option>
                                    <option value="123"> Latvia</option>
                                    <option value="124"> Lebanon</option>
                                    <option value="125"> Lesotho</option>
                                    <option value="126"> Liberia</option>
                                    <option value="127"> Libya</option>
                                    <option value="128"> Liechtenstein</option>
                                    <option value="129"> Lithuania</option>
                                    <option value="130"> Luxembourg</option>
                                    <option value="131"> Macao</option>
                                    <option value="132"> Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="133"> Madagascar</option>
                                    <option value="134"> Malawi</option>
                                    <option value="135"> Malaysia</option>
                                    <option value="136"> Maldives</option>
                                    <option value="137"> Mali</option>
                                    <option value="138"> Malta</option>
                                    <option value="139"> Marshall Islands</option>
                                    <option value="140"> Martinique</option>
                                    <option value="141"> Mauritania</option>
                                    <option value="142"> Mauritius</option>
                                    <option value="143"> Mayotte</option>
                                    <option value="144"> Mexico</option>
                                    <option value="145"> Micronesia, Federated States of</option>
                                    <option value="146"> Moldova, Republic of</option>
                                    <option value="147"> Monaco</option>
                                    <option value="148"> Mongolia</option>
                                    <option value="149"> Montenegro</option>
                                    <option value="150"> Montserrat</option>
                                    <option value="151"> Morocco</option>
                                    <option value="152"> Mozambique</option>
                                    <option value="153"> Myanmar</option>
                                    <option value="154"> Namibia</option>
                                    <option value="155"> Nauru</option>
                                    <option value="156"> Nepal</option>
                                    <option value="157"> Netherlands</option>
                                    <option value="158"> New Caledonia</option>
                                    <option value="159"> New Zealand</option>
                                    <option value="160"> Nicaragua</option>
                                    <option value="161"> Niger</option>
                                    <option value="162"> Nigeria</option>
                                    <option value="163"> Niue</option>
                                    <option value="164"> Norfolk Island</option>
                                    <option value="165"> Northern Mariana Islands</option>
                                    <option value="166"> Norway</option>
                                    <option value="167"> Oman</option>
                                    <option value="168"> Pakistan</option>
                                    <option value="169"> Palau</option>
                                    <option value="170"> Palestine, State of</option>
                                    <option value="171"> Panama</option>
                                    <option value="172"> Papua New Guinea</option>
                                    <option value="173"> Paraguay</option>
                                    <option value="174"> Peru</option>
                                    <option value="175"> Philippines</option>
                                    <option value="176"> Pitcairn</option>
                                    <option value="177"> Poland</option>
                                    <option value="178"> Portugal</option>
                                    <option value="179"> Puerto Rico</option>
                                    <option value="180"> Qatar</option>
                                    <option value="181"> Réunion</option>
                                    <option value="182"> Romania</option>
                                    <option value="183"> Russian Federation</option>
                                    <option value="184"> Rwanda</option>
                                    <option value="185"> Saint Barthélemy</option>
                                    <option value="186"> Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="187"> Saint Kitts and Nevis</option>
                                    <option value="188"> Saint Lucia</option>
                                    <option value="189"> Saint Martin (French part)</option>
                                    <option value="190"> Saint Pierre and Miquelon</option>
                                    <option value="191"> Saint Vincent and the Grenadines</option>
                                    <option value="192"> Samoa</option>
                                    <option value="193"> San Marino</option>
                                    <option value="194"> Sao Tome and Principe</option>
                                    <option value="195"> Saudi Arabia</option>
                                    <option value="196"> Senegal</option>
                                    <option value="197"> Serbia</option>
                                    <option value="198"> Seychelles</option>
                                    <option value="199"> Sierra Leone</option>
                                    <option value="200"> Singapore</option>
                                    <option value="201"> Sint Maarten (Dutch part)</option>
                                    <option value="202"> Slovakia</option>
                                    <option value="203"> Slovenia</option>
                                    <option value="204"> Solomon Islands</option>
                                    <option value="205"> Somalia</option>
                                    <option value="206"> South Africa</option>
                                    <option value="207"> South Georgia and the South Sandwich Islands</option>
                                    <option value="208"> South Sudan</option>
                                    <option value="209"> Spain</option>
                                    <option value="210"> Sri Lanka</option>
                                    <option value="211"> Sudan</option>
                                    <option value="212"> Suriname</option>
                                    <option value="213"> Svalbard and Jan Mayen</option>
                                    <option value="214"> Swaziland</option>
                                    <option value="215"> Sweden</option>
                                    <option value="216"> Switzerland</option>
                                    <option value="217"> Syrian Arab Republic</option>
                                    <option value="218"> Taiwan, Province of China</option>
                                    <option value="219"> Tajikistan</option>
                                    <option value="220"> Tanzania, United Republic of</option>
                                    <option value="221"> Thailand</option>
                                    <option value="222"> Timor-Leste</option>
                                    <option value="223"> Togo</option>
                                    <option value="224"> Tokelau</option>
                                    <option value="225"> Tonga</option>
                                    <option value="226"> Trinidad and Tobago</option>
                                    <option value="227"> Tunisia</option>
                                    <option value="228"> Turkey</option>
                                    <option value="229"> Turkmenistan</option>
                                    <option value="230"> Turks and Caicos Islands</option>
                                    <option value="231"> Tuvalu</option>
                                    <option value="232"> Uganda</option>
                                    <option value="233"> Ukraine</option>
                                    <option value="234"> United Arab Emirates</option>
                                    <option value="235" selected=""> United Kingdom</option>
                                    <option value="236"> United States</option>
                                    <option value="237"> United States Minor Outlying Islands</option>
                                    <option value="238"> Uruguay</option>
                                    <option value="239"> Uzbekistan</option>
                                    <option value="240"> Vanuatu</option>
                                    <option value="241"> Venezuela, Bolivarian Republic of</option>
                                    <option value="242"> Viet Nam</option>
                                    <option value="243"> Virgin Islands, British</option>
                                    <option value="244"> Virgin Islands, U.S.</option>
                                    <option value="245"> Wallis and Futuna</option>
                                    <option value="246"> Western Sahara</option>
                                    <option value="247"> Yemen</option>
                                    <option value="248"> Zambia</option>
                                    <option value="249"> Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="town-label" for="phcountry">Phone Country</label>
                                <select id="phcountry" name="phcountry" class="form-control" required>
                                    <option disabled selected value>Select</option>
                                    <option value="1"> Afghanistan</option>
                                    <option value="2"> Åland Islands</option>
                                    <option value="3"> Albania</option>
                                    <option value="4"> Algeria</option>
                                    <option value="5"> American Samoa</option>
                                    <option value="6"> Andorra</option>
                                    <option value="7"> Angola</option>
                                    <option value="8"> Anguilla</option>
                                    <option value="9"> Antarctica</option>
                                    <option value="10"> Antigua and Barbuda</option>
                                    <option value="11"> Argentina</option>
                                    <option value="12"> Armenia</option>
                                    <option value="13"> Aruba</option>
                                    <option value="14"> Australia</option>
                                    <option value="15"> Austria</option>
                                    <option value="16"> Azerbaijan</option>
                                    <option value="17"> Bahamas</option>
                                    <option value="18"> Bahrain</option>
                                    <option value="19"> Bangladesh</option>
                                    <option value="20"> Barbados</option>
                                    <option value="21"> Belarus</option>
                                    <option value="22"> Belgium</option>
                                    <option value="23"> Belize</option>
                                    <option value="24"> Benin</option>
                                    <option value="25"> Bermuda</option>
                                    <option value="26"> Bhutan</option>
                                    <option value="27"> Bolivia, Plurinational State of</option>
                                    <option value="28"> Bonaire, Sint Eustatius and Saba</option>
                                    <option value="29"> Bosnia and Herzegovina</option>
                                    <option value="30"> Botswana</option>
                                    <option value="31"> Bouvet Island</option>
                                    <option value="32"> Brazil</option>
                                    <option value="33"> British Indian Ocean Territory</option>
                                    <option value="34"> Brunei Darussalam</option>
                                    <option value="35"> Bulgaria</option>
                                    <option value="36"> Burkina Faso</option>
                                    <option value="37"> Burundi</option>
                                    <option value="38"> Cambodia</option>
                                    <option value="39"> Cameroon</option>
                                    <option value="40"> Canada</option>
                                    <option value="41"> Cape Verde</option>
                                    <option value="42"> Cayman Islands</option>
                                    <option value="43"> Central African Republic</option>
                                    <option value="44"> Chad</option>
                                    <option value="45"> Chile</option>
                                    <option value="46"> China</option>
                                    <option value="47"> Christmas Island</option>
                                    <option value="48"> Cocos (Keeling) Islands</option>
                                    <option value="49"> Colombia</option>
                                    <option value="50"> Comoros</option>
                                    <option value="51"> Congo</option>
                                    <option value="52"> Congo, the Democratic Republic of the</option>
                                    <option value="53"> Cook Islands</option>
                                    <option value="54"> Costa Rica</option>
                                    <option value="55"> Côte d'Ivoire</option>
                                    <option value="56"> Croatia</option>
                                    <option value="57"> Cuba</option>
                                    <option value="58"> Curaçao</option>
                                    <option value="59"> Cyprus</option>
                                    <option value="60"> Czech Republic</option>
                                    <option value="61"> Denmark</option>
                                    <option value="62"> Djibouti</option>
                                    <option value="63"> Dominica</option>
                                    <option value="64"> Dominican Republic</option>
                                    <option value="65"> Ecuador</option>
                                    <option value="66"> Egypt</option>
                                    <option value="67"> El Salvador</option>
                                    <option value="68"> Equatorial Guinea</option>
                                    <option value="69"> Eritrea</option>
                                    <option value="70"> Estonia</option>
                                    <option value="71"> Ethiopia</option>
                                    <option value="72"> Falkland Islands (Malvinas)</option>
                                    <option value="73"> Faroe Islands</option>
                                    <option value="74"> Fiji</option>
                                    <option value="75"> Finland</option>
                                    <option value="76"> France</option>
                                    <option value="77"> French Guiana</option>
                                    <option value="78"> French Polynesia</option>
                                    <option value="79"> French Southern Territories</option>
                                    <option value="80"> Gabon</option>
                                    <option value="81"> Gambia</option>
                                    <option value="82"> Georgia</option>
                                    <option value="83"> Germany</option>
                                    <option value="84"> Ghana</option>
                                    <option value="85"> Gibraltar</option>
                                    <option value="86"> Greece</option>
                                    <option value="87"> Greenland</option>
                                    <option value="88"> Grenada</option>
                                    <option value="89"> Guadeloupe</option>
                                    <option value="90"> Guam</option>
                                    <option value="91"> Guatemala</option>
                                    <option value="92"> Guernsey</option>
                                    <option value="93"> Guinea</option>
                                    <option value="94"> Guinea-Bissau</option>
                                    <option value="95"> Guyana</option>
                                    <option value="96"> Haiti</option>
                                    <option value="97"> Heard Island and McDonald Islands</option>
                                    <option value="98"> Holy See (Vatican City State)</option>
                                    <option value="99"> Honduras</option>
                                    <option value="100"> Hong Kong</option>
                                    <option value="101"> Hungary</option>
                                    <option value="102"> Iceland</option>
                                    <option value="103"> India</option>
                                    <option value="104"> Indonesia</option>
                                    <option value="105"> Iran, Islamic Republic of</option>
                                    <option value="106"> Iraq</option>
                                    <option value="107"> Ireland</option>
                                    <option value="108"> Isle of Man</option>
                                    <option value="109"> Israel</option>
                                    <option value="110"> Italy</option>
                                    <option value="111"> Jamaica</option>
                                    <option value="112"> Japan</option>
                                    <option value="113"> Jersey</option>
                                    <option value="114"> Jordan</option>
                                    <option value="115"> Kazakhstan</option>
                                    <option value="116"> Kenya</option>
                                    <option value="117"> Kiribati</option>
                                    <option value="118"> Korea, Democratic People's Republic of</option>
                                    <option value="119"> Korea, Republic of</option>
                                    <option value="120"> Kuwait</option>
                                    <option value="121"> Kyrgyzstan</option>
                                    <option value="122"> Lao People's Democratic Republic</option>
                                    <option value="123"> Latvia</option>
                                    <option value="124"> Lebanon</option>
                                    <option value="125"> Lesotho</option>
                                    <option value="126"> Liberia</option>
                                    <option value="127"> Libya</option>
                                    <option value="128"> Liechtenstein</option>
                                    <option value="129"> Lithuania</option>
                                    <option value="130"> Luxembourg</option>
                                    <option value="131"> Macao</option>
                                    <option value="132"> Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="133"> Madagascar</option>
                                    <option value="134"> Malawi</option>
                                    <option value="135"> Malaysia</option>
                                    <option value="136"> Maldives</option>
                                    <option value="137"> Mali</option>
                                    <option value="138"> Malta</option>
                                    <option value="139"> Marshall Islands</option>
                                    <option value="140"> Martinique</option>
                                    <option value="141"> Mauritania</option>
                                    <option value="142"> Mauritius</option>
                                    <option value="143"> Mayotte</option>
                                    <option value="144"> Mexico</option>
                                    <option value="145"> Micronesia, Federated States of</option>
                                    <option value="146"> Moldova, Republic of</option>
                                    <option value="147"> Monaco</option>
                                    <option value="148"> Mongolia</option>
                                    <option value="149"> Montenegro</option>
                                    <option value="150"> Montserrat</option>
                                    <option value="151"> Morocco</option>
                                    <option value="152"> Mozambique</option>
                                    <option value="153"> Myanmar</option>
                                    <option value="154"> Namibia</option>
                                    <option value="155"> Nauru</option>
                                    <option value="156"> Nepal</option>
                                    <option value="157"> Netherlands</option>
                                    <option value="158"> New Caledonia</option>
                                    <option value="159"> New Zealand</option>
                                    <option value="160"> Nicaragua</option>
                                    <option value="161"> Niger</option>
                                    <option value="162"> Nigeria</option>
                                    <option value="163"> Niue</option>
                                    <option value="164"> Norfolk Island</option>
                                    <option value="165"> Northern Mariana Islands</option>
                                    <option value="166"> Norway</option>
                                    <option value="167"> Oman</option>
                                    <option value="168"> Pakistan</option>
                                    <option value="169"> Palau</option>
                                    <option value="170"> Palestine, State of</option>
                                    <option value="171"> Panama</option>
                                    <option value="172"> Papua New Guinea</option>
                                    <option value="173"> Paraguay</option>
                                    <option value="174"> Peru</option>
                                    <option value="175"> Philippines</option>
                                    <option value="176"> Pitcairn</option>
                                    <option value="177"> Poland</option>
                                    <option value="178"> Portugal</option>
                                    <option value="179"> Puerto Rico</option>
                                    <option value="180"> Qatar</option>
                                    <option value="181"> Réunion</option>
                                    <option value="182"> Romania</option>
                                    <option value="183"> Russian Federation</option>
                                    <option value="184"> Rwanda</option>
                                    <option value="185"> Saint Barthélemy</option>
                                    <option value="186"> Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="187"> Saint Kitts and Nevis</option>
                                    <option value="188"> Saint Lucia</option>
                                    <option value="189"> Saint Martin (French part)</option>
                                    <option value="190"> Saint Pierre and Miquelon</option>
                                    <option value="191"> Saint Vincent and the Grenadines</option>
                                    <option value="192"> Samoa</option>
                                    <option value="193"> San Marino</option>
                                    <option value="194"> Sao Tome and Principe</option>
                                    <option value="195"> Saudi Arabia</option>
                                    <option value="196"> Senegal</option>
                                    <option value="197"> Serbia</option>
                                    <option value="198"> Seychelles</option>
                                    <option value="199"> Sierra Leone</option>
                                    <option value="200"> Singapore</option>
                                    <option value="201"> Sint Maarten (Dutch part)</option>
                                    <option value="202"> Slovakia</option>
                                    <option value="203"> Slovenia</option>
                                    <option value="204"> Solomon Islands</option>
                                    <option value="205"> Somalia</option>
                                    <option value="206"> South Africa</option>
                                    <option value="207"> South Georgia and the South Sandwich Islands</option>
                                    <option value="208"> South Sudan</option>
                                    <option value="209"> Spain</option>
                                    <option value="210"> Sri Lanka</option>
                                    <option value="211"> Sudan</option>
                                    <option value="212"> Suriname</option>
                                    <option value="213"> Svalbard and Jan Mayen</option>
                                    <option value="214"> Swaziland</option>
                                    <option value="215"> Sweden</option>
                                    <option value="216"> Switzerland</option>
                                    <option value="217"> Syrian Arab Republic</option>
                                    <option value="218"> Taiwan, Province of China</option>
                                    <option value="219"> Tajikistan</option>
                                    <option value="220"> Tanzania, United Republic of</option>
                                    <option value="221"> Thailand</option>
                                    <option value="222"> Timor-Leste</option>
                                    <option value="223"> Togo</option>
                                    <option value="224"> Tokelau</option>
                                    <option value="225"> Tonga</option>
                                    <option value="226"> Trinidad and Tobago</option>
                                    <option value="227"> Tunisia</option>
                                    <option value="228"> Turkey</option>
                                    <option value="229"> Turkmenistan</option>
                                    <option value="230"> Turks and Caicos Islands</option>
                                    <option value="231"> Tuvalu</option>
                                    <option value="232"> Uganda</option>
                                    <option value="233"> Ukraine</option>
                                    <option value="234"> United Arab Emirates</option>
                                    <option value="235" selected=""> United Kingdom</option>
                                    <option value="236"> United States</option>
                                    <option value="237"> United States Minor Outlying Islands</option>
                                    <option value="238"> Uruguay</option>
                                    <option value="239"> Uzbekistan</option>
                                    <option value="240"> Vanuatu</option>
                                    <option value="241"> Venezuela, Bolivarian Republic of</option>
                                    <option value="242"> Viet Nam</option>
                                    <option value="243"> Virgin Islands, British</option>
                                    <option value="244"> Virgin Islands, U.S.</option>
                                    <option value="245"> Wallis and Futuna</option>
                                    <option value="246"> Western Sahara</option>
                                    <option value="247"> Yemen</option>
                                    <option value="248"> Zambia</option>
                                    <option value="249"> Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="country-label" for="mobile">Phone number</label>
                                <input type="text" name="mobile" id="mobile" placeholder="" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="my-2" style="height:1px;background-color:rgb(16,35,67,0.17);width:100%;"></div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="checkbox-wrapper d-flex">
                                <div class="">
                                    <input type="checkbox" name="seller" id="seller">
                                    <label for="seller" style="--size: 30px">
                                        <svg viewBox="0,0,50,50">
                                            <path d="M5 30 L 20 45 L 45 5"></path>
                                        </svg>
                                    </label>
                                </div>
                                <p class="px-2"> Have you got items to sell?</p>
                            </div>
                        </div>
                        <div class="col-12" id="upload-documents">
                            <div id="photo-id">
                                <div class="mx-auto upload-section">
                                    <div class="d-flex flex-column text-center">
                                        <svg width="64" height="64" class="mx-auto h-12 w-12 text-gray-400"
                                            stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <input type="file">
                                        <p>JPEG or PNG. Max file size: 2MB</p>
                                        <p>Driving License, Passport, ID card .etc</p>
                                    </div>
                                </div>
                            </div>
                            <div id="address-proof"></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label id="" for="entity">Are you an individual or a company?</label>
                                    <select id="entity" name="entity" class="form-control" required>
                                        <option value="1" selected> Individual</option>
                                        <option value="2"> Company</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-none" id="company_condition">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="country-label" for="company">Company Name</label>
                                        <input type="text" name="company" id="company" placeholder=""
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="checkbox-wrapper d-flex">
                                        <div class="">
                                            <input type="checkbox" name="is_vat" id="is_vat">
                                            <label for="is_vat" style="--size: 30px">
                                                <svg viewBox="0,0,50,50">
                                                    <path d="M5 30 L 20 45 L 45 5"></path>
                                                </svg>
                                            </label>
                                        </div>
                                        <p class="px-2"> Are you VAT registered?</p>
                                    </div>
                                </div>
                                <div class="col-12 d-none" id="vat_num">
                                    <div class="form-group">
                                        <label id="country-label" for="vat_number">VAT Number</label>
                                        <input type="text" name="vat_number" id="vat_number" placeholder=""
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="preferences">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <label class="sell-label mx-2" for="sell-label"><input type="checkbox"
                                        class="custom-control-input" name="sell-label" value="yes" id="sell-label"> I
                                    accept the <a href="#">Terms & Conditions</a> of business and <a href="#">Privacy
                                        Policy</a> of Auction Rebel LTD T/a Prime Auction</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <label class="sell-label mx-2" for="sell-label"><input type="checkbox"
                                        class="custom-control-input" name="sell-label" value="yes" id="sell-label">
                                    Please keep me informed about forthcoming sales, changes and improvements to Auction
                                    Rebel Ltd T/A Prime Auction</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            Which of these categories would you most like to see at auction? (Select as many as you
                            like)
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="auctions" value="yes"
                                id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Auctions
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Art</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Cars & Automotive</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Children & Baby</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Collectibles</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Electronics</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Fashion</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Handbags</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Home Appliances</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Home Improvement</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Homewares, Furniture & Garden</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Jewellery</label>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Liquidations</label>
                        </div>
                        <div class="col-md-6 d-flex">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <div class="sell-label mx-2 " for="sell-label">
                                Plant, Machinery & Commercial Vehicles</div>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-2" for="sell-label">
                                Retail Returns</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="custom-control-input" name="art" value="yes" id="sell-label">
                            <label class="sell-label mx-1" for="sell-label">
                                Watches</label>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button type="button" id="next" class="btn btn-primary btn-block">Next</button>
                        <button type="submit" id="submit" class="btn btn-primary btn-block d-none ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            'use strict'

            var registeration = document.getElementById('registeration');
            var details = document.getElementById('details');
            var preferences = document.getElementById('preferences');
            var next = document.getElementById("next");
            var submitbtn = document.getElementById("submit");
            var register = false;
            var detail = false;
            var preference = false;
            next.addEventListener("click", function () {

                const fname = document.getElementById('fname');
                const lname = document.getElementById('lname');
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const passconfirm = document.getElementById('passconfirm');
                if (fname.value.trim() === "") {
                    register = false;
                    fname.classList.add("is-invalid");
                } else {
                    fname.classList.remove("is-invalid");
                    fname.classList.add('is-valid');
                    register = true;
                }

                if (lname.value.trim() === "") {
                    register = false;
                    lname.classList.add('is-invalid');
                } else {
                    lname.classList.remove('is-invalid');
                    lname.classList.add('is-valid');
                    register = true;
                }

                const emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailregex.test(email.value)) {
                    register = false;
                    email.classList.add('is-invalid');
                } else {
                    email.classList.remove('is-invalid');
                    email.classList.add('is-valid');
                    register = true;
                }


                const passwordregex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
                if (!passwordregex.test(password.value)) {
                    register = false;
                    password.classList.add('is-invalid');
                    passconfirm.classList.add('is-invalid');
                    return false;
                } else {
                    password.classList.remove('is-invalid');
                    password.classList.add('is-valid');
                    register = true;
                }

                if (password.value != passconfirm.value) {
                    register = false;
                    passconfirm.classList.add('is-invalid');
                } else {
                    passconfirm.classList.remove('is-invalid');
                    passconfirm.classList.add('is-valid');
                    register = true;
                }

                if (register == true) {
                    registeration.classList.add('d-none');
                    details.classList.remove('d-none');
                    register = null;
                    return;
                }


                const addressline1 = document.getElementById('addressline1').value;
                const addressline2 = document.getElementById('addressline2').value;
                const addressline3 = document.getElementById('addressline3').value;
                const town = document.getElementById('town').value;
                const country = document.getElementById('country').value;



                if (register == false) {
                    return false;
                }

                if (detail == false) {
                    console.log('detail');
                    details.classList.add("d-none");
                    preferences.classList.remove("d-none");
                    next.classList.add('d-none');
                    submitbtn.classList.remove('d-none');
                    detail = true;
                    return false;
                }

                if (register && detail && !preference) {
                    console.log('preferances');
                    return false;
                }

            });

        });

        const entity = document.getElementById('entity');
        const company_condition = document.getElementById('company_condition');
        entity.addEventListener('change', () => {
            const val = entity.value;
            if (val == 2) {
                company_condition.classList.remove('d-none');
            } else {
                company_condition.classList.remove('d-none');
                company_condition.classList.add('d-none');
            }
        })

        const is_vat = document.getElementById('is_vat');
        const vat = document.getElementById('vat_num');
        is_vat.addEventListener('change', () => {
            if (is_vat.checked) {
                vat.classList.remove('d-none');
            } else {
                vat.classList.remove('d-none');
                vat.classList.add('d-none');
            }
        })

    </script>
</body>

</html>