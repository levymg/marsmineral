$(document).ready(function() {
	$("#aggform").validate({
	debug: false,
	rules: {
		company: "required",
		name: "required",
		email: {
			required: true,
			email: true
		},
		title: "required",
		address: "required",
		city: "required",
		state: "required",
		zip: "required",
		country: "required",
		phone: "required",
		qshipping: "required",
		preferred_shipping: "required",
		material: "required",
		mixture: "required",
		hazardous: "required",
		watercheck: "required",
		envirocheck: "required",
		partconsist: "required",
		scaleup: "required",
		moreliter: "required",
		targetpellet: "required",
		iagree: "required",
	},
	messages: {
		company: "Enter your company.",
		name: "Enter your name.",
		email: "A valid email will help us get in touch with you.",
		title: "Enter your title.",
		address: "Enter your address.",
		city: "Enter your city.",
		state: "Enter your state.",
		zip: "Enter your zip.",
		country: "Enter your country.",
		phone: "Enter your phone.",
		qshipping: "Select an option.",
		preferred_shipping: "Select an option.",
		material: "Enter select a material.",
		mixture: "Select an option.",
		hazardous: "Select an option.",
		watercheck: "Select an option.",
		envirocheck: "Select an option.",
		partconsist: "Give an example.",
		scaleup: "Select an option.",
		moreliter: "Select an option.",
		targetpellet: "Enter a value.",
		iagree: "You must agree to the Testing Terms and Conditions.",
	}
	});
	$("#po1").hide();
	$("#po2").hide();
	$("#shippingaddressol").hide();
	$("#upsfedexol").hide();
	$("#creditcardol").hide();
	$("#international").hide();
	
	$(".modalwindow").colorbox({width:800, height:560});
	
});


/*$('#preferred_shipping').change(function() {
	if( $(this).val() == "Collect" ) {
      $("#upsfedexol").show();
   }
	if( $(this).val() == "Prepay and Invoice" || $(this).val() == "UPS" || $(this).val() == "Common Carrier" || $(this).val() == "Other" || $(this).val() == "") {
      $("#upsfedexol").hide();
   }
});*/

$('#postep').change(function() {
	if( $(this).val() == "poenter" ) {
      $("#po1").hide();
      $("#po2").hide();
	  $("#creditcardol").hide();
   }
   if( $(this).val() == "poenter" ) {
      $("#po1").show();
      $("#po2").hide();
	  $("#creditcardol").hide();
   }
   if( $(this).val() == "poattach" ) {
      $("#po1").hide();
      $("#po2").show();
	  $("#creditcardol").hide();
   }
   if( $(this).val() == "pocredit" ) {
      $("#po1").hide();
      $("#po2").hide();
	  $("#upsfedexccholder").show();
      $("#creditcardol").show();
   }
   if( $(this).val() == "poverbal" || $(this).val() == "") {
      $("#po1").hide();
      $("#po2").hide();
	  $("#creditcardol").hide();
   }
});

$("input[name$='qshipping']").click(function(){
	var radio_value = $(this).val();
	if (radio_value == 'yes') {
	  $("#shippingaddressol").show();
	} else if(radio_value == 'no') {
	  $("#shippingaddressol").hide();
	}
});

$('#preferred_shipping').change(function() {
   if( $(this).val() == "Collect" ) {
	  $("#upsfedexol").show();
   } else if(radio_value !== "Collect") {
	  $("#upsfedexol").hide();
}
});

$('#country').change(function() {
   if( $(this).val() !== "United States" ) {
	  $("#international").show();
	  $("#upsfedexol").show();
      $("#creditcardol").show();
   }
});
$('#sscountry').change(function() {
   if( $(this).val() !== "United States" ) {
	  $("#international").show();
	  $("#upsfedexol").show();
      $("#creditcardol").show();
   }
});

