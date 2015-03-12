<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/content.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contact Mars Mineral</title>
<!-- InstanceEndEditable --><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="Styles/undohtml.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Styles/screen.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="Styles/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- InstanceBeginEditable name="head" -->


<!-- InstanceEndEditable -->
</head>

<body>
  <div id="container">
  <img src="images/shell/header.gif" alt="Mars Mineral - Pelletizing Technology" />
     <!-- InstanceBeginEditable name="content" -->
   <div id="nav">
    <img src="images/shell/navtop.gif" alt="pellet" />
  <ul>
<li><a href="overview.htm">Company Overview</a></li>
  <li><a href="pelletizing.htm">Why Pelletizing?</a></li>
  <li><a href="pelletizing-equipment.htm">Equipment</a></li>
  <li><a href="pelletizing-systems.htm">Systems</a></li><li><a href="carbon-black.htm">Carbon Black</a></li>
  <li><a href="test-options.htm">Test Options</a></li>
  <li><a href="https://www.marsmineral.com/secure/agglomeration-questionnaire.html">Agglomeration RFQ</a></li>
  <li><a href="tech-papers.htm">Technical Papers</a></li>
  <li><a href="sales-marketing.htm">Sales &amp; Marketing</a></li>
<li><a href="news.htm">News</a></li>
  <li><a href="./contact-us.php">Contact Us</a></li>
  <li><a href="./links.htm">Links</a></li>
  <li><a href="./index.html">Home</a></li>
  </ul>  </div>
  <img src="images/pellets.jpg" alt="pellets" id="pellets"/>
<div id="content">

  <?php 

$displayform = true;

