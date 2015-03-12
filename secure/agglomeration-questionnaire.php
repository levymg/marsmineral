<?php 
$showform = true;
$confirmation = 'Please, fill in as much of this questionnaire as possible to help us understand how we may help you achieve your pelletization objectives.';
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
	$company = isset($_POST['company']) ? $_POST['company'] : "" ;
	$name = isset($_POST['name']) ? $_POST['name'] : "" ;
	$title = isset($_POST['title']) ? $_POST['title'] : "" ;
	$email = isset($_POST['email']) ? $_POST['email'] : "" ;
	$howhear = isset($_POST['howhear']) ? $_POST['howhear'] : "" ;
	
	$address = isset($_POST['address']) ? $_POST['address'] : "" ;
	$address2 = isset($_POST['address2']) ? $_POST['address2'] : "" ;
	$city = isset($_POST['city']) ? $_POST['city'] : "" ;
	$state = isset($_POST['state']) ? $_POST['state'] : "" ;
	$zip = isset($_POST['zip']) ? $_POST['zip'] : "" ;
	$country = isset($_POST['country']) ? $_POST['country'] : "" ;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : "" ;
	$fax = isset($_POST['fax']) ? $_POST['fax'] : "" ;
	
	$qshipping = isset($_POST['fax']) ? $_POST['fax'] : "" ;
	$saddress = isset($_POST['saddress']) ? $_POST['saddress'] : "" ;
	$saddress2 = isset($_POST['saddress2']) ? $_POST['saddress2'] : "" ;
	$scity = isset($_POST['scity']) ? $_POST['scity'] : "" ;
	$sstate = isset($_POST['sstate']) ? $_POST['sstate'] : "" ;
	$szip = isset($_POST['szip']) ? $_POST['szip'] : "" ;
	$scountry = isset($_POST['scountry']) ? $_POST['scountry'] : "" ;
	
	$preferred_shipping = isset($_POST['preferred_shipping']) ? $_POST['preferred_shipping'] : "" ;
	$pono = isset($_POST['pono']) ? $_POST['pono'] : "" ;
	
	$material = isset($_POST['material']) ? $_POST['material'] : "" ;
	$material_other = (isset($_POST['material_other']) && $_POST['material_other'] !== "") ? "(".$_POST['material_other'].")" : "" ;
	$mixture = isset($_POST['mixture']) ? $_POST['mixture'] : "" ;
	$mixturetext = isset($_POST['mixturetext']) ? $_POST['mixturetext'] : "" ;
	
	$hazardous = isset($_POST['hazardous']) ? $_POST['hazardous'] : "" ;
	$msds_check = isset($_POST['msds_check']) ? $_POST['msds_check'] : "" ;
	
	$source = isset($_POST['source']) ? $_POST['source'] : "" ;
	$bulk_density = isset($_POST['bulk_density']) ? $_POST['bulk_density'] : "" ;
	$moisture_content = isset($_POST['moisture_content']) ? $_POST['moisture_content'] : "" ;
	
	$watercheck = isset($_POST['watercheck']) ? $_POST['watercheck'] : "" ;
	$waterchecktext = isset($_POST['waterchecktext']) ? $_POST['waterchecktext'] : "" ;
	$envirocheck = isset($_POST['envirocheck']) ? $_POST['envirocheck'] : "" ;
	$envirochecktext = isset($_POST['envirochecktext']) ? $_POST['envirochecktext'] : "" ;
	
	$mesh10 = (isset($_POST['mesh10']) && $_POST['mesh10'] !== "") ? "10 Mesh: ".$_POST['mesh10']."\r\n" : "" ;
	$mesh45 = (isset($_POST['mesh45']) && $_POST['mesh45'] !== "") ? "45 Mesh: ".$_POST['mesh45']."\r\n" : "" ;
	$mesh80 = (isset($_POST['mesh80']) && $_POST['mesh80'] !== "") ? "80 Mesh: ".$_POST['mesh80']."\r\n" : "" ;
	$mesh120 = (isset($_POST['mesh120']) && $_POST['mesh120'] !== "") ? "120 Mesh: ".$_POST['mesh120']."\r\n" : "" ;
	$mesh200 = (isset($_POST['mesh200']) && $_POST['mesh200'] !== "") ? "200 Mesh: ".$_POST['mesh200']."\r\n" : "" ;
	$mesh325 = (isset($_POST['mesh325']) && $_POST['mesh325'] !== "") ? "325 Mesh: ".$_POST['mesh325']."\r\n" : "" ;
	$pan = (isset($_POST['pan']) && $_POST['pan'] !== "") ? "Pan: ".$_POST['pan']."\r\n" : "" ;
	$partconsist = isset($_POST['partconsist']) ? $_POST['partconsist'] : "" ;
	
	$scaleup = isset($_POST['scaleup']) ? $_POST['scaleup'] : "" ;
	$moreliter = isset($_POST['moreliter']) ? $_POST['moreliter'] : "" ;
	$morelitertext = isset($_POST['morelitertext']) ? $_POST['morelitertext'] : "" ;
	
	$targetpellet = isset($_POST['targetpellet']) ? $_POST['targetpellet'] : "" ;
	$targetmoisture = isset($_POST['targetmoisture']) ? $_POST['targetmoisture'] : "" ;
	
	$otherqualities = isset($_POST['otherqualities']) ? $_POST['otherqualities'] : "" ;
	$enduse = isset($_POST['enduse']) ? $_POST['enduse'] : "" ;
	$waterbindertext = isset($_POST['waterbindertext']) ? $_POST['waterbindertext'] : "" ;
	$production_capacity = isset($_POST['production_capacity']) ? $_POST['production_capacity'] : "" ;
	
	$iagree = isset($_POST['iagree']) ? $_POST['iagree'] : "" ;
	
