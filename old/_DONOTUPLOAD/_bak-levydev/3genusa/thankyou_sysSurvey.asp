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
	call mSTDRESP_text("Third Generation System Survey Form Submission")
	call mSTDRESP_field("Email", "email", false)
	call mSTDRESP_field("Name", "name", false)
	call mSTDRESP_field("Title", "title", false)
	call mSTDRESP_field("Type of Business", "business", false)
	call mSTDRESP_field("Company", "company", false)
	call mSTDRESP_field("Address", "address", false)
	call mSTDRESP_field("City", "city", false)
	call mSTDRESP_field("State", "state", false)
	call mSTDRESP_field("Zip", "zip", false)
	call mSTDRESP_field("Phone", "phone", false)
	call mSTDRESP_field("Fax", "fax", false)
	call mSTDRESP_field("How long have you had your current phone system?", "howlong", false)
	call mSTDRESP_field("Do you own it or lease it?", "ownlease", false)
	call mSTDRESP_field("Do you use voice mail?", "voicemail", false)
	call mSTDRESP_field("How many incoming lines do you have on your phone system?", "incoming", false)
	call mSTDRESP_field("How many outgoing lines do you have on your phone system?", "outgoing", false)
	call mSTDRESP_field("How many fax lines do you have?", "faxlines", false)
	call mSTDRESP_field("How many computer lines do you have?", "computerlines", false)
	call mSTDRESP_field("What brand of phone system are you currently using?", "brand", false)
	call mSTDRESP_field("Who services your phone system?", "servicesystem", false)
	call mSTDRESP_field("Are you happy with the service it provides", "serviceprovide", false)
	call mSTDRESP_field("Do you use a headset while making calls?", "headset", false)
	call mSTDRESP_field("If you DO NOT use a headset, would you if one were provided?", "noheadset", false)
	call mSTDRESP_field("Do you use speed dialing to call outside parties?", "speeddialing", false)
	call mSTDRESP_field("Do you use paging to locate people?", "paging", false)
	call mSTDRESP_field("New telephone service wish list", "wishlist", false)
	call mSTDRESP_field("Who is your current long distance provider?", "longdistance", false)
	call mSTDRESP_field("Are you satisfied with the carrier's customer service?", "customerservice", false)
	
	if mSTDRESP_error() = "" then
	
'Send the email.
	call mSTDRESP_email("service@3genusa.com" , "service@3genusa.com", "Third Generation Contact Us Form Submission", mSTDRESP_msg())
	
'Send the fax.
	'call mSTDRESP_fax("4122011410", "To Eugene", "Eugene", "Latronics", mSTDRESP_msg())
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
    <td align="center"><img src="images/3rdgen_white.gif" width="200" height="104"></div></td>
  </tr>
  <tr> 
    <td align="center"> <% if missing_data then %> <font color="red"><b> Due to missing data, the information 
      was not sent.<br>
      Please go back to the form and enter the required information.<br>
      Missing data:<br>
      <%=mSTDRESP_error()%> </b></font> </div> <% else %> <font face="Arial, Helvetica, sans-serif"> Thank you for your 
      interest! <br>
      The message that appears below was sent to Third Generation.<br>
      </font> <pre><%=mSTDRESP_msg()%></pre> 
      <% end if %> <% if gFLglobal_trace1_active then %> <%=gFLglobal_trace1%> <% end if %> </td>
  </tr>
  <tr> 
    <td align="center"><font face="Arial, Helvetica, sans-serif"><a href="index.htm">Click 
      here</a> to return to the site.</font></td>
  </tr>
</table>
<!-- ImageReady Slices (inside.psd) -->
<!-- End ImageReady Slices -->
</BODY>
</HTML>