$(document).ready(function() {
	$("#canadian").click(function () {
  	$('#location').html('<h3>Sales Representatives: Canada</h3><ul><li>Ontario, Quebec, Labrador, New Brunswick, Newfoundland, Nova Scotia, Prince Edward Island:</li><li><strong>Cassier Engineering Sales, Ltd.</strong></li><li>85 Curlew Drive</li><li>Suite 106</li><li>Don Mills, Ontario M3A 2P8</li><li>Phone: 416-298-1628</li><li>Fax: 416-298-9584</li><li><a href="mailto:cessales@accessv.com">cessales@accessv.com</a></li></ul><ul><li>All other areas:</li><li><strong>Mars Mineral</strong></li><li>P.O. Box 719</li><li>Mars, PA 16046</li><li>Phone: 724-538-3000</li><li>phone: 724-538-3000</li><li>Fax: 724-538-5078</li></ul>');
});
	$("#latinamerica").click(function () {
  	$('#location').html('<h3>Sales Representatives: Latin &amp; South America</h3><ul><li>Mexico, Columbia, Argentina, Brazil, Chile, Peru:</li><li><strong>Ventura Process Equipment Company</strong></li><li>225 Brookside Blvd.</li><li>Pittsburgh, PA 15241</li><li>Phone: 412-833-6934</li><li>Fax: 412-833-5638</li><li><a href="mailto:info@venturaprocess.com">info@venturaprocess.com</a></li></ul>');
});
	$("#australia").click(function () {
  	$('#location').html('<h3>Sales Representatives: Australia &amp; New Zealand</h3><ul><li><strong>Southern Engineering Services PTY, LTD.</strong></li><li>PO Box 363</li><li>29 Glastonbury Ave</li><li>Unanderra NSW 22526</li><li>Australia</li><li>Phone: +62 2 4283 9100</li><li><a href="mailto:steel@sesgroup.com.au">steel@sesgroup.com.au</a></li></ul>');
});
	$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
});