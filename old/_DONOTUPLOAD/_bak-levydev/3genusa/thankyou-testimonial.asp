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
	call mSTDRESP_text("Third Generation Testimonial Form Submission")
	call mSTDRESP_field("Name", "name", 100)
	call mSTDRESP_field("Title", "title", 100)
	call mSTDRESP_field("E-mail", "email", 100)
	call mSTDRESP_field("Company", "company", 100)
	call mSTDRESP_field("Testimonial", "testimonial", false)
	
	if mSTDRESP_error() = "" then
	
'Send the email.
	call mSTDRESP_email("mray@3genusa.com" , "mray@3genusa.com", "Third Generation Testimonial Form Submission", mSTDRESP_msg())
	
'Send the fax.
	'call mSTDRESP_fax("4122011410", "To Eugene", "Eugene", "company name", mSTDRESP_msg())
else
		missing_data = true
	end if

end function
%>
<HTML>
<HEAD>
<TITLE>Thank You!</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<table width="500" border="0" align="default" cellpadding="3" cellspacing="3">
  <tr> 
    <td align="center"><img src="images/THIRDGENERATION.gif" width="200" height="102"></div></td>
  </tr>
  <tr> 
    <td align="center"> <% if missing_data then %> <strong> Due to missing data, the information 
      was not sent.<br>
      Please go back to the form and enter the required information.<br>
      Missing data:<br>
      <%=mSTDRESP_error()%> </strong> </div> <% else %>  Thank you for your 
      interest! <br>
      The message that appears below was sent to Third Generation.<br>
       <pre><%=mSTDRESP_msg()%></pre> 
      <% end if %> <% if gFLglobal_trace1_active then %> <%=gFLglobal_trace1%> <% end if %> </td>
  </tr>
  <tr> 
    <td align="center"><a href="index.htm">Click 
      here</a> to return to the site.</td>
  </tr>
</table>
<!-- ImageReady Slices (inside.psd) -->
<!-- End ImageReady Slices -->
</BODY>
</HTML>