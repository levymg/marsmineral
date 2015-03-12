<?php 
if (isset($_POST['diraddress'])) {$diraddress = $_POST['diraddress']." ";} else {$diraddress = "";}
$loc1 = $diraddress;
include_once('includes/header.php'); ?>
    
    <div id="banner">
    </div><!--banner-->
	
    <div class="content">
    	<div class="col-left">
        
            <h1>Directions to Mars Mineral</h1>
            
            <p><a href="contact.php">&larr; Back to Contact</a> &nbsp;|&nbsp; <a href="javascript:window.print()">Print these directions</a></p>

            <div id="directions-panel"></div>
        
        </div><!--col-left-->
        
        <div class="col-right">
        
        	<div id="map_canvas" class="right"></div>
        
        </div>
        
	<div class="clearfix"></div>
    </div><!--content-->
    
<?php include_once('includes/footer.php'); ?>