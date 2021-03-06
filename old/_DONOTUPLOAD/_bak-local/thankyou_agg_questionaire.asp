<% OPTION EXPLICIT %>
<!-- #INCLUDE VIRTUAL="/Public/Includes/adovbs.inc" -->
<!-- #INCLUDE VIRTUAL="/Public/Includes/FLglobal03_inc.asp" -->
<!-- #INCLUDE VIRTUAL="/Public/Includes/FLstdresp03_inc.asp" -->
<!-- #INCLUDE VIRTUAL="/Public/Includes/FLstdresp03fax_inc.asp" -->

<%

dim missing_data
missing_data = false

'This is how to verify that a submit button was pressed to run this ASP.
If (Request.ServerVariables ("REQUEST_METHOD") = "POST") then
	'A POST method means a submit button was pressed.
	'Process the information from the calling form.
	call do_send_message()
else
	'Got here directly -- probably a search engine or webtrends.
	'Generate error message and do not send email or fax.
	call mFLglobal_clear()
	call mSTDRESP_init(15)
	call mSTDRESP_text(" ")
	call mSTDRESP_text("You cannot link to this form.")
	call mSTDRESP_text("No information was sent.")
	call mSTDRESP_text(" ")
	
end if

Function do_send_message()
	dim source_form

'This clears out any old info:
	call mFLglobal_clear()

'Send the email and/or fax.
'Start by setting up the message itself.
	call mSTDRESP_init(5)
	call mSTDRESP_text("Mars Mineral Agglomeration Questionaire Submission")
	
	call mSTDRESP_text("Your information:")
	call mSTDRESP_field("Name", "name", 100)
	call mSTDRESP_field("E-mail", "email", 100)
	call mSTDRESP_field("Phone", "phone", 100)
	call mSTDRESP_field("Fax", "fax", false)
	call mSTDRESP_field("Company", "company", 100)
	call mSTDRESP_field("Title", "title", false)
	call mSTDRESP_field("Address", "address", false)
	call mSTDRESP_field("City", "city", false)
	call mSTDRESP_field("State", "state", false)
	call mSTDRESP_field("Zip", "zip", false)
	call mSTDRESP_field("Contact", "contact", false)
	
	call mSTDRESP_field("Type of test required, from test option list:", "test_type", false)
	call mSTDRESP_field("Your Purchase Order No.", "po_number", true)
	call mSTDRESP_field("All materials sent for testing must be returned. Please advise the shipping address the material is to be returned to:", "return_address", false)
	call mSTDRESP_field("Common name of the material:", "material_name", false)
	call mSTDRESP_field("If the material is a mixture, what are the specific components and what are their percentages:", "mixture", false)
	call mSTDRESP_field("Is the material hazardous? ", "hazardous", false)
	call mSTDRESP_field("What is the source of the material?", "source", false)
	call mSTDRESP_text("Bulk Density: PCF.", "bulk_density", false)
	call mSTDRESP_text("Moisture Content:", "moisture_content", false)
	
	call mSTDRESP_text("If sieve analysis is not available, please give an example of particle consistency, such as flour, sand, fibers, lumps etc.", "consistency", false)
	call mSTDRESP_field("Product desired from the testing (pellet diameter or mesh size)", "product_desired", true)
	call mSTDRESP_field("Please note any special conditions that are required of the finished pellet, such as pellet strength, moisture content, will the pellet be recycled, packaged or for disposal etc. Water is the binder of choice, at least to establish a base for gauging the affect of other binding agents. Several binders are available for evaluation. ", "special_conditions", true)
	call mSTDRESP_field("Do you have a preference of binder choice or knowledge of materials that could be detrimental to your pelletized product?", "binder", false)
	call mSTDRESP_field("What is the design production capacity in TPH?", "production_capacity", false)
	call mSTDRESP_text("")

	
	if mSTDRESP_error() = "" then
	
'Send the email.
	'call mSTDRESP_email("leads@levymgi.com" , "bhinkle@marsmineral.com", "Mars Mineral Agglomeration RFQ Form Submission", mSTDRESP_msg())
	call mSTDRESP_email("leads@levymgi.com" , "eugenekuhns@levymgi.com", "Mars Mineral Agglomeration Questionaire Submission", mSTDRESP_msg())
	
'Send the fax.
	'call mSTDRESP_fax("7245385078", "To Bob Hinkle", "Bob Hinkle", "Mars Mineral", mSTDRESP_msg())
else
		missing_data = true
	end if

end function
%>

<HTML>
<HEAD>
<TITLE>Thank You!</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="../css/content.css" rel="stylesheet" type="text/css">
<link href="Styles/screen.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div style="text-align:center; position:absolute; left:50%; width:500px; margin-top:20px; margin-left:-266px; padding:15px;">
	<img src="images/logo.gif" alt="Mars Mineral logo" style="margin: 0px 6px 3px 6px;" />  <% if missing_data then %>
       <p>Due to missing data, the information was not sent.
                  Please go back to the form and enter the required information.
                  Missing data:
      <%=mSTDRESP_error()%></p>  
      <% else %>
       <p>Thank you for your interest!<br/>
      The message that appears below was sent to Mars Mineral. </p> 
      
       <pre><%=mSTDRESP_msg()%></pre>
                  <% end if %>
                  <% if gFLglobal_trace1_active then %>
                  <%=gFLglobal_trace1%> 
                  <% end if %>
<a href="http://www.marsmineral.com/agglomeration-RFQ.htm">Click  here to return to the  site.</a></div>
</BODY>
</HTML>