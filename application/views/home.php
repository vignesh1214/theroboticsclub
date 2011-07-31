<html> 
<head> 
<title>Welcome to the robotics club!</title> 
<?= link_tag(base_url().'css/main.css'); ?>
<?= link_tag(base_url().'css/print.css'); ?>
<?= link_tag(base_url().'css/screen.css'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js" type="text/javascript"></script> 
<script type="text/javascript"> 
 
$(document).ready(function(){
 
	$("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
 
	$("ul.topnav li span").click(function() { //When trigger is clicked...
 
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click
 
		$(this).parent().hover(function() {
		}, function(){
			$(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});
 
		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() {
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
 
});
 
 
 
</script> 
</head> 
<body> 
<div class="container"> 
	
	
	<div class="span-24 last"> 
		<div class="span-8">&nbsp;</div> 
		<div class="span-8"> 
			<p class="logo_h"<a href="/"> 
			<img src=<?=base_url()."images/logo.png"?> /></p> 
			</a> 
		</div> 
		<div class="span-8 last">&nbsp;</div> 
	</div> 
	 
	
	<div class="span-24 last"> 
	
		<div class="navigation"> 
		
			<ul class="topnav"> 
			    <li><a href="#">Home</a></li> 
			    <li><a href="home/news">News</a></li> 
			    <li> 
			        <a href="home/exhibitions">Exhibitions</a> 
			        <ul class="subnav"> 
			            <li><a href="#">Photo Gallery</a></li> 
			            <li><a href="#">Videos</a></li> 
			        </ul> 
			    </li> 
			    <li> 
			        <a href="home/groundzero">Ground Zero</a> 
			        <ul class="subnav"> 
			            <li><a href="#">Constructa</a></li> 
			            <li><a href="#">Energy Contraption</a></li> 
			        </ul> 
			    </li> 
			    <li><a href="#">Hands On</a></li> 
			    <li><a href="#">My Innovation</a></li> 
			    <li><a href="#">Quiz Mania</a></li> 
			    <li><a href="#">About Us</a></li> 
			    <li><a href="#">Contact Us</a></li> 
			    <li><a href="#">FAQ</a></li> 
			   
			</ul>				
		</div> 
	
	</div> 
	<div class="span-1">&nbsp;
	</div> 
	<div class="span-14"> 
		<div class="welcome_msg_header"> 
			Welcome to The Robotics Club!
		</div> 
		<h1><span class="welcome_msg_sub">DIRECTOR'S MESSAGE</span></h1> 
		<div class="welcome_msg_content"><br> 
			I am immensly pleased to share my vision on the robotics club of our University. It's a laudable and laurel initiative of the co-ordinators and the students of the Mechanical Engineering Dept.A wide knowledge on the robots, design of the microcontroller, details of the sensor and basics on programming, the club gave a glorious presentation of the technological innovations in science and Engineering. I was inspired and cajoled by the outstanding concepts contributed on mechanics and capabilities of the students through energy contraption. This club will not only build a platform for the students to promote their career growth but it will also bring a domain in the field of Robotics. I bid a hearty success for their future endeavours.<br /> 
			<br /> 
			<h1><span class="welcome_msg_sub">MESSAGE FROM THE DEAN'S DESK</span></h1> 
		<div class="welcome_msg_content"> 
		'Robotics Club' is an ideal platform for dissemination of information regarding various developments taking place in Robotics field to the students' community. The initiation n taken by the students of Vadapalani campus and the Mechanical 
Engineering Faculty members, Mr. Krishna Balaji and Ms.Zarana Chouksey in establishing the club at the Vadapalani campus is highly appreciated. I wish the club member all the success in conducting various robotics activities under the banner of Robotics Club.
</div> 
			
		</div> 
	</div> 
	
	
	
	
	<div class="span-2">&nbsp;
	</div> 
	
	<div class="span-6"> 
		
		<div class="login_msg_header"> 
			Member Login
		</div> 
		
	
	
	<form method="get" action="#" class="inline"> 
      <div class="column span-4"> 
        <label for="input1">Reg No:</label> 
      </div> 
      <div class="column span-8 last"> 
        <input type="text" name="input1" id="input1"> 
      </div> 
      
      <div class="column span-4"> 
        <label for="input3">Password:</label> 
      </div> 
 
      <div class="column span-8 last"> 
        <input type="password" name="input3" id="input3"> 
      </div> 
     
      <div class="column span-8 last"> 
        <button>Login</button> 
      </div> 
    </form> 
		
	</div> 
		
	</div> 
	
	<div class="span-1 last">&nbsp;
	</div> 
 
 
		
	
	
	
</div> 
</body> 
</html>
