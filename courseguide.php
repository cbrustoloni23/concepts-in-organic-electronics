<?php
session_start();
// If there’s no user_id in the session, kick them back to login.php
if (empty($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Thermal 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20080613

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Concepts in Organic Electronics</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div class="header-wrapper">
        <div> 
            <div id="titletextbox">
            <div class="site-name">
                <h1>Concepts in Organic Electronics</h1>
                <h2>By: Prof. Stephen Forrest</h2>
            </div>
            </div>
        </div>
    </div>

   
	<!-- end #header -->
 <!--   <div class="menu-wrapper"
        <div>-->
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="current_page_item"> <a href="courseguide.html">Course Guide</a></li>
			<li><a href="errata.html">Corrections and Additions</a></
			<li><a href="about.html">About</a></li>
			<li><a href="bookcontact.html">Contact</a></li>
		</ul>
	</div>
<!-- end #menu -->
<div id="page">
	<div id="content-full">
        <h2>Lecture Notes:</h2>
	<h3>Lecture notes designed for a one semester-long organic electronics courses are available to those who have registered their name and information.</h3>
	<br/>
	<br/>
        <ul>
	                 <li><a href="Week1.pdf" content="application/pdf" ><h3>Week 1&nbsp;&nbsp;</a></h3>
                                Introduction to Organic Electronics<br />
				<br/>
				<br/>
				<br/>
                                <a href="Week4.pdf" content="application/pdf"><h3>Week 4&nbsp;&nbsp;</a></h3>
                                Optical Properties - Excitons, Spin, Energy Transfer<br />
				<br/>
				<br/>
				<a href="Week7.pdf" content="application/pdf"><h3>Week 7&nbsp;&nbsp;</a></h3>
				Growth and Patterning<br/>
				<br/>
				<br/>
				<a href="Week10.pdf" content="application/pdf"><h3>Week 10&nbsp;&nbsp;&nbsp;</a></h3>
				Light Emitters -<br/>
				Displays, Lighting, and Outcoupling<br/>
				<br/>
				<a href="Week13.pdf" content="application/pdf"><h3>Week 13&nbsp;&nbsp;</a></h3>
				OPVs 2: Multijunction, Reliability and Modules<br/>
                TFTs 1: Basics, Architectures, Characteristics<br/>
                        	</li>

       
	                 <li><a href="Week2.pdf" content="application/pdf"><h3>Week 2&nbsp;&nbsp;</a></h3>
				Language, Structure, and Binding<br/>
				<br/>
				<br/>
				<br/>
                                <a href="Week5.pdf" content="application/pdf"><h3>Week 5&nbsp;&nbsp;</a></h3>
                                Electronic Properties of Organic Semiconductors 1: Energy Bands, Mobility, Charge<br />
				<br/>
	<a href="Week8.pdf" content="application/pdf"><h3>Week 8&nbsp;&nbsp;</a></h3>
				OLED Basics, Radiometry, and Chromaticity<br/>
<br/>				<a href="Week11.pdf" content="application/pdf"><h3>Week 11&nbsp;&nbsp;</a></h3>
				Light Detectors <br/>
				<br/>
				<br/>
				<a href="Week14.pdf" content="application/pdf"><h3>Week 14&nbsp;&nbsp;</a></h3>
				OTFT 2: Morphology, Reliability, and Applications<br/>
                        	</li>
	                 <li><a href="Week3.pdf" content="application/pdf"><h3>Week 3&nbsp;&nbsp;</a></h3>
				Optical Properties - Born-Oppenheimer, Franck-Condon, Fermi's Golden Rule, Transitions, Selection Rules
				<br/>
				<br/>			       
	<a href="Week6.pdf" content="application/pdf"><h3>Week 6&nbsp;&nbsp;</a></h3>
                                Electronic Properties 2: Conduction, Doping, Recombination, Heterojunctions<br />
				<br/>			
	<a href="Week9.pdf" content="application/pdf"><h3>Week 9&nbsp;&nbsp;</a></h3>
				OLED Materials, PHOLEDS, and TADF<br/>
				<br/>
				<br/>
				<a href="Week12.pdf" content="application/pdf"><h3>Week 12&nbsp;&nbsp;</a></h3>
				OPV 1- Basics, Efficiency, Transparency, and Materials<br/>
                        	</li>

		</ul>
 <p>&nbsp;</p><br>
<br/>
<br/>
   
	<p align="center" style="clear: both; margin-top: 1.5em;">Please feel free to downoad the notes, and use and distribute them as you wish. I only ask that you acknowledge their source.</p>
	<p align="center" style="clear: both; margin-top: 1.5em;">If you have any questions or comments regaring this material, please fill out this <a href="bookcontact.html">form</a>.</p>
   	</div>
        
	<!-- end #content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
	<div id="footer">
		<p>&nbsp;</p>
        <p align="left"><a class="news-footer" href="links.html"> Links |</a><a class="news-footer" href="logout.php"> Logout</a><font size="5"></p>
		<p align="right">Copyright (c) 2025 Stephen Forrest</p>
		<p align="right">All rights reserved. Design by <a class="news" href=  "http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
    <div id="endbox"></div>
    
<!-- end #footer -->
</body>
</html>
