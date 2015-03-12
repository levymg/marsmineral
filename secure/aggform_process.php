<?php 
$company = isset($_POST['company']) ? $_POST['company'] : "" ;
$name = isset($_POST['name']) ? $_POST['name'] : "" ;
$title = isset($_POST['title']) ? $_POST['title'] : "" ;
$email = isset($_POST['email']) ? $_POST['email'] : "" ;
$address = isset($_POST['address']) ? $_POST['address'] : "" ;
$address2 = isset($_POST['address2']) ? $_POST['address2'] : "" ;
$city = isset($_POST['city']) ? $_POST['city'] : "" ;
$state = isset($_POST['state']) ? $_POST['state'] : "" ;
$zip = isset($_POST['zip']) ? $_POST['zip'] : "" ;
$country = isset($_POST['country']) ? $_POST['country'] : "" ;
$phone = isset($_POST['phone']) ? $_POST['phone'] : "" ;
$fax = isset($_POST['fax']) ? $_POST['fax'] : "" ;

$test_type = isset($_POST['test_type']) ? $_POST['test_type'] : "" ;
$po_number = isset($_POST['po_number']) ? $_POST['po_number'] : "" ;
$return_address = isset($_POST['return_address']) ? $_POST['return_address'] : "" ;
$preferred_shipping = isset($_POST['preferred_shipping']) ? $_POST['preferred_shipping'] : "" ;
$material = isset($_POST['material']) ? $_POST['material'] : "" ;
$material_other = (isset($_POST['material_other']) && $_POST['material_other'] !== "") ? "(".$_POST['material_other'].")" : "" ;
$mixture = isset($_POST['mixture']) ? $_POST['mixture'] : "" ;

$hazardous = isset($_POST['hazardous']) ? $_POST['hazardous'] : "" ;
$msds_check = isset($_POST['msds_check']) ? $_POST['msds_check'] : "" ;
$msds = isset($_POST['msds']) ? $_POST['msds'] : "" ;

$source = isset($_POST['source']) ? $_POST['source'] : "" ;
$bulk_density = isset($_POST['bulk_density']) ? $_POST['bulk_density'] : "" ;
$moisture_content = isset($_POST['moisture_content']) ? $_POST['moisture_content'] : "" ;

$mesh10 = (isset($_POST['mesh10']) && $_POST['mesh10'] !== "") ? "10 Mesh: ".$_POST['mesh10']."\r\n" : "" ;
$mesh45 = (isset($_POST['mesh45']) && $_POST['mesh45'] !== "") ? "45 Mesh: ".$_POST['mesh45']."\r\n" : "" ;
$mesh80 = (isset($_POST['mesh80']) && $_POST['mesh80'] !== "") ? "80 Mesh: ".$_POST['mesh80']."\r\n" : "" ;
$mesh120 = (isset($_POST['mesh120']) && $_POST['mesh120'] !== "") ? "120 Mesh: ".$_POST['mesh120']."\r\n" : "" ;
$mesh200 = (isset($_POST['mesh200']) && $_POST['mesh200'] !== "") ? "200 Mesh: ".$_POST['mesh200']."\r\n" : "" ;
$mesh325 = (isset($_POST['mesh325']) && $_POST['mesh325'] !== "") ? "325 Mesh: ".$_POST['mesh325']."\r\n" : "" ;
$pan = (isset($_POST['pan']) && $_POST['pan'] !== "") ? "Pan: ".$_POST['pan']."\r\n" : "" ;

$consistency = isset($_POST['consistency']) ? $_POST['consistency'] : "" ;
$product_desired = isset($_POST['product_desired']) ? $_POST['product_desired'] : "" ;
$special_conditions = isset($_POST['special_conditions']) ? $_POST['special_conditions'] : "" ;
$binder = isset($_POST['binder']) ? $_POST['binder'] : "" ;
$production_capacity = isset($_POST['production_capacity']) ? $_POST['production_capacity'] : "" ;

$iagree = isset($_POST['iagree']) ? $_POST['iagree'] : "" ;

$message = "Company: ".$company."\r\n
Name: ".$name."\r\n
Title: ".$title."\r\n
Email: ".$email."\r\n
Address: ".$address."\r\n
Address2: ".$address2."\r\n
City: ".$city."\r\n
State: ".$state."\r\n
Zip: ".$zip."\r\n
Country: ".$country."\r\n
Phone: ".$phone."\r\n
Fax: ".$fax."\r\n