$message = "Company: ".$company."\r\n
Name: ".$name."\r\n
Title: ".$title."\r\n
Email: ".$email."\r\n
How did you learn about Mars Mineral?: ".$howhear."\r\n

BILLING ADDRESS\r\n
Address: ".$address."\r\n
Address2: ".$address2."\r\n
City: ".$city."\r\n
State: ".$state."\r\n
Zip: ".$zip."\r\n
Country: ".$country."\r\n
Phone: ".$phone."\r\n
Fax: ".$fax."\r\n

SHIPPING ADDRESS\r\n
Address: ".$saddress."\r\n
Address2: ".$saddress2."\r\n
City: ".$scity."\r\n
State: ".$sstate."\r\n
Zip: ".$szip."\r\n
Country: ".$scountry."\r\n

Preferred Shipping Method: ".$preferred_shipping."\r\n

Purchase Order: ".$postep."\r\n
PO Number: ".$pono."\r\n

CREDIT CARD INFORMATION\r\n
UPS Account Number: ".$_POST['upsacc']."\r\n
FedEx Account Number: ".$_POST['fedexacc']."\r\n
Credit Card Provider: ".$_POST['cctype']."\r\n
Credit Card Number: ".$_POST['ccnum']."\r\n
Credit Card Expiration: ".$_POST['ccexp1']."/".$_POST['ccexp2']."\r\n
Security Code: ".$_POST['cvv']."\r\n
Billing Name: ".$_POST['ccname']."\r\n
Billing Address: ".$_POST['ccaddress']."\r\n
Billing City: ".$_POST['cccity']."\r\n
Billing State: ".$_POST['ccstate']."\r\n
Billing Zip/Postal Code: ".$_POST['cczip']."\r\n

MATERIAL INFORMATION\r\n
Material: ".$material.$material_other."\r\n
Is your material a mixture?: ".$mixture."\r\n
If yes, what are the specific components and what are their percentages: ".$mixturetext."\r\n

Hazardous?: ".$hazardous."\r\n
MSDS: ".$msds_check."\r\n

Source of Material: ".$source."\r\n
Bulk Density: ".$bulk_density."\r\n
Moisture Content: ".$moisture_content."\r\n

Does contact with water or other common chemicals have a detrimental effect on your material?: ".$watercheck." (".waterchecktext.")\r\n
Are there any common environmental conditions that are detrimental to your product, such as exposure to given temperatures, etc.?: ".$envirocheck." (".envirochecktext.")\r\n

Sieve Analysis of the raw material:\r\n
".$mesh10.
$mesh45.
$mesh80.
$mesh120.
$mesh200.
$mesh325.
$pan."

Please give an example of particle consistency: ".$partconsist."\r\n

TARGET PELLETS\r\n
Do you require scale up data?: ".$scaleup."\r\n
Do you require more than a liter of sample pellets?: ".$moreliter."\r\n
If yes, what quantity of finished sample pellets do you require?: ".$morelitertext."\r\n
Pellet diameter or mesh size: ".$targetpellet."\r\n
Moisture content: ".$targetmoisture."\r\n

Please note any other special qualities that are required of the finished pellets, such as compression or drop strength or attrition loss resistance.
".$otherqualities."\r\n
What is the general end use of your pellets? For example, will the pellets be recycled, packaged for a customer, or processed for disposal, etc.?
".$enduse."\r\n
Do you have a particular binder preference or knowledge of a binder or additive that may add value to your pellet?
".$waterbindertext."\r\n
What is the design production capacity in tons per hour?
".$production_capacity."\r\n
";