if (isset($_POST['submitted'])) {

	$name = (isset($_POST['name']) && $_POST['name'] !== "") ? $_POST['name'] : "";

	$title = (isset($_POST['title']) && $_POST['title'] !== "") ? $_POST['title'] : "";

	$company = (isset($_POST['company']) && $_POST['company'] !== "") ? $_POST['company'] : "";

	$staddress = (isset($_POST['staddress']) && $_POST['staddress'] !== "") ? $_POST['staddress'] : "";

	$city = (isset($_POST['city']) && $_POST['city'] !== "") ? $_POST['city'] : "";

	$state = (isset($_POST['state']) && $_POST['state'] !== "") ? $_POST['state'] : "";
	
	$country = (isset($_POST['country']) && $_POST['country'] !== "") ? $_POST['country'] : "";

	$zip = (isset($_POST['zip']) && $_POST['zip'] !== "") ? $_POST['zip'] : "";

	$phone = (isset($_POST['phone']) && $_POST['phone'] !== "") ? $_POST['phone'] : "";
	
	$fax = (isset($_POST['fax']) && $_POST['fax'] !== "") ? $_POST['fax'] : "";

	$email = (isset($_POST['email']) && $_POST['email'] !== "") ? $_POST['email'] : "";
	
	$industry = (isset($_POST['industry']) && $_POST['industry'] !== "") ? $_POST['industry'] : "";

	$comments = (isset($_POST['comments']) && $_POST['comments'] !== "") ? $_POST['comments'] : "";

	$source = (isset($_POST['source']) && $_POST['source'] !== "") ? $_POST['source'] : "";
	
	$readyToBuy = (isset($_POST['ready_to_buy']) && $_POST['ready_to_buy'] !== "") ? $_POST['ready_to_buy'] : "";


		$vreason = "<p style=\"color:#f00;\">The following errors occured:</p>

			<ul>";

		

		if ($email == "") {

			$vemail = false;

			$vreason .= '<li>Please fill in the <strong>Email</strong> field.</li>';

		} else {

			$vemail = true;

		}



	$headers = 'From: Mars Mineral Site' . "\r\n" .

    'Reply-To: info@marsmineral.com' . "\r\n" .

    'X-Mailer: PHP/';

	

	$emailmessage = "Name: ".$name."\r\n

Title: ".$title."\r\n

Company: ".$company."\r\n

Address 1: ".$staddress."\r\n

City: ".$city."\r\n

State: ".$state."\r\n

Zip: ".$zip."\r\n

Country: ".$country."\r\n

Phone: ".$phone."\r\n

Fax: ".$fax."\r\n

Email: ".$email."\r\n

Industry: ".$industry."\r\n

Comments: ".$comments."\r\n

Source: ".$source."\r\n

Ready to buy in: ".$readyToBuy."\r\n

";

 require_once('recaptchalib.php');
 $privatekey = "6Lei5QUAAAAAAJGgk91QEdRFmpQ8qmuBjgA1PHDH";
 $resp = recaptcha_check_answer ($privatekey,
                               $_SERVER["REMOTE_ADDR"],
                               $_POST["recaptcha_challenge_field"],
                               $_POST["recaptcha_response_field"]);

 if (!$resp->is_valid) {
   // What happens when the CAPTCHA was entered incorrectly
   die ("<p>The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        "(reCAPTCHA said: " . $resp->error . ")</p>");
 } else {

		//Send the mail
	
		if ($vemail !== false ) {
		
		//	$sendTo = "info@marsmineral.com";
		
			$sendTo = "info@marsmineral.com";
	
			mail($sendTo, "Mars Mineral", $emailmessage);
	
			$confirmation = "<div id=\"thankyou\" class=\"mt33\"><h2 style=\"font-size:1.75em;\">Thank You</h2><span>Thank you for filling out our contact form.<br />Someone will get back to you shortly.</span></div>";
	
			$displayform = false;
	
		} else {
	
			$confirmation = $vreason .'</ul>';
	
			$displayform = true;
	
		}
		
	}

}



?>
       

<h2>Contact Us</h2>
<a href="get-directions.html"><img src="images/directions.png" width="225" height="51"  /></a>

<?php echo $confirmation; ?>
              
<?php if ($displayform == true) { ?>

<form action="contact-us.php" method="post" >
    <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr align="center">
          <td colspan="2" class="note"><p>Mars Mineral<br />
            P.O. Box 719<br />
            Mars, PA 16046<br />
            tel:724-538-3000<br />
  fax:724-538-5078<br />
  email: <a href="mailto:info@marsmineral.com" style="color:#A72C23; text-decoration:none;">info@marsmineral.com</a></p>
          <h3>* Indicates a Required Field</h3></td>
        </tr>
        <tr>
          <td><label>*E-Mail</label></td>
          <td><input name="email" type="text" class="input" id="email" size="35" /></td>
        </tr>
        <tr>
          <td><label>*Name</label></td>
          <td><input name="name" type="text" class="input" id="name" size="35" /></td>
        </tr>
        <tr>
          <td><label>Title</label></td>
          <td><input name="title" type="text" class="input" id="title" size="35" /></td>
        </tr>
        <tr>
          <td><label>*Company</label></td>
          <td><input name="company" type="text" class="input" id="company" size="35" /></td>
        </tr>
        <tr>
          <td><label>Address</label></td>
          <td><input name="staddress" type="text" class="input" id="staddress" size="35" /></td>
        </tr>
        <tr>
          <td><label>City</label></td>
          <td><input name="city" type="text" class="input" id="city" size="35" /></td>
        </tr>
        <tr>
          <td><label>State</label></td>
          <td><select name="state" class="input" id="state">
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
          </select></td>
        </tr>
        <tr>
          <td><label>Zip</label></td>
          <td><input name="zip" type="text" class="input" id="zip" size="35" /></td>
        </tr>
        <tr>
          <td><label>Country</label></td>
          <td><select name="country" class="input" id="country">
            <option selected="selected">Select country</option>
            <option value="United States">United States</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
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
            <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="CG">Congo</option>
            <option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
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
            <option value="East Timor">East Timor</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
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
            <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
            <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakstan">Kazakstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic">Korea, Democratic People's Republic</option>
            <option value="Korea, Republic Of">Korea, Republic Of</option>
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
            <option value="Macau">Macau</option>
            <option value="Macedonia">Macedonia</option>
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
            <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
            <option value="Moldova, Republic Of">Moldova, Republic Of</option>
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
            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
            <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome And Principe">Sao Tome And Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia / Sandwich Isl.">South Georgia / Sandwich Isl.</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan, Province Of China">Taiwan, Province Of China</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
            <option value="Thailand">Thailand</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad And Tobago">Trinidad And Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Us Minor Outlying Isl.">Us Minor Outlying Isl.</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
            <option value="Wallis And Futuna">Wallis And Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Yugoslavia">Yugoslavia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
          </select></td>
        </tr>
        <tr>
          <td><label>*Phone</label></td>
          <td><input name="phone" type="text" class="input" id="phone" size="35" /></td>
        </tr>
        <tr>
          <td><label>Fax</label></td>
          <td><input name="fax" type="text" class="input" id="fax" size="35" /></td>
        </tr>
        <tr>
          <td><label>Industry</label></td>
          <td><input name="industry" type="text" class="input" id="industry" size="35" /></td>
        </tr>
        <tr>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td><label>How did you learn <br />
          about our Web site?</label></td>
          <td><input type="radio" name="source" value="Search Engine" />
            Search Engine<br />
              <input type="radio" name="source" value="Trade Journal Ad" />
              Trade Journal Ad<br />
              <input type="radio" name="source" value="Trade Journal Article/News Brief" />
              Trade Journal Article/News Brief<br />
              <input type="radio" name="source" value="Referral/Word of Mouth" />
              Referral/Word-of-Mouth<br />
              <input type="radio" name="source" value="Other" />
              Other (please specify)<br />
          <input type="text" name="learn_other" size="35" /></td>
        </tr>
        <tr>
          <td><label>I'm ready to buy in:</label></td>
          <td><input type="radio" name="ready_to_buy" value="1-6 months" />
1-6 months<br />
<input type="radio" name="ready_to_buy" value="6-12 months" />
6-12 months<br />
<input type="radio" name="ready_to_buy" value="12-18 months" />
12-18 months<br />
<input type="radio" name="ready_to_buy" value="more than 18 months" />
more than 18 months</td>
        </tr>
        <tr>
          <td><label>Questions, comments: </label></td>
          <td><textarea name="comments" cols="30" rows="4" wrap="VIRTUAL"></textarea></td>
        </tr>
        <tr align="center">
          <td colspan="2"><input type="checkbox" name="rep" value="have a rep call me" />
    Check the box to the left if you would like a rep to call you.</td>
        </tr>
        <tr><td colspan="2">
        <?php
 require_once('recaptchalib.php');
 $publickey = "6Lei5QUAAAAAABNiUF5-x3xnFv01F2lO2H9Pbg0y "; // you got this from the signup page
 echo recaptcha_get_html($publickey);
		 ?>

</td>
</tr>
        <tr align="center">
        
          <td colspan="2"><input type="submit" value="submit" name="submit" /></td>
        </tr>
    </table>
    <input type="hidden" name="submitted" value="true" />
</form>
<?php } ?>
</div>
<!-- InstanceEndEditable -->
<address>Mars Mineral &nbsp;&nbsp;P.O. Box 719 &#8226; Mars, PA 16046 &#8226; tel:724-538-3000 &#8226; fax:724-538-5078 &#8226; email: <a href="mailto:info@marsmineral.com" style="font-weight:normal; font-size:11px; color:#A72C23; text-decoration:none; line-height:22px;">info@marsmineral.com</a></address>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1002053-39";
urchinTracker();
</script>
</body>
<!-- InstanceEnd --></html>
