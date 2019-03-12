<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<meta rel="author" content="Arvid Dezittere">
<meta lang="en">
<style>
.side-menu-wrapper { /* style menu wrapper */
	background: rgba(0,0,0,.95);
	padding: 40px 0 0 40px;
	position: fixed; /* Fixed position */
	top: 0;
	right: 0; /* Sidebar initial position. "right" for right positioned menu */
	height: 100%;
	z-index: 2;
	transition: 0.5s; /* CSS transition speed */
	width: 250px;
	font: 20px "Courier New", Courier, monospace;
	box-sizing: border-box;
}
.side-menu-wrapper > ul{ /* css ul list style */
	list-style:none;
	padding:0;
	margin:0;
    overflow-y: auto; /* enable scroll for menu items */
	height:95%;
}
.side-menu-wrapper > ul > li > a { /* links */
    display: block;
    border-bottom: 1px solid #131313;
    padding: 6px 4px 6px 4px;
    color: #989898;
    transition: 0.3s;
	text-decoration: none;
}
.side-menu-wrapper > a.menu-close { /* close button */
    padding: 8px 0 4px 23px;
    color: #6B6B6B;
    display: block;
    margin: -30px 0 -10px -20px;
    font-size: 35px;
    text-decoration: none;
}

.menu-overlay { /* overlay */
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,.7);
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
    opacity: 0;
    transition: opacity 1s;
}
</style>
<div class="menu-overlay"></div>
<a href="#" class="menu-open" title="Open Menu"><i class="fas fa-bars"></i></a>
<a href="#" style="float: right"><i class="fas fa-bell"></i></a>
<div class="side-menu-wrapper">
<a href="#" class="menu-close"><i class="fa fa-window-close" aria-hidden="true"></i></a>
<ul>
	<li><a href="http://www.google.com" target="_blank" rel="nofollow">Home</a></li>
	<li><a href="http://www.yahoo.com" target="_blank" rel="nofollow">Email</a></li>
	<li><a href="http://www.facebook.com" target="_blank" rel="nofollow">Calender</a></li>
	<li><a href="http://www.flickr.com" target="_blank" rel="nofollow">Next-Drive</a></li>
    <li><a href="">Hooks</a></li>
    <li><a href="">My Account</a></li>
</ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
var slide_wrp 		= ".side-menu-wrapper"; //Menu Wrapper
var open_button 	= ".menu-open"; //Menu Open Button
var close_button 	= ".menu-close"; //Menu Close Button
var overlay 		= ".menu-overlay"; //Overlay

//Initial menu position
$(slide_wrp).hide().css( {"right": -$(slide_wrp).outerWidth()+'px'}).delay(50).queue(function(){$(slide_wrp).show()}); 

$(open_button).click(function(e){ //On menu open button click
	e.preventDefault();
	$(slide_wrp).css( {"right": "0px"}); //move menu right position to 0
	setTimeout(function(){
		$(slide_wrp).addClass('active'); //add active class
	},50);
	$(overlay).css({"opacity":"1", "width":"100%"});
});

$(close_button).click(function(e){ //on menu close button click
	e.preventDefault();
	$(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}); //hide menu by setting right position 
	setTimeout(function(){
		$(slide_wrp).removeClass('active'); // remove active class
	},50);
	$(overlay).css({"opacity":"0", "width":"0"});
});

$(document).on('click', function(e) { //Hide menu when clicked outside menu area
	if (!e.target.closest(slide_wrp) && $(slide_wrp).hasClass("active")){ // check menu condition
		$(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}).removeClass('active');
		$(overlay).css({"opacity":"0", "width":"0"});
	}
});
</script>