//MSDS SHEET--------------------------------------------------------------------------------------
if ($msds_check == "yes") {

$to = "ctaylor@marsmineral.com, bhinkle@marsmineral.com, dryhal@marsmineral.com, cvaughan@marsmineral.com";
$tolevy = "davelevy@levymgi.com";
$subject = "Agglomeration Questionnaire Form Submission";
$from = "info@marsmineral.com";
$uid = strtoupper(md5(uniqid(time())));
$mime_boundary = "==Multipart_Boundary_x{$uid}x";

$header = "From: info@marsmineral.com\r\n";
$header .= "Reply-To: $from\r\n";
$header .= "X-Priority: 3 (low)\r\n";
$header .= "X-Mailer: <LevyMG Mail Server>\r\n";
$header .= "MIME-Version: 1.0\r\n";

$header .= "Content-Type: multipart/mixed; boundary=$mime_boundary\r\n\r\n";
$header .= "This is a mulipart message in mime format\r\n\r\n";      
$header .= "--$mime_boundary\r\n";

$header .= "Content-Type: text/plain; charset=\"ISO-8859-1\"\r\n";

$header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$header .= "$message\r\n\r\n";

$header .= "--$mime_boundary\r\n";
for($i=0; $i<count($_FILES['msds']['name']); $i++) {
	$fileName = $_FILES['msds']['name'][$i];
	$fileExt = strrchr($fileName, '.');
	$fileType = $_FILES['msds']['type'][$i];
	$fileSize = $_FILES['msds']['size'][$i];
	$file = $_FILES['msds']['tmp_name'][$i];
		
	$content = fread(fopen($file,"r"),filesize($file));
	$content = chunk_split(base64_encode($content));
		
	$header .= "Content-Type: application/octet-stream name=\"$fileName\"\r\n";
	$header .= "Content-Transfer-Encoding: base64\n";
	$header .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
	$header .= "$content\r\n\r\n";
	$header .= "--$mime_boundary\r\n";
}
	
	mail($to, $subject, "", $header);
	mail($tolevy, $subject, "", $header);
	mail("greg@levymgi.com", $subject, "", $header);
	$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"https://www.marsmineral.com/secure/agglomeration-questionnaire.php\">fill out another form</a>, or continue browsing the website.</p>";
	$showform = false;

} else {

$subject = "Agglomeration Questionnaire Form Submission";
$from = "info@marsmineral.com";

$header = "From: info@marsmineral.com\r\n";
$header .= "Reply-To: info@marsmineral.com\r\n";
$header .= "X-Priority: 3 (low)\r\n";
$header .= "X-Mailer: <LevyMG Mail Server>\r\n";

//Send the mail
		mail ("ctaylor@marsmineral.com, bhinkle@marsmineral.com, dryhal@marsmineral.com, cvaughan@marsmineral.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		mail ("davelevy@levymgi.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		mail ("greg@levymgi.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"https://www.marsmineral.com/secure/agglomeration-questionnaire.php\">fill out another form</a>, or continue browsing the website.</p>";
		$showform = false;

}
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="In order for us to analyze your material for Agglomeration purposes, complete this form." />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<meta name="keywords" content="Mars Mineral, Agglomeration Questionnaire" />
<title>Mars Mineral - Agitation Agglomeration Equipment - Agglomeration Questionnaire</title>
<link type="text/css" href="styles/reset.css" rel="stylesheet" media="screen" />
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 569px), only screen and (min-device-width: 569px)" href="styles/basic.css" />
<link type="text/css" rel="stylesheet" media="only screen and (max-width: 568px), only screen and (max-device-width: 568px)" href="styles/small-device.css" />
<link type="text/css" rel="stylesheet" media="only screen and (max-width: 568px), only screen and (max-device-width: 568px)" href="styles/responsive-nav.css" />
<link type="text/css" rel="stylesheet" href="styles/colorbox.css" media="screen" />
<link type="text/css" rel="stylesheet" href="styles/print.css" media="print" />
<!--[if lt IE 9]>
   <link type="text/css" rel="stylesheet" media="screen" href="styles/basicie8.css" />
<![endif]-->
<script src="scripts/responsive-nav.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>	
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.js"></script>
<script type="text/javascript" src="scripts/bbq.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.wizard.js"></script>
<script type="text/javascript" src="scripts/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="scripts/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
</head>
<body>
<img src="images/mars-mineral-logo-bw.jpg" class="printonly">
<div id="header">
    <a href="index.php"><img src="images/mars-mineral-logo.jpg" alt="Mars Mineral Logo" id="logo" /></a>
    <div id="tagline">The leader in agitation agglomeration &mdash;<br>the conversion of fine powders and dusts<br>into spherical pellets.</div>
</div>

<div id="nav">
    <ul>
        <li><a href="http://www.marsmineral.com/index.php">Home</a></li>
        <li><a href="http://www.marsmineral.com/about.php">About</a></li>
        <li><a href="http://www.marsmineral.com/why-pelletize.php">Why Pelletize</a></li>
        <li><a href="http://www.marsmineral.com/equipment-and-systems.php">Equipment &amp; Systems</a></li>
        <li><a href="http://www.marsmineral.com/test-options.php">Test Options</a></li>
        <li><a href="http://www.marsmineral.com/tech-papers.php">Tech Papers</a></li>
        <li><a href="http://www.marsmineral.com/reps.php">Reps</a></li>
        <li><a href="http://www.marsmineral.com/news.php">News</a></li>
        <li><a href="http://www.marsmineral.com/contact.php">Contact</a></li>
    </ul>
</div><!--main-nav-->
        
<div class="clearfix"></div>
    
    <div id="banner">
    </div><!--banner-->
    
    <div class="content">
    	<div class="col-left">
        	
            <h1>Agglomeration Questionnaire</h1>

<?php echo $confirmation; 

if ($showform == true) {
?>

<form action="agglomeration-questionnaire.php" method="post" enctype="multipart/form-data" class="cmxform" id="aggform">
<div id="results"></div>

<p><em>*</em> Indicates required field</p>

<fieldset class="step">
    <ol>
    	<li><h3>Contact Information</h3></li>
        <li><label for="company">Company<em>*</em></label><input name="company" type="text" /></li>
        <li><label for="name">Name<em>*</em></label><input name="name" type="text" /></li>
        <li><label for="title">Title<em>*</em></label><input name="title" type="text" /></li>
        <li><label for="email">Email<em>*</em></label><input name="email" type="text" /></li>
        <li><label for="howhear">How did you learn about Mars Mineral?</label>
            <select name="howhear" id="howhear">
              <option value="" selected="selected">Select one...</option>
              <option value="Referral">Referral</option>
              <option value="Internet Search">Internet Search</option>
              <option value="Advertisement">Advertisement</option>
              <option value="Trade Show">Trade Show</option>
              <option value="Other">Other</option>
            </select>
        </li>

    	<li><h3>Billing Address</h3></li>
        <li><label for="address">Address<em>*</em></label><input name="address" type="text" /></li>
        <li><label for="address2">Address 2</label><input name="address2" type="text" /></li>
        <li><label for="city">City<em>*</em></label><input name="city" type="text" /></li>
        <li><label for="state">State<em>*</em></label>
            <select name="state" class="input" id="state">
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
        <li><label for="zip">Zip/Postal Code<em>*</em></label><input name="zip" type="text" /></li>
        <li><label for="country">Country<em>*</em></label>
            <select name="country" class="input" id="country">
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
            <option value="Guineabissau">Guinea-bissau</option>
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
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
            <option value="South Georgia / Sandwich Isl.">South Georgia/Sandwich Isl.</option>
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
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis And Futuna">Wallis And Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Yugoslavia">Yugoslavia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </li>
        <li><label for="phone">Phone<em>*</em></label><input name="phone" type="text" /></li>
        <li><label for="fax">Fax</label><input name="fax" type="text" /></li>
        <li>
            <fieldset>
            <legend>Is your shipping address different from the billing address above?<em>*</em></legend>
            <label><input name="qshipping" value="yes" type="radio">Yes</label>
            <label><input name="qshipping" value="no" type="radio">No</label>
            </fieldset>
    	</li>
    </ol>

    <ol id="shippingaddressol">
    	<li><h3>Shipping Address</h3></li>
    	<li><label for="attn">Attention</label><input name="attn" type="text" /></li>
        <li><label for="saddress">Address<em>*</em></label><input name="saddress" type="text" /></li>
        <li><label for="saddress2">Address 2</label><input name="saddress2" type="text" /></li>
        <li><label for="scity">City<em>*</em></label><input name="scity" type="text" /></li>
        <li><label for="sstate">State<em>*</em></label>
            <select name="sstate" class="input" id="state">
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
        <li><label for="szip">Zip/Postal Code<em>*</em></label><input name="szip" type="text" /></li>
        <li><label for="scountry">Country<em>*</em></label>
            <select name="scountry" class="input" id="scountry">
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
            <option value="Guineabissau">Guinea-bissau</option>
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
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
            <option value="South Georgia / Sandwich Isl.">South Georgia/Sandwich Isl.</option>
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
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis And Futuna">Wallis And Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Yugoslavia">Yugoslavia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </li>
    </ol>
    <ol>
    	<li><label for="preferred_shipping">Preferred Shipping Method<em>*</em></label></li>
        <li>
            <select name="preferred_shipping" id="preferred_shipping">
            <option value="" selected="selected">Select one...</option>
            <option value="Collect">Collect (must provide UPS or FedEx account number)</option>
            <option value="Prepay and Invoice">Prepay and Invoice</option>
            <option value="UPS">UPS</option>
            <option value="Common Carrier">Common Carrier</option>
            <option value="Other">Other</option>
            </select>
    	</li>
    </ol>
    <ol>
    	<li><label for="postep">Purchase Order</label>
            <select name="postep" id="postep">
              <option value="selectone" selected="selected">Select one...</option>
              <option value="poenter">Enter your PO #</option>
              <option value="pocredit">Enter credit card information</option>
              <option value="poverbal">Verbal Only</option>
            </select>
        </li>
        <li id="po1"><label for="pono">Your PO #</label><input name="pono" type="text" /></li>
    </ol>
</fieldset>


<fieldset class="step">
<legend></legend>
    <ol id="upsfedexol">
        <li id="international"><strong style="font-size:1.25em;">International customers</strong> must provide valid United Parcel Service (UPS) or Federal Express shipping account number or Visa, MasterCard, Discover or American Express information before authorization may be obtained to ship materials to Mars Mineral.  Please include credit card provider, account number, expiration date and name as it appears on the card.</li>
        <li><label for="upsacc">UPS Account #</label> <input name="upsacc" id="upsacc" value="" type="text" /></li>
        <li><label for="fedexacc">FedEx Account #</label> <input name="fedexacc" id="fedexacc" value="" type="text" /></li>
    </ol>
    <ol id="creditcardol">
        <li><label for="cctype">Credit Card Provider</label>
            <select name="cctype" id="cctype">
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Discover">Discover</option>
            <option value="AMEX">American Express</option>
            </select>
        </li>
        <li><label for="ccnum">Credit Card Number</label><input name="ccnum" id="ccnum" value="" type="text" /></li>
        <li><label for="ccexp">Credit Card Expiration</label><input style="width:50px;" name="ccexp1" id="ccexp" value="" type="text" width="4" /> / <input style="width:50px;" name="ccexp2" id="ccexp2" value="" type="text" width="4" /></li>
        <li><label for="cvv">Card Security Code (3 or 4 digit code on the front or back of card)</label> <input name="cvv" id="cvv" value="" type="text" style="width:50px;" width="4" /></li>
        <li><label for="ccname">Name (as it appears on card)</label> <input name="ccname" id="ccname" value="" type="text" /></li>
        <li>Fill in the billing address below if different than the contact information above.</li>
        <li><label for="ccaddress">Address</label><input name="ccaddress" type="text" /></li>
        <li><label for="cccity">City</label><input name="cccity" type="text" /></li>
        <li><label for="ccstate">State</label>
            <select name="ccstate" class="input" id="state">
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
        <li><label for="cczip">Zip/Postal Code</label><input name="cczip" type="text" /></li>
    </ol>
</fieldset>


<fieldset class="step">
    <ol>
    	<li><h3>Material Information</h3></li>
        <li>
        <label for="material" >Select Your Material<em>*</em></label>
        <select name="material">
        <option value="Alumina" selected="selected">Alumina</option>
        <option value="Activated Carbon">Activated Carbon</option>
        <option value="Agricultural Lime">Agricultural Lime</option>
        <option value="Alkali Dust">Alkali Dust</option>
        <option value="Alloy Steel">Alloy Steel</option>
        <option value="Aluminum Dust">Aluminum Dust</option>
        <option value="Aluminum Dross">Aluminum Dross</option>
        <option value="Aluminum Hydrate">Aluminum Hydrate</option>
        <option value="Aluminum Kiln">Aluminum Kiln</option>
        <option value="Aluminum Oxide">Aluminum Oxide</option>
        <option value="Aluminum Potassium">Aluminum Potassium</option>
        <option value="Aluminum Silicate">Aluminum Silicate</option>
        <option value="Ammonium Sulfate">Ammonium Sulfate</option>
        <option value="Ammonium Carbamate">Ammonium Carbamate</option>
        <option value="Ammonium Nitrate">Ammonium Nitrate</option>
        <option value="Anthracite Coal">Anthracite Coal</option>
        <option value="Animal Nutrients">Animal Nutrients</option>
        <option value="AOD Baghoude">AOD Baghoude</option>
        <option value="Asbestos">Asbestos</option>
        <option value="Ascorbic Acid">Ascorbic Acid</option>
        <option value="Ash Garbage">Ash - Garbage</option>
        <option value="Ash Wood">Ash - Wood</option>
        <option value="Atrizine Herbicide">Atrizine Herbicide</option>
        <option value="Ball Mill Dust">Ball Mill Dust</option>
        <option value="Barley Flour">Barley Flour</option>
        <option value="Barium Hydroxide">Barium Hydroxide</option>
        <option value="Basalt Rock Dust">Basalt Rock Dust</option>
        <option value="Bauxite">Bauxite</option>
        <option value="Beet Lime">Beet Lime</option>
        <option value="Bentonite">Bentonite</option>
        <option value="Bio Solids">Bio Solids</option>
        <option value="Bituminous Coal">Bituminous Coal</option>
        <option value="Blast Furnace Dust">Blast Furnace Dust</option>
        <option value="Blood  Spray Dried">Blood - Spray Dried</option>
        <option value="Blood Meal">Blood Meal</option>
        <option value="BOF Dust">BOF Dust</option>
        <option value="Borax">Borax</option>
        <option value="Borob Furnace Dust">Borob Furnace Dust</option>
        <option value="Bottom Ash">Bottom Ash</option>
        <option value="Brake Lining Dust">Brake Lining Dust</option>
        <option value="Briquette Baghouse">Briquette Baghouse</option>
        <option value="Cadmium Dust">Cadmium Dust</option>
        <option value="Calcined Alumina">Calcined Alumina</option>
        <option value="Calcined Kaolin">Calcined Kaolin</option>
        <option value="Calcined Pertoleum">Calcined Pertoleum</option>
        <option value="Calcium Hydroxide">Calcium Hydroxide</option>
        <option value="Calcium Aluminate">Calcium Aluminate</option>
        <option value="Calcium Borate">Calcium Borate</option>
        <option value="Calcium Carbonate">Calcium Carbonate</option>
        <option value="Calcium Fluoride">Calcium Fluoride</option>
        <option value="Calcium Magnesium">Calcium Magnesium</option>
        <option value="Calcium Silicate">Calcium Silicate</option>
        <option value="Calcium Soap">Calcium Soap</option>
        <option value="Calcium Sterate">Calcium Sterate</option>
        <option value="Calcium Sulfate">Calcium Sulfate</option>
        <option value="Carbide Powder">Carbide Powder</option>
        <option value="Carbon">Carbon</option>
        <option value="Carbon Black">Carbon Black</option>
        <option value="Carbon Ink">Carbon Ink</option>
        <option value="Carbon Graphite">Carbon Graphite</option>
        <option value="Cathode Mix">Cathode Mix</option>
        <option value="Cement Kiln Dust">Cement Kiln Dust</option>
        <option value="Cerium Oxide">Cerium Oxide</option>
        <option value="Char Fines">Char Fines</option>
        <option value="Chicken Litter">Chicken Litter</option>
        <option value="Clay">Clay</option>
        <option value="Coal Dust">Coal Dust</option>
        <option value="Coal Filter Cake">Coal Filter Cake</option>
        <option value="Cobalt">Cobalt</option>
        <option value="Coke">Coke</option>
        <option value="Colloidal Silica">Colloidal Silica</option>
        <option value="Copper Filter Cake">Copper Filter Cake</option>
        <option value="Copper E.S.P. Dust">Copper E.S.P. Dust</option>
        <option value="Copper Furnace Dust">Copper Furnace Dust</option>
        <option value="Copper Reverts">Copper Reverts</option>
        <option value="Copper Ore">Copper Ore</option>
        <option value="Corn Flour">Corn Flour</option>
        <option value="Crystalline Silica">Crystalline Silica</option>
        <option value="Cupola Dust">Cupola Dust</option>
        <option value="Cyanuric Acid">Cyanuric Acid</option>
        <option value="Desulfurization Ash">Desulfurization Ash</option>
        <option value="Diatomaceous Earth">Diatomaceous Earth</option>
        <option value="Diatomite">Diatomite</option>
        <option value="Dicalcium Phosphate">Dicalcium Phosphate</option>
        <option value="Dolomitic Limestone">Dolomitic Limestone</option>
        <option value="Dried Sludge">Dried Sludge</option>
        <option value="Electric Furnace">Electric Furnace</option>
        <option value="Feathermeal">Feathermeal</option>
        <option value="Ferro Manganese">Ferro Manganese</option>
        <option value="Ferro Silica">Ferro Silica</option>
        <option value="Ferroalloy Dust">Ferroalloy Dust</option>
        <option value="Ferrosilicon">Ferrosilicon</option>
        <option value="Ferrous Sulfate">Ferrous Sulfate</option>
        <option value="Fertilizer">Fertilizer</option>
        <option value="Fiberclay">Fiberclay</option>
        <option value="Fiberglass">Fiberglass</option>
        <option value="Filter Cake">Filter Cake</option>
        <option value="Fishmeal">Fishmeal</option>
        <option value="Flotation Concentrate">Flotation Concentrate</option>
        <option value="Flue Dust">Flue Dust</option>
        <option value="Fluorspar">Fluorspar</option>
        <option value="Flyash">Flyash</option>
        <option value="Foundry Dust">Foundry Dust</option>
        <option value="Foundry Sand">Foundry Sand</option>
        <option value="Foundry Scale">Foundry Scale</option>
        <option value="Frit and Silica Dust">Frit and Silica Dust</option>
        <option value="Furnace Dust Georgia Clay">Furnace Dust Georgia Clay</option>
        <option value="Glass Dust">Glass Dust</option>
        <option value="Glass Fiber">Glass Fiber</option>
        <option value="Glass Filled TFE">Glass Filled TFE</option>
        <option value="Glass Fines  Ground">Glass Fines - Ground</option>
        <option value="Glass Sludge">Glass Sludge</option>
        <option value="Gold Tailings">Gold Tailings</option>
        <option value="Grain Dust">Grain Dust</option>
        <option value="Graphite">Graphite</option>
        <option value="Graphite Resin">Graphite Resin</option>
        <option value="Gypsum">Gypsum</option>
        <option value="Gypsum  Synthetic">Gypsum - Synthetic</option>
        <option value="Gypsum Slurry">Gypsum Slurry</option>
        <option value="Humus">Humus</option>
        <option value="Incinerator Dust">Incinerator Dust</option>
        <option value="Iron Dust">Iron Dust</option>
        <option value="Iron Ore">Iron Ore</option>
        <option value="Iron Oxide">Iron Oxide</option>
        <option value="Iron Oxide  Cupola">Iron Oxide - Cupola</option>
        <option value="Iron Oxide  Red">Iron Oxide - Red</option>
        <option value="Iron Oxide  EAF">Iron Oxide - EAF</option>
        <option value="Iron Rich Clay">Iron Rich Clay</option>
        <option value="Iron Sludge">Iron Sludge</option>
        <option value="Kaolin">Kaolin</option>
        <option value="Keichen Stellite">Keichen Stellite</option>
        <option value="Kiln Dust">Kiln Dust</option>
        <option value="Kish">Kish</option>
        <option value="Kynar">Kynar</option>
        <option value="Lasalocid">Lasalocid</option>
        <option value="Lawn Nugget">Lawn Nugget</option>
        <option value="Leach Residue">Leach Residue</option>
        <option value="Lead Battery Mix">Lead Battery Mix</option>
        <option value="Lead Battery Mud">Lead Battery Mud</option>
        <option value="Lead Blast Furnace">Lead Blast Furnace</option>
        <option value="Lead Oxide">Lead Oxide</option>
        <option value="Light Weight Aggregate">Light Weight Aggregate</option>
        <option value="Lime">Lime</option>
        <option value="Lime Hydrate">Lime Hydrate</option>
        <option value="Lime Kiln Dust">Lime Kiln Dust</option>
        <option value="Limestone">Limestone</option>
        <option value="Litharge">Litharge</option>
        <option value="Magnesium Chloride">Magnesium Chloride</option>
        <option value="Magnesium Fluoride">Magnesium Fluoride</option>
        <option value="Magnesium Oxide">Magnesium Oxide</option>
        <option value="Manganese">Manganese</option>
        <option value="Manganese Dioxide">Manganese Dioxide</option>
        <option value="Manganese Ore">Manganese Ore</option>
        <option value="Manganese Oxide">Manganese Oxide</option>
        <option value="Manure Ash">Manure Ash</option>
        <option value="Metallic Grindings">Metallic Grindings</option>
        <option value="Metallurgical Coke">Metallurgical Coke</option>
        <option value="Milorganite">Milorganite</option>
        <option value="Municipal Sludge">Municipal Sludge</option>
        <option value="Nickel">Nickel</option>
        <option value="Nickel/Cobalt Swarf">Nickel/Cobalt Swarf</option>
        <option value="Nickel/Cobalt Cake">Nickel/Cobalt Cake</option>
        <option value="Nickel Oxide">Nickel Oxide</option>
        <option value="Nickel Powder">Nickel Powder</option>
        <option value="Nickel Sulfate">Nickel Sulfate</option>
        <option value="Nitrogen Fertilizer">Nitrogen Fertilizer</option>
        <option value="Organic Fertilizer">Organic Fertilizer</option>
        <option value="Paper Dust">Paper Dust</option>
        <option value="Peanut Hulls">Peanut Hulls</option>
        <option value="Peat">Peat</option>
        <option value="Peat Moss">Peat Moss</option>
        <option value="Perlite">Perlite</option>
        <option value="Petroleum Coke">Petroleum Coke</option>
        <option value="Phenolic Resin">Phenolic Resin</option>
        <option value="Phosphate Clay">Phosphate Clay</option>
        <option value="Phosphate Powder">Phosphate Powder</option>
        <option value="Pigment">Pigment</option>
        <option value="Pond Slime">Pond Slime</option>
        <option value="Potassium Sulfate">Potassium Sulfate</option>
        <option value="Refractory Dust">Refractory Dust</option>
        <option value="Rock Fines">Rock Fines</option>
        <option value="Rockwool">Rockwool</option>
        <option value="Rutile Flour">Rutile Flour</option>
        <option value="Salt Furnace Dust">Salt Furnace Dust</option>
        <option value="Sand Foundry">Sand-Foundry</option>
        <option value="Sander Dust">Sander Dust</option>
        <option value="Scheelite Concentrate">Scheelite Concentrate</option>
        <option value="Scrubber Sludge">Scrubber Sludge</option>
        <option value="Sewage Sludge">Sewage Sludge</option>
        <option value="Shale">Shale</option>
        <option value="Shot Peening Dust">Shot Peening Dust</option>
        <option value="Silica Fume">Silica Fume</option>
        <option value="Silica Gel">Silica Gel</option>
        <option value="Silicon">Silicon</option>
        <option value="Silicon Carbide">Silicon Carbide</option>
        <option value="Silicon Metal Powder">Silicon Metal Powder</option>
        <option value="Silicon Nitride Powder">Silicon Nitride Powder</option>
        <option value="Silver Nitrate">Silver Nitrate</option>
        <option value="Sinter Baghouse">Sinter Baghouse</option>
        <option value="Sinter Mix">Sinter Mix</option>
        <option value="Soda Ash">Soda Ash</option>
        <option value="Sodium Chloride">Sodium Chloride</option>
        <option value="Sodium Chlorite">Sodium Chlorite</option>
        <option value="Sodium Polyacrylate">Sodium Polyacrylate</option>
        <option value="Sodium Sulfate">Sodium Sulfate</option>
        <option value="Sodium Tetraborate">Sodium Tetraborate</option>
        <option value="Soy Flour">Soy Flour</option>
        <option value="Soy Lecithin">Soy Lecithin</option>
        <option value="Spent Lime">Spent Lime</option>
        <option value="Stainless Steel Dust">Stainless Steel Dust</option>
        <option value="Steel BOF">Steel - BOF</option>
        <option value="Steel AOD">Steel - AOD</option>
        <option value="Steel EAF">Steel - EAF</option>
        <option value="Sugar Beet Lime">Sugar Beet Lime</option>
        <option value="Sulfur">Sulfur</option>
        <option value="Sulfur Cake">Sulfur Cake</option>
        <option value="Sunflower Ash">Sunflower Ash</option>
        <option value="Swarf Taconite">Swarf Taconite</option>
        <option value="Talc">Talc</option>
        <option value="Tin Concentrate">Tin Concentrate</option>
        <option value="Tin Dust">Tin Dust</option>
        <option value="Tri Calcium Phosphate">Tri-Calcium Phosphate</option>
        <option value="Trona">Trona</option>
        <option value="Tungsten Carbide">Tungsten Carbide</option>
        <option value="Tungsten Powder">Tungsten Powder</option>
        <option value="Urea">Urea</option>
        <option value="Virgin TFE">Virgin TFE</option>
        <option value="Volcanic Rock Fines">Volcanic Rock Fines</option>
        <option value="Weld Powder">Weld Powder</option>
        <option value="Wood Flyash">Wood Flyash</option>
        <option value="Zeolite">Zeolite</option>
        <option value="Zinc">Zinc</option>
        <option value="Zinc Dross">Zinc Dross</option>
        <option value="Zinc Oxide">Zinc Oxide</option>
        <option value="Zinc Sterate">Zinc Sterate</option>
        <option value="Other">Other</option>
        </select>
        </li>
        <li><label>If you selected "Other" above, please specify:</label> <input name="material_other" id="material_other"  type="text"></li>
        <li>
        <fieldset>
            <legend>Is your material a mixture?<em>*</em></legend>
            <label><input name="mixture" value="yes" type="radio">Yes</label>
            <label><input name="mixture" value="no" type="radio">No</label>
        </fieldset>
        </li>
        <li>If yes, what are the specific components and what are their percentages:</li>
        <li><textarea name="mixturetext" cols="30" rows="5"></textarea></li>
        <li>
        <fieldset>
            <legend>Is the material hazardous?<em>*</em></legend>
            <label><input name="hazardous" value="yes" type="radio">Yes</label>
            <label><input name="hazardous" value="no" type="radio">No</label>
        </fieldset>
        </li>
        <li>
        <fieldset>
            <legend>Do you have a Material Safety Data Sheet (MSDS)?<em>*</em></legend>
            <label><input name="msds_check" value="yes" type="radio">Yes</label>
            <label><input name="msds_check" value="no" type="radio">No</label>
        </fieldset>
        </li>
        <li><label for="msds">Attach your current MSDS</label><input type="file" name="msds[]" id="msds" multiple="multiple" /></li>
        <li><strong>Note: You may select multiple files by holding "Ctrl" when browsing</strong>.</li>
        </ol>
</fieldset>

<fieldset class="step">
    <ol>    
    	<li><label for="source">What is the source of the material?</label><input name="source" type="text" /></li>
        <li><label for="bulk_density">Aerated Bulk Density: pounds per cubic ft.</label><input name="bulk_density" type="text" /></li>
        <li><label for="moisture_content">Moisture Content</label><input name="moisture_content" type="text" size="4" />%</li>
        <li>
        <fieldset>
            <legend style="width:395px;">Does contact with water or other common chemicals have a detrimental effect on your material?<em>*</em></legend>
            <label><input name="watercheck" value="yes" type="radio">Yes</label>
            <label><input name="watercheck" value="no" type="radio">No</label>
        </fieldset>
        </li>
        <li>If yes, please explain.</li>
        <li><textarea name="waterchecktext" cols="40" rows="3"></textarea></li>
        <li>
        <fieldset>
            <legend style="width:395px;">Are there any common environmental conditions that are detrimental to your product, such as exposure to given temperatures, etc.?<em>*</em></legend>
            <label><input name="envirocheck" value="yes" type="radio">Yes</label>
            <label><input name="envirocheck" value="no" type="radio">No</label>
        </fieldset>
        </li>
        <li>If yes, please explain.</li>
        <li><textarea name="envirochecktext" cols="40" rows="3" type="text"></textarea></li>
    </ol>
</fieldset>

<fieldset class="step">
    <ol>
    	<li><h3>Sieve Analysis of the raw material</h3></li>
		<li>(Fill in desired percent of mesh or pan retained)</li>
        <li><label for="mesh10">10 mesh</label><input name="mesh10" type="text" size="4" />%</li>
        <li><label for="mesh45">45 mesh</label><input name="mesh45" type="text" size="4" />%</li>
        <li><label for="mesh80">80 mesh</label><input name="mesh80" type="text" size="4" />%</li>
        <li><label for="mesh120">120 mesh</label><input name="mesh120" type="text" size="4" />%</li>
        <li><label for="mesh200">200 mesh</label><input name="mesh200" type="text" size="4" />%</li>
        <li><label for="mesh325">325 mesh</label><input name="mesh325" type="text" size="4" />%</li>
        <li><label for="pan">PAN</label><input name="pan" type="text" size="4" />%</li>
        <li>Please give an example of particle consistency, such as flour, sand, fibers, lumps, etc.<em>*</em></li>
        <li><textarea name="partconsist" cols="40" rows="3"></textarea></li>
    </ol>
</fieldset>

<fieldset class="step">
<ol>
	<li><h3>Test Objectives</h3></li>
    <li><a href="../pdf/Test Package_2014.pdf" target="_blank">View Test Options Chart</a></li>
    <li>
    <fieldset>
        <legend>Do you require scale up data?<em>*</em></legend>
        <label><input name="scaleup" value="yes" type="radio">Yes</label>
        <label><input name="scaleup" value="no" type="radio">No</label>
    </fieldset>
    </li>
    <li>
    <fieldset>
        <legend>Do you require more than a liter of sample pellets?<em>*</em></legend>
        <label><input name="moreliter" value="yes" type="radio">Yes</label>
        <label><input name="moreliter" value="no" type="radio">No</label>
    </fieldset>
    </li>
    <li>If yes, what quantity of finished sample pellets do you require?</li>
    <li><textarea name="morelitertext" cols="40" rows="3"></textarea></li>
</ol>
</fieldset>

<fieldset class="step">
<ol>
	<li><h3>Target Pellets</h3></li>
    <li>Please describe the finished pellets that you want to produce.</li>
    <li><label>Pellet diameter or mesh size<em>*</em></label><input name="targetpellet" type="text" /></li>
    <li><label>Moisture content</label><input name="targetmoisture" type="text" size="4" />%</li>
</ol>
</fieldset>

<fieldset class="step">
    <ol>
        <li>Please note any other special qualities that are required of the finished pellets, such as compression or drop strength or attrition loss resistance.</li>
        <li><textarea name="otherqualities" cols="40" rows="4"></textarea></li>
        <li>What is the general end use of your pellets?  For example, will the pellets be recycled, packaged for a customer, or processed for disposal, etc.?</li>
        <li><textarea name="enduse" cols="40" rows="4"></textarea></li>
        <li>Water is the binder of choice, at least to establish a base for gauging the affect of other binding agents. Several binders are available for evaluation.  Do you have a particular binder preference or knowledge of a binder or additive that may add value to your pellet?</li>
        <li><textarea name="waterbindertext" cols="40" rows="4"></textarea></li>
        <li>What is the design production capacity in tons per hour?</li>
        <li><input name="production_capacity" type="text" /></li>
    </ol>
    <input type="hidden" name="MAX_FILE_SIZE" value="524288000" />
</fieldset>

<fieldset class="step">
        <ol>
		<li class="iagreeli"><label for="iagree" style="width:100%;"><input name="iagree" type="checkbox" value="I Agree" /> I agree to the <a href="http://www.marsmineral.com/test-options.php#TC" target="_blank">Testing Terms and Conditions</a>.<em>*</em></label></li>
	</ol>
</fieldset>

<fieldset class="step">
    <ol>
    <li><label for="captcha">Please enter the Captcha:</li>
                                        <li><?php echo "<input type='hidden' name='img' value='$img'>";
                                                echo "<a href='http://www.opencaptcha.com'><img src='http://www.opencaptcha.com/img/$img' height='$height' alt='captcha' width='$width' border='0' /></a><br />";
                                                echo "<input type=text name=code value='Enter The Code' size='35' />";
                                                ?></li>
                                        
                                        <li><label for="submit-button"> </label> <input name="submit-button" id="submit-button" type="submit" value="Send" style="font-size:1.5em;" /></li>
    </ol>
</fieldset>

<input type="hidden" name="Submit" value="true">

<input type="submit" value="Submit Form" name="SubmitBtn">

</form>
<script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
/*	var frmvalidator  = new Validator("aggform");
	frmvalidator.addValidation("name","req","Please enter your name.");
	frmvalidator.EnableMsgsTogether();
	*/
//]]></script>

<?php } ?>
   
        </div><!--col-left-->
        
        <div class="col-right">
        	
        	<h3>Your Information is Secure</h3>
            
            <p>This page utilizes Secure Sockets Layer (SSL) data encryption software to protect your data. <a href="http://www.marsmineral.com/contact.php">Contact us</a> to learn more.</p>
            
            <p><a href="http://www.marsmineral.com/test-options.php">&larr; Return to Test Options</a></p>

        </div><!--col-right-->
    </div>
    
    <div class="clearfix"></div>
    </div><!--content-->
    
<?php include_once('includes/footer.php'); ?>