// JavaScript Document

var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = jQuery(this).find('ul').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
		
jQuery.noConflict();

jQuery(document).ready(function() {	
	jQuery(".hp-banner-description .desc").show(); //Show Banner
	jQuery(".hp-banner-description .block").animate({ opacity: 0.85 }, 1 ); //Set Opacity
	
	jQuery(".image_thumb ul li:first").addClass('active');  //Add the active class (highlights the very first list item by default)
	jQuery(".image_thumb ul li").click(function(){
		//Set Variables
		var imgAlt = jQuery(this).find('img').attr("alt"); //Get Alt Tag of Image
		var imgTitle = jQuery(this).find('a').attr("href"); //Get Main Image URL
		var imgDesc = jQuery(this).find('.block').html();  //Get HTML of the "block" container
		var imgDescHeight = jQuery(".hp-banner-description").find('.block').height(); //Find the height of the "block"
	
		if (jQuery(this).is(".active")) {  //If the list item is active/selected, then...
			return false; // Don't click through - Prevents repetitive animations on active/selected list-item
		} else { //If not active then...
			//Animate the Description
			jQuery(".hp-banner-description .desc .block").animate({ opacity: 0}, 250 , function() { //Pull the block down (negative bottom margin of its own height)
				jQuery(".hp-banner-description .desc .block").html(imgDesc).animate({ opacity: 0.85}, 250 ); //swap the html of the block, then pull the block container back up and set opacity
				//jQuery(".hp-banner-image img").attr({ src: imgTitle , alt: imgAlt}); //Switch the main image (URL + alt tag)
			});
		}
		//Show active list-item
		jQuery(".image_thumb ul li").removeClass('active'); //Remove class of 'active' on all list-items
		jQuery(this).addClass('active');  //Add class of 'active' on the selected list
		return false;
	
	}) .hover(function(){ //Hover effects on list-item
		jQuery(this).addClass('hover'); //Add class "hover" on hover
		}, function() {
		jQuery(this).removeClass('hover'); //Remove class "hover" on hover out
	});
	
	jQuery("a.collapse").click(function(){
		jQuery(".main_banner .block").slideToggle(); //Toggle the description (slide up and down)
		jQuery("a.collapse").toggleClass("show"); //Toggle the class name of "show" (the hide/show tab)
	});
	
	jQuery('#main-navigation > li').bind('mouseover', jsddm_open);
	jQuery('#main-navigation > li').bind('mouseout',  jsddm_timer);
	
	jQuery('#nav-tabs').tabify();
	
	jQuery(".product-modal").colorbox();
	
	jQuery("#list1a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#list2a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#list3a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#list4a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#list5a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#list6a").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	jQuery("#listr").accordion({ 
    	autoHeight: false, 
		navigation: true, 
		collapsible: true,
		active:false
	});
	
	jQuery("#canadian").click(function () {
  	jQuery('#location').html('<h3>British Columbia and Alberta:</h3><ul><li><strong>J and S Engineering Solutions</strong></li><li>Bay 500 - 3605 20th St NE</li><li>Calgary, AB T1Y 5W4</li><li>Phone: 403-474-2877</li><li>Fax: 502-244-1094</li><li><a href="mailto:info@climatecraft.com">info@climatecraft.com</a></li><li><a href="www.jandsengineeredsolutions.com" target="_blank">www.jandsengineeredsolutions.com</a></li></ul><h3>Other Provinces:</h3><ul><li><strong>ClimateCraft Headquarters</strong></li><li>Phone: 405-415-9230 ext 101</li><li><a href="mailto:info@climatecraft.com">info@climatecraft.com</a></li></ul>');
});
	
});//Close Function	

document.onclick = jsddm_close;
