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
	call mSTDRESP_text("Mars Mineral Contact Us Form Submission")
	call mSTDRESP_field("E-mail", "email", 100)
	call mSTDRESP_field("Name", "name", 100)
	call mSTDRESP_field("Title", "title", false)
	call mSTDRESP_field("Company", "company", 100)
	call mSTDRESP_field("Address", "address", false)
	call mSTDRESP_field("City", "city", false)
	call mSTDRESP_field("State", "state", false)
	call mSTDRESP_field("Zip", "zip", false)
	call mSTDRESP_field("Country", "country", false)
	call mSTDRESP_field("Phone", "phone", 100)
	call mSTDRESP_field("Fax", "fax", false)
	call mSTDRESP_field("Your Industry", "industry", false)
	call mSTDRESP_field("How did you learn about our website?", "learnabout", true)
	call mSTDRESP_field("Other", "learn_other", true)
	call mSTDRESP_field("I'm ready to buy in", "ready_to_buy", true)
	call mSTDRESP_field("Questions, comments", "questions_comments", false)
	call mSTDRESP_field("Checked", "rep", true)
	
	if mSTDRESP_error() = "" then
	
'Send the email.
	call mSTDRESP_email("leads@levymgi.com" , "bhinkle@marsmineral.com", "Mars Mineral Contact Us Form Submission", mSTDRESP_msg())
	'call mSTDRESP_email("leads@levymgi.com" , "lyndastewart@levymgi.com", "Mars Mineral Contact Us Form Submission", mSTDRESP_msg())
	
'Send the fax.
	call mSTDRESP_fax("7245385078", "To Bob Hinkle", "Bob Hinkle", "Mars Mineral", mSTDRESP_msg())
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
	<img src="images/logo.gif" alt="Mars Mineral logo" style="margin: 0px 6px 3px 6px;" /> 
      <% if missing_data then %>
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
<a href="http://www.marsmineral.com/contact-us.htm">Click  here to return to the  site.</a></div>
</BODY>
</HTML>