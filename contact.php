<?php 
include_once('includes/header.php');
$date = date("Ymd");
$rand = rand(0,9999999999999);
$height = "80";
$width  = "240";
$img    = "$date$rand-$height-$width.jpgx";
if (isset($_POST['Submit'])) {
    if(file_get_contents("http://www.opencaptcha.com/validate.php?ans=".$_POST['code']."&img=".$_POST['img'])=='pass') {
        $captcha = true;
    }
    else {
        echo "<script>alert('You Did Not Fill In The Security Code Correctly');</script>";
        $captcha = false;
    }
if($captcha == true) {
require_once "Mail.php";
	
$name = $_POST['name'];
$title = $_POST['title'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$howhear = $_POST['howhear'];
$comments = $_POST['comments'];

$from = "MM Admin <admin@marsmineral.com>";
$bcc = "davelevy@levymgi.com, greg@levymgi.com";
$to = "dryhal@marsmineral.com, info@marsmineral.com, ctaylor@marsmineral.com, cvaughan@marsmineral.com, bhinkle@marsmineral.com";
$subject = "Mars Mineral Contact Form\r\n\r\n";
$body = "The following message has been submitted through the marsmineral.com contact form.\r\n
Name: ".$name."
Title: ".$title."
Company: ".$company."
Phone: ".$phone."
Email: ".$email."
Address: ".$address."
City: ".$city."
State: ".$state."
Country: ".$country."
Zip/Postal: ".$zip."
How did you hear about Mars Mineral: ".$howhear." 
Comments: ".$comments;

$host = "mail.emailsrvr.com";
$username = "admin@marsmineral.com";
$password = "LmgMM2014";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$recipients = $to.", ".$bcc;
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

//Send the mail
	$mail = $smtp->send($recipients, $headers, $body);
	if (PEAR::isError($mail)) {
	  $confirmation = "<p>" . $mail->getMessage() . "</p>";
	} else {
	  $confirmation = "<h2>Thank you. We will get back to you shortly.</h2>";
	}
}  else {
	$confirmation ="";
	$displayform = true;
}
$displayform = true;
}
$displayform = true;
?>
    
    <div id="banner">
    </div><!--banner-->
	
    <div class="content">
    	<div class="col-left">
        	
            <h1>Contact</h1>
            
            <?php echo $confirmation; ?>
            
            <?php if ($displayform == true) { ?>
            
            <p>For additional information about Mars Mineral products or services,<br />complete the form below.</p>
            
            <form action="contact.php" class="cmxform" method="post" style="width:430px;" id="contactform">

        	<p><em>*</em> denotes required field</p>
			
            <fieldset>
                <ol>
                    <li><label for="name">Name<em>*</em> </label> <input name="name" id="name" value="" type="text" /></li>
                    <li><label for="email">Email<em>*</em></label> <input name="email" id="email" value="" type="text" /></li>
                    <li><label for="title">Title </label> <input name="title" id="title" value="" type="text" /></li>
                    <li><label for="company">Company Name<em>*</em> </label> <input name="company" id="company" value="" type="text" /></li>
                    <li><label for="phone">Phone<em>*</em> </label> <input name="phone" id="phone" value="" type="text" /></li>
                    <li><label for="address">Address</label> <input name="address" id="address" value="" type="text" /></li>
                    <li><label for="city">City</label> <input name="city" id="city" value="" type="text" /></li>
                    <li><label for="state">State</label> 
                        <select name="state" id="state">
                          <option value="" selected="selected">Select state/province</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AB">Alberta</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="BC">British Columbia</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MB">Manitoba</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NB">New Brunswick</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NF">Newfoundland</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="NT">Northwest Territories</option>
                          <option value="NS">Nova Scotia</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="ON">Ontario</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="PE">Prince Edward Island</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QC">Quebec</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SK">Saskatchewan</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="YT">Yukon Territories</option>
                          <option value="AA">Military -- AA</option>
                          <option value="AE">Military -- AE</option>
                          <option value="AP">Military -- AP</option>
                          <option>Not Applicable</option>
                        </select>
                    </li>
                    <li><label for="country">Country </label> 
                    <select name="country"> 
                        <option value="" selected="selected">Select Country</option> 
                        <option selected="selected" value="United States">United States</option> 
                        <option value="Afghanistan">Afghanistan</option> 
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
                        <option value="Guinea">Guinea</option> 
                        <option value="Guinea-bissau">Guinea-bissau</option> 
                        <option value="Guyana">Guyana</option> 
                        <option value="Haiti">Haiti</option> 
                        <option value="Honduras">Honduras</option> 
                        <option value="Hong Kong">Hong Kong</option> 
                        <option value="Hungary">Hungary</option> 
                        <option value="Iceland">Iceland</option> 
                        <option value="India">India</option> 
                        <option value="Indonesia">Indonesia</option> 
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                        <option value="Iraq">Iraq</option> 
                        <option value="Ireland">Ireland</option> 
                        <option value="Israel">Israel</option> 
                        <option value="Italy">Italy</option> 
                        <option value="Jamaica">Jamaica</option> 
                        <option value="Japan">Japan</option> 
                        <option value="Jordan">Jordan</option> 
                        <option value="Kazakhstan">Kazakhstan</option> 
                        <option value="Kenya">Kenya</option> 
                        <option value="Kiribati">Kiribati</option> 
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
                        <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                        <option value="Seychelles">Seychelles</option> 
                        <option value="Sierra Leone">Sierra Leone</option> 
                        <option value="Singapore">Singapore</option> 
                        <option value="Slovakia">Slovakia</option> 
                        <option value="Slovenia">Slovenia</option> 
                        <option value="Solomon Islands">Solomon Islands</option> 
                        <option value="Somalia">Somalia</option> 
                        <option value="South Africa">South Africa</option> 
                        <option value="Spain">Spain</option> 
                        <option value="Sri Lanka">Sri Lanka</option> 
                        <option value="Sudan">Sudan</option> 
                        <option value="Suriname">Suriname</option> 
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                        <option value="Swaziland">Swaziland</option> 
                        <option value="Sweden">Sweden</option> 
                        <option value="Switzerland">Switzerland</option> 
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
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
                    </li>
                    <li><label for="zip">Zip/Postal Code</label> <input name="zip" id="zip" value="" type="text" /></li>
                    <li>How did you first hear about Mars Mineral? </li>
                    <li><label for="howhear"> </label>
                        <select name="howhear" id="howhear">
                          <option value="" selected="selected">Select one...</option>
                          <option value="Referral">Referral</option>
                          <option value="Internet Search">Internet Search</option>
                          <option value="Advertisement">Advertisement</option>
                          <option value="Trade Show">Trade Show</option>
                          <option value="Other">Other</option>
                        </select>
                    </li>
                    <li>Comments</li>
					<li><label for="comments"> </label> <textarea name="comments" id="comments" cols="50" rows="6"></textarea></li>
                                        <li><label for="captcha">Please enter the Captcha:</li>
                                        <li><?php echo "<input type='hidden' name='img' value='$img'>";
                                                echo "<a href='http://www.opencaptcha.com'><img src='http://www.opencaptcha.com/img/$img' height='$height' alt='captcha' width='$width' border='0' /></a><br />";
                                                echo "<input type=text name=code value='Enter The Code' size='35' />";
                                                ?></li>
                                        
                                        <li><label for="submit-button"> </label> <input name="submit-button" id="submit-button" type="submit" value="Send" style="font-size:1.5em;" /></li>
                </ol>
            </fieldset>
            
            <input type="hidden" name="Submit" value="true" />
            
        </form>
        <script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
			var frmvalidator  = new Validator("contactform");
			frmvalidator.addValidation("name","req","Please enter your name.");
			frmvalidator.addValidation("company","req","Please enter your company name.");
			frmvalidator.addValidation("phone","req","Please enter your phone number.");
			frmvalidator.addValidation("email","req","Please enter your email address.");
			frmvalidator.EnableMsgsTogether();
		//]]></script>
        
        <?php } ?>
        
        </div><!--col-left-->
        
        <div class="col-right">
       
            <div class="contactbox">
                <span>Mars Mineral</span>
                <div style="width:100%;text-align:left;margin-left:10px;">128 Myoma Road<br />Mars, PA 16046</div>
                <div class="clearfix"></div>
                <div style="float:left;margin-left:10px;margin-bottom:5px;">Phone: 724-538-3000<br>
                Fax: 724-538-5078<br />
                <a href="mailto:info@marsmineral.com">info@marsmineral.com</a></div>
            </div>
        	 <a href="contact-reps.php"><img src="images/mars-mineral-reps.jpg" width="390" height="97" style="float:right;"></a>
            
            <div class="contactbox directionsbox">
        	<span>Directions to Mars Mineral</span>
        	<form action="directions.php" method="post">
        	<input id="diraddress" type="text" name="diraddress" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue" value="Your address (street, city, state, zip)" /><input type="image" src="images/directions-submit.jpg" style="display:block;width:23px;height:23px;float:right;margin-right:20px;margin-top:-3px;" />
            </form>
            <iframe style="margin-top:10px;" width="330" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=128%2BMyoma%2BRd,%2BMars,%2BButler,%2BPennsylvania%2B16046&amp;aq=&amp;sll=41.117935,-77.604698&amp;sspn=6.677632,14.27124&amp;ie=UTF8&amp;hq=&amp;hnear=128+Myoma+Rd,+Mars,+Butler,+Pennsylvania+16046&amp;t=h&amp;z=14&amp;ll=40.729145,-80.031516&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=128%2BMyoma%2BRd,%2BMars,%2BButler,%2BPennsylvania%2B16046&amp;aq=&amp;sll=41.117935,-77.604698&amp;sspn=6.677632,14.27124&amp;ie=UTF8&amp;hq=&amp;hnear=128+Myoma+Rd,+Mars,+Butler,+Pennsylvania+16046&amp;t=h&amp;z=14&amp;ll=40.729145,-80.031516">View Larger Map</a></small>
        </div>

        </div><!--col-right-->
    </div>
    
    <div class="clearfix"></div>
    </div><!--content-->

<?php include_once('includes/footer.php'); ?>