<?php // contactus.php - Script 1.1

if (isset($_POST['Submit'])) {
	
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

---------MATERIAL INFORMATION----------\r\n
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
";


//Begin validation and print the variables
	
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
	if ($zip == "") {
		$vzip = false;
		$vreason .= '<li>Please fill out the <strong>Country</strong> field</li>';
	} else {
		$vzip = true;
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

$to = "bhinkle@marsmineral.com";
$subject = "Agglomeration Questionnaire Form Submission";
$from = "bhinkle@marsmineral.com";

	//MSDS SHEET--------------------------------------------------------------------------------------
	if ($msds_check == "yes" ) {

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
    $header .= "X-Mailer: <Ya-Right Mail Server>\r\n";
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
	
    return true;
	
}
	if ($vname !== false && $vcompany !== false && $vemail !== false && $vcity !== false && $vstate !== false && $vzip !== false && $vcountry !== false && $vphone !== false && $vtest_type !== false && $vpo_number !== false && $vreturn_address !== false && $vpreferred_shipping !== false && $vmaterial !== false && $vmixture !== false && $vhazardour !== false && $vconsistency !== false && $vproduct_desired !== false && $vspecial_conditions !== false && $vbinder !== false && $vproduction_capacity !== false && $viagree !== false) {
	send($to, $subject, $message, $from, $file, $type);
	$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"http://www.marsmineral.com/agglomeration-questionnaire.html\">fill out another form</a>, or continue browsing the website.</p>";
	} else {
		$confirmation = $vreason ."</ul>";
	}

} else {

	$header = "From: info@marsmineral.com\r\n";
    $header .= "Reply-To: bhinkle@marsmineral.com\r\n";
    $header .= "X-Priority: 3 (low)\r\n";
    $header .= "X-Mailer: <Ya-Right Mail Server>\r\n";
	
//Send the mail
	if ($vname !== false && $vcompany !== false && $vemail !== false && $vcity !== false && $vstate !== false && $vzip !== false && $vcountry !== false && $vphone !== false && $vtest_type !== false && $vpo_number !== false && $vreturn_address !== false && $vpreferred_shipping !== false && $vmaterial !== false && $vmixture !== false && $vhazardour !== false && $vconsistency !== false && $vproduct_desired !== false && $vspecial_conditions !== false && $vbinder !== false && $vproduction_capacity !== false && $viagree !== false) {
		mail ("bhinkle@marsmineral.com", "Agglomeration Questionnaire Form Submission", $message, $headers);
		$confirmation = "<p>Thank you for filling out our Agglomeration Questionnaire. Someone will get back to you shortly. You may <a href=\"https://www.marsmineral.com/secure/agglomeration-questionnaire.html\">fill out another form</a>, or continue browsing the website.</p>";
	} else {
		$confirmation = $vreason ."</ul>";
	}

}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Agglomeration Questionnaire from Mars Mineral</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../Styles/undohtml.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../Styles/screen.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="../Styles/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if IE 6]>
<link href="../Styles/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script src="../scripts/jquery-1.2.6.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
jQuery.noConflict();
	jQuery(document).ready(function(){
		jQuery("#addField").click( function() {
			jQuery("#nameFields").append('<li><input name="percentage[]" type="text" size="5" maxlength="5" /><label for="percentage" style="float: none;">%</label></li><li><label for="sieve_analysis">Mesh</label><input type="radio" name="sieve_analysis[]" value="mesh" id="sieve_analysis_0" /></li><li style="border: none;"><label for="sieve_analysis">Pan</label><input type="radio" name="sieve_analysis[]" value="pan" id="sieve_analysis_0" /></li>');
		});
	});
</script>
<style type="text/css" media="screen, projection">
ol#nameFields {width:385px;}
div#lbContent {width:500px;height:500px;background: #fff top left repeat-x;margin:0 auto;padding:20px;border:solid 5px #afbfc5;}
#lightbox.done {background:none;border:none;}
#lightbox {font:bold .750em Verdana, Arial, Helvetica, sans-serif;color:#000;}
</style>


<link href="../Styles/lightbox.css" rel="stylesheet" type="text/css" media="screen, projection" />

<script type="text/javascript" language="javascript">
function testFirstOption() {
	document.form1.test_type[0].selected="1";
}
function testSecondOption() {
	document.form1.test_type[1].selected="1";
}
</script>
</head>

<body>
  <div id="container">
  <img src="../images/shell/header.gif" alt="Mars Mineral - Pelletizing Technology" />
     
   <div id="nav">
    <img src="../images/shell/navtop.gif" alt="pellet" />
  <ul>
<li><a href="../overview.htm">Company Overview</a></li>
  <li><a href="../pelletizing.htm">Why Pelletizing?</a></li>
  <li><a href="../pelletizing-equipment.htm">Equipment</a></li>
  <li><a href="../pelletizing-systems.htm">Systems</a></li>
  <li><a href="../test-options.htm">Test Options</a></li>
  <li><a href="https://www.marsmineral.com/secure/agglomeration-questionnaire.html">Agglomeration RFQ</a></li>
  <li><a href="../tech-papers.htm">Technical Papers</a></li>
  <li><a href="../sales-marketing.htm">Sales &amp; Marketing</a></li>
  <li><a href="../contact-us.htm">Contact Us</a></li>
  <li><a href="../index.html">Home</a></li>
  </ul>  
   </div>

   <h1>Mars Mineral</h1>
   <div id="content">
  <h2>Agglomeration Questionnaire</h2>
  
  <?php echo $confirmation; ?>
  
     </div>
<address>Mars Mineral &nbsp;&nbsp;P.O. Box 719 &#8226; Mars, PA 16046 &#8226; tel:724-538-3000 &#8226; fax:724-538-5078 &#8226; email: <a href="mailto:info@marsmineral.com" style="font-weight:normal; font-size:11px; color:#A72C23; text-decoration:none; line-height:22px;">info@marsmineral.com</a></address>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1002053-39";
urchinTracker();
</script>
</body>
</html>