MATERIAL INFORMATION\r\n
Test Type: ".$test_type."\r\n
Purchase Order No.: ".$po_number."\r\n
Return Address: ".$return_address."\r\n
Preferred Shipping: ".$preferred_shipping."\r\n
Material: ".$material.$material_other."\r\n
Mixture: ".$mixture."\r\n

Hazardous?: ".$hazardous."\r\n

Source of Material: ".$source."\r\n
Bulk Density: ".$bulk_density."\r\n
Moisture Content: ".$moisture_content."\r\n

Sieve Analysis of the raw material:\r\n
".$mesh10.
$mesh45.
$mesh80.
$mesh120.
$mesh200.
$mesh325.
$pan."

Consistency Example: ".$consistency."\r\n
Product Desired: ".$product_desired."\r\n
Special Conditions: ".$special_conditions."\r\n
Binder: ".$binder."\r\n
Production Capacity: ".$production_capacity."\r\n


INTERNATIONAL CUSTOMERS INFORMATION\r\n
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
";


//Begin validation
	
	$vreason = "<p>The following errors occured:</p>
		<ul>";
	
	if ($company == "") {
		$vcompany = false;
		$vreason .= '<li>Please fill out the <strong>Company</strong> field</li>';
	} else {
		$vcompany = true;
	}
	if ($name == "") {
		$vname = false;
		$vname .= '<li>Please fill out the <strong>Name</strong> field</li>';
	} else {
		$vname = true;
	}
	if ($email == "") {
		$vemail = false;
		$vreason .= '<li>Please fill out the <strong>Email</strong> field</li>';
	} else {
		$vemail = true;
	}
	if ($city == "") {
		$vcity = false;
		$vreason .= '<li>Please fill out the <strong>City</strong> field</li>';
	} else {
		$vcity = true;
	}
	if ($state == "") {
		$vstate = false;
		$vreason .= '<li>Please fill out the <strong>State</strong> field</li>';
	} else {
		$vstate = true;
	}
	if ($country == "") {
		$vcountry = false;
		$vreason .= '<li>Please fill out the <strong>Country</strong> field</li>';
	} else {
		$vcountry = true;
	}
	if ($phone == "") {
		$vphone = false;
		$vreason .= '<li>Please fill out the <strong>Phone</strong> field</li>';
	} else {
		$vphone = true;
	}
	
	if ($test_type == "") {
		$vtest_type = false;
		$vreason .= '<li>Please fill out the <strong>Test Type</strong> field</li>';
	} else {
		$vtest_type = true;
	}
	if ($po_number == "") {
		$vpo_number = false;
		$vreason .= '<li>Please fill out the <strong>Purchase Order Number</strong> field</li>';
	} else {
		$vpo_number = true;
	}
	if ($return_address == "") {
		$vreturn_address = false;
		$vreason .= '<li>Please fill out the <strong>Return Address</strong> field</li>';
	} else {
		$vreturn_address = true;
	}
	if ($preferred_shipping == "") {
		$vpreferred_shipping = false;
		$vreason .= '<li>Please fill out the <strong>Preferred Shipping</strong> field</li>';
	} else {
		$vpreferred_shipping = true;
	}
	if ($material == "") {
		$vmaterial = false;
		$vreason .= '<li>Please fill out the <strong>Material</strong> field</li>';
	} else {
		$vmaterial = true;
	}
	if ($mixture == "") {
		$vphone = false;
		$vreason .= '<li>Please fill out the <strong>Mixture</strong> field</li>';
	} else {
		$vmixture = true;
	}
	
	if ($hazardous == "") {
		$vhazardous = false;
		$vreason .= '<li>Please fill out the <strong>Hazardous</strong> field</li>';
	} else {
		$vhazardous = true;
	}
	if ($consistency == "") {
		$vconsistency = false;
		$vreason .= '<li>Please fill out the <strong>Consistency</strong> field</li>';
	} else {
		$vconsistency = true;
	}
	if ($product_desired == "") {
		$vproduct_desired = false;
		$vreason .= '<li>Please fill out the <strong>Product Desired</strong> field</li>';
	} else {
		$vproduct_desired = true;
	}
	if ($special_conditions == "") {
		$vspecial_conditions = false;
		$vreason .= '<li>Please fill out the <strong>Special Conditions</strong> field</li>';
	} else {
		$vspecial_conditions = true;
	}
	if ($binder == "") {
		$vbinder = false;
		$vreason .= '<li>Please fill out the <strong>Binder</strong> field</li>';
	} else {
		$vbinder = true;
	}
	if ($production_capacity == "") {
		$vproduction_capacity = false;
		$vreason .= '<li>Please fill out the <strong>Production Capacity</strong> field</li>';
	} else {
		$vproduction_capacity = true;
	}
	if ($iagree == "") {
		$viagree = false;
		$vreason .= '<li>You must agree to the Terms and Conditions.</li>';
	} else {
		$viagree = true;
	}

//---------------------------------------------------------------------------------------------------

$to = "jake@levymgi.com";
$subject = "Agglomeration Questionnaire Form Submission";
$from = "info@marsmineral.com";

	//MSDS SHEET--------------------------------------------------------------------------------------
	if ($msds_check == "yes") {

function send($to, $subject, $message, $from, $file, $type) {

$fileName = $_FILES['msds']['name'];
$fileExt = strrchr($fileName, '.');
$fileType = $_FILES['msds']['type'];
$fileSize = $_FILES['msds']['size'];
$file = $_FILES['msds']['tmp_name'];

$content = fread(fopen($file,"r"),filesize($file));
$content = chunk_split(base64_encode($content));
$uid = strtoupper(md5(uniqid(time())));
$filename2 = basename($file).$fileExt;

$header = "From: info@marsmineral.com\r\n";
$header .= "Reply-To: $from\r\n";
$header .= "X-Priority: 3 (low)\r\n";
$header .= "X-Mailer: <LevyMG Mail Server>\r\n";
$header .= "MIME-Version: 1.0\r\n";

$header .= "Content-Type: multipart/mixed; boundary=$uid\r\n\r\n";
$header .= "This is a mulipart message in mime format\r\n\r\n";      
$header .= "--$uid\r\n";

$header .= "Content-Type: text/plain; charset=\"ISO-8859-1\"\r\n";

$header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$header .= "$message\r\n\r\n";

$header .= "--$uid\r\n";
$header .= "Content-Type: application/octet-stream name=\"$filename2\"\r\n";
$header .= "Content-Transfer-Encoding: base64\n";
$header .= "Content-Disposition: attachment; filename=\"$filename2\"\r\n\r\n";
$header .= "$content\r\n\r\n";
$header .= "--$uid--\r\n";

	mail($to, $subject, "", $header);
	$showform = false;
    return true;
	
}
	if ($vname !== false && $vcompany !== false && $vemail !== false && $vcity !== false && $vstate !== false && $vcountry !== false && $vphone !== false && $vtest_type !== false && $vpo_number !== false && $vreturn_address !== false && $vpreferred_shipping !== false && $vmaterial !== false && $vmixture !== false && $vhazardour !== false && $vconsistency !== false && $vproduct_desired !== false && $vspecial_conditions !== false && $vbinder !== false && $vproduction_capacity !== false && $viagree !== false) {
	send($to, $subject, $message, $from, $file, $type);
	$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"http://www.marsmineral.com/agglomeration-questionnaire.php\">fill out another form</a>, or continue browsing the website.</p>";
	} else {
		$confirmation = $vreason ."</ul>";
	}

} else {

$header = "From: info@marsmineral.com\r\n";
$header .= "Reply-To: info@marsmineral.com\r\n";
$header .= "X-Priority: 3 (low)\r\n";
$header .= "X-Mailer: <LevyMG Mail Server>\r\n";

//Send the mail
	if ($vname !== false && $vcompany !== false && $vemail !== false && $vcity !== false && $vstate !== false && $vcountry !== false && $vphone !== false && $vtest_type !== false && $vpo_number !== false && $vreturn_address !== false && $vpreferred_shipping !== false && $vmaterial !== false && $vmixture !== false && $vhazardour !== false && $vconsistency !== false && $vproduct_desired !== false && $vspecial_conditions !== false && $vbinder !== false && $vproduction_capacity !== false && $viagree !== false) {
		//mail ("ctaylor@marsmineral.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		//mail ("bhinkle@marsmineral.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		mail ("jake@levymgi.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		mail ("greg@levymgi.com", "Agglomeration Questionnaire Form Submission", $message, $header);
		$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"https://www.marsmineral.com/secure/agglomeration-questionnaire.html\">fill out another form</a>, or continue browsing the website.</p>";
		$showform = false;
	} else {
		$confirmation = $vreason ."</ul>";
	}

}
?>