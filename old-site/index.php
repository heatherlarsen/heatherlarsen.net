<?php
	// set up mobile redirect
	require_once 'php/mobile_detect.php';
	$detect = new Mobile_Detect;

	// check for mobile device
	if ($detect->isMobile() || $detect->isTablet()) {
		header("Location: http://m.heatherlarsen.net");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>heather larsen. || front-end/ui developer.</title>
	    <meta type="description" content="heather is a front-end developer." />
	    <meta type="keywords" content="heather larsen, web developer, front-end developer, ui developer" />
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="author" content="Heather Larsen">

	    <!-- Canonical Tag -->
	    <link rel="canonical" href="http://www.heatherlarsen.net" />
            <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.heatherlarsen.net">

	    <!-- Custom Fonts -->
	    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>

	    <!-- CSS -->
	    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
            <link href="css/main.css" rel="stylesheet" type="text/css">

            <!-- Pinterest Verify -->
            <meta name="p:domain_verify" content="216999d6c3197fe9108c293101287bd9"/>
	</head>
	
	<body>
		<div class="wrap">
			<!--[if lte IE 8]>
				<div id="ieWarning">
					This browser is best viewed in IE9+. Please consider <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">updating your browser</a> for the best experience on this site.
					<span id="ieClose">X</span>
				</div>
			<![endif]-->

			<div class="outerTop">
				<div class="subMenu">
				 	<div class="inner navBar">
				 		<a href="#s1" class="subNavBtn">Home</a> 
						<a href="#s2" class="subNavBtn">About</a>
						<a href="#s3" class="subNavBtn">Resume</a>
						<a href="#s4" class="subNavBtn">Portfolio</a>
						<a href="#s5" class="subNavBtn">Contact</a>
					</div>
				</div>

				<div class="section s1">
					<div class="inner">
						<div class="headerBox">
							<h1 class="title">HEATHER LARSEN</h1>
							<h2 class="subtitle">Front-End Web Developer</h2>
						</div>
						<!-- 
						<div class="downArrow">
							<a href="#s2" class="intLink"><span class="fa fa-angle-down"></span></a>
						</div>
						-->
					</div>
				</div>
			</div>

			<div class="section s2">
				<div class="inner">
					<div class="text">
						<h1>Hi, I'm Heather</h1>
						<p>
							Monday through Friday, I build store locators with a company called <a class="extLink" href="http://www.rioseo.com/" target="_blank">Rio SEO</a>. After hours and on weekends, you can find me perusing <a class="extLink" href="http://www.smashingmagazine.com/" target="_blank">Smashing Magazine</a>, helping maintain a local non-profit's website (<a class="extLink" href="http://theworldisfun.org/" target="_blank">The World Is Fun</a>), wandering around a farmer's market, listening to some great tunes, or having a beer at a local brewery.
						</p>
					</div>
					<div class="image">
						<img id="aboutImg" src="images/birthdayPicSm.jpg" />
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<div class="section s2extended">
				<div class="inner">
					<div class="chartWrapper">
						<div class="subject">
							<div class="header">Skill</div>
							<div class="skill" data-type="skill-1">HTML5</div>
							<div class="skill" data-type="skill-2">CSS3</div>
							<div class="skill" data-type="skill-3">jQuery</div>
							<div class="skill" data-type="skill-4">JavaScript</div>
							<div class="skill" data-type="skill-5">PHP</div>
						</div>
						<div class="level">
							<div class="header">
								<span class="levelMarker left">Basic</span>
								<span class="levelMarker center">Intermediate</span>
								<span class="levelMarker right">Advanced</span>
							</div>
							<div class="progress-wrap">
								<div class="progress-bar" data-skill-level="85"></div>
							</div>
							<div class="progress-wrap">
								<div class="progress-bar" data-skill-level="85"></div>
							</div>
							<div class="progress-wrap">
								<div class="progress-bar" data-skill-level="70"></div>
							</div>
							<div class="progress-wrap">
								<div class="progress-bar" data-skill-level="50"></div>
							</div>
							<div class="progress-wrap">
								<div class="progress-bar" data-skill-level="40"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="otherSkills col1">
						<div class="header">Knowledge Of:</div>
						<ul class="skillsList">
							<li>MySQL</li>
							<li>MongoDB</li>
							<li>Google Maps</li>
							<li>Google Analytics</li>
							<li>jQuery Mobile</li>
							<li>jQuery UI</li>
							<li>SVN</li>
							<li>SEO</li> 
							<li>AtTask</li>
							<li>Jira</li>
							<li>Podio</li>
							<li>Responsive Web Design</li>
							<li>ZURB Foundation</li>
							<li>MVC</li>
							<li>SASS</li>
							<li>Squarespace</li>
							<div class="clear"></div>
						</ul>
					</div>
					<div class="otherSkills col2">
						<div class="header">Soft Skills:</div>
						<ul class="softSkillsList">
							<li>Very organized and detail oriented</li>
							<li>Excellent time management skills</li>
							<li>Thorough user documentation &amp; bug reporting</li>
							<li>Experience teaching &amp; training new employees</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- resume -->
			<div class="section s3">
				<div class="inner">
					<h1 class="top">My Employment</h1>
					<div class="resumeCols">
						<div class="col-1">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Lead Web Developer<br /><span>Rio SEO</span></div>
									<div class="loc">San Diego, CA &amp; Seattle, WA</div>
									<div class="dates">September 2012 - Present</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-2">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Web Assistant<br /><span>University of Redlands</span></div>
									<div class="loc">Redlands, CA</div>
									<div class="dates">September 2009 - May 2010</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-3">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Lead Instructor<br /><span>iD Tech Camps</span></div>
									<div class="loc">Malibu, CA</div>
									<div class="dates">June 2009 - August 2009</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="col-2">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Web Developer<br /><span>JBE International</span></div>
									<div class="loc">Vista, CA</div>
									<div class="dates">June 2010 - September 2012</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-2">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Peer Advisor<br /><span>University of Redlands</span></div>
									<div class="loc">Redlands, CA</div>
									<div class="dates">August 2008 - December 2009</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-3">
								<div class="iconCircle">
									<span class="fa fa-briefcase"></span>
								</div>
								<span class="experience">
									<div class="role">Computer Science Instructor<br /><span>Elementary Institute of Science</span></div>
									<div class="loc">San Diego, CA</div>
									<div class="dates">June 2008 - August 2008</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>

					<h1>My Volunteer Experiences</h1>
					<div class="resumeCols">
						<div class="col-1">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-globe"></span>
								</div>
								<span class="experience">
									<div class="role">Website Coordinator<br /><span>The World Is Fun</span></div>
									<div class="loc">Seattle, WA</div>
									<div class="dates">March 2015 - Present</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-2">
								<div class="iconCircle">
									<span class="fa fa-globe"></span>
								</div>
								<span class="experience">
									<div class="role">Community Service Chair<br /><span>Alpha Sigma Pi</span></div>
									<div class="loc">Redlands, CA</div>
									<div class="dates">2009</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="col-2">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-globe"></span>
								</div>
								<span class="experience">
									<div class="role">Development Consultant<br /><span>Friend to Friend America</span></div>
									<div class="loc">Des Moines, WA</div>
									<div class="dates">July 2014 - September 2014</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="exp-2">
								<div class="iconCircle">
									<span class="fa fa-globe"></span>
								</div>
								<span class="experience">
									<div class="role">Little Buddy Volunteer<br /><span>Big Buddies</span></div>
									<div class="loc">Redlands, CA</div>
									<div class="dates">January 2008 - May 2008</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>

					<h1>My Education</h1>
					<div class="resumeCols">
						<div class="col-1">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-university"></span>
								</div>
								<span class="experience">
									<div class="role">Bachelors of Science in Computer Science<br /><span>University of Redlands</span></div>
									<div class="loc">Redlands, CA</div>
									<div class="dates">September 2006 - May 2010</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="col-2">
							<div class="exp-1">
								<div class="iconCircle">
									<span class="fa fa-university"></span>
								</div>
								<span class="experience">
									<div class="role">High School Diploma<br /><span>Granite Hills High School</span></div>
									<div class="loc">El Cajon, CA</div>
									<div class="dates">September 2002 - May 2006</div>
									<div class="desc"></div>
								</span>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!-- portfolio -->
			<div class="section s4">
				<div class="inner">
					<h1>Featured Projects</h1>
					<!-- carousel of work: 3 items -->
					<div class="carousel">
						<!-- 
						<div><a href="#project-1"><img src="images/jcpenney_whole.png"></a></div>
						<div><a href="#project-2"><img src="images/sportsauthority_whole.png"></a></div>
						<div><a href="#project-3"><img src="images/jennyDesktop.png"></a></div>
						<div><a href="#project-4"><img src="images/seesDesktop.png"></a></div>
						<div><a href="#project-5"><img src="images/bravoDesktop.png"></a></div> 
						-->
						<div class="slide slide-has-caption">
							<img src="images/jcpenney_whole.png">
							<div class="slide_caption">
								<strong>Work done at Rio SEO</strong><br />
								<strong>Released: </strong>November 2013<br />
								<strong>Project Type: </strong>Desktop &amp; Mobile Implementation<br />
								<strong>My Role: </strong>Lead Web Developer<br />
								Kickoff Call <span>></span> Development <span>></span> Production <span>></span> Maintenance<br />
								<strong>Technologies Used: </strong>HTML, CSS, jQuery, PHP<br />
								<a href="http://stores.jcpenney.com" target="_blank">Desktop Website</a>
								<a href="http://stores.jcpenney.com/mobile" target="_blank">Mobile Website</a>
							</div>
						</div>
						<div class="slide slide-has-caption">
							<img src="images/sportsauthority_whole.png">
							<div class="slide_caption">
								<strong>Work done at Rio SEO</strong><br />
								<strong>Released: </strong>September 2013<br />
								<strong>Project Type: </strong>Mobile &amp; Tablet Redesign<br />
								<strong>My Role: </strong>Lead Web Developer<br />Discovery <span>></span> Development <span>></span> Production <span>></span> Maintenance<br />
								<strong>Technologies Used: </strong>HTML, CSS, jQuery, PHP, AJAX, JSON<br />
								<a href="http://stores.sportsauthority.com/mobile" target="_blank">Mobile Website</a>
								<a href="http://stores.sportsauthority.com/index.t.html" target="_blank">Tablet Website</a>
							</div>
						</div>
						<div class="slide slide-has-caption">
							<img src="images/jennyDesktop.png">
							<div class="slide_caption">
								<strong>Work done at Rio SEO</strong><br />
								<strong>Released: </strong>April 2013 &amp; May 2014<br />
								<strong>Project Type: </strong>Desktop/Mobile Implementation &amp; Desktop Redesign<br />
								<strong>My Role: </strong>Lead Web Developer<br />
								Implementation: Kickoff Call <span>></span> Development <span>></span> Production<br />
								Redesign: Discovery <span>></span> Development <span>></span> Production<br />
								<strong>Technologies Used: </strong>HTML, CSS, jQuery, PHP<br />
								<a href="http://locations.jennycraig.com" target="_blank">Desktop Website</a>
								<a href="http://locations.jennycraig.com/mobile" target="_blank">Mobile Website</a>
							</div>
						</div>
						<div class="slide slide-has-caption">
							<img src="images/seesDesktop.png">
							<div class="slide_caption">
								<strong>Work done at Rio SEO</strong><br />
								<strong>Released: </strong>February 2014<br />
								<strong>Project Type: </strong>Desktop Redesign<br />
								<strong>My Role: </strong>Lead Web Developer<br />
								Discovery <span>></span> Development <span>></span> Production <span>></span> Maintenance<br />
								<strong>Technologies Used: </strong>HTML, CSS, jQuery, PHP<br />
								<a href="http://chocolateshops.sees.com" target="_blank">Desktop Website</a>
							</div>
						</div>
						<div class="slide slide-has-caption">
							<img src="images/bravoDesktop.png">
							<div class="slide_caption">
								<strong>Freelance Work</strong><br />
								<strong>Released: </strong>June 2013<br />
								<strong>Project Type: </strong>Desktop Development<br />
								<strong>My Role: </strong>Web Developer<br />
								Discovery <span>></span> Design <span>></span> Development <span>></span> Production<br />
								<strong>Technologies Used: </strong>HTML, CSS, jQuery, jQuery UI<br />
								<a href="http://heatherlarsen.net/bravo" target="_blank">Desktop Website</a><br />
							</div>
						</div>
					</div>

					<!-- 
					<div id="project-1" class="modalDialog">
						
					</div>
					<div id="project-2" class="modalDialog">
						
					</div>
					<div id="project-3" class="modalDialog">
						
					</div>
					<div id="project-4" class="modalDialog">
						
					</div>
					<div id="project-5" class="modalDialog">
						
					</div>
					-->
				</div>
			</div>

			<div class="section s4extended">
				<div class="inner">
					<h1 class="secondHeader">Other Clients</h1>
					<ul class="otherProjects row1">
						<li class="client">
							<a href="http://stores.advanceautoparts.com" target="_blank">
								<img src="images/clientSites/clientLogos/aapLogo.png" />
							</a>
						</li>
						<li class="client">
							<a href="http://locations.bannerhealth.com" target="_blank">
								<img src="images/clientSites/clientLogos/bannerhealthLogo.png" />
							</a>
						</li>
						<li class="client">
							<a href="http://stores.catherines.com" target="_blank">
								<img src="images/clientSites/clientLogos/catherinesLogo.png" />
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="otherProjects row2">
						<li class="client">
							<a href="http://stores.charmingcharlie.com" target="_blank">
								<img src="images/clientSites/clientLogos/charmingcharlieLogo.png" />
							</a>
						</li>
						<li class="client">
							<a href="http://locations.dressbarn.com" target="_blank">
								<img src="images/clientSites/clientLogos/dressbarnLogo.gif" />
							</a>
						</li>
						<li class="client">
							<a href="http://stores.lanebryant.com" target="_blank">
								<img src="images/clientSites/clientLogos/lanebryantLogo.png" />
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="otherProjects row3">
						<li class="client">
							<a href="http://computerstores.lenovo.com" target="_blank">
								<img src="images/clientSites/clientLogos/lenovoLogo.png" />
							</a>
						</li>
						<li class="client">
							<a href="http://locations.maurices.com" target="_blank">
								<img src="images/clientSites/clientLogos/mauricesLogo.png" />
							</a>
						</li>
						<li class="client">
							<a href="http://locations.mtb.com" target="_blank">
								<img src="images/clientSites/clientLogos/mtbLogo.png" />
							</a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>

			<!-- map -->
			<div class="section s5">
				<div class="inner">
					<!-- col1 -->
					<div class="col-1">
						<div class="col-1-inside">
							<!-- header -->
<!-- 							<h2>Get In Touch</h2> -->

							<p class="xsmall-text">
								<!-- 
I am available for freelance work! I'd love to hear all about your upcoming projects and ideas, 
								and see how I can help out. Contact me through linkedin or email. 
-->
<?php echo date('Y'); ?> &copy; Heather Larsen
							</p>

							<!-- social -->
							<div id="socialBox">
								<a class="extLink instagram" href="https://instagram.com/heathernlarsen/" target="_blank"><span class="fa fa-instagram fa-lg"></span></a>
								<a class="extLink spotify" href="https://open.spotify.com/user/heatherlarsen" target="_blank"><span class="fa fa-spotify fa-lg"></span></a>
<a class="extLink github" href="https://github.com/heatherlarsen" target="_blank"><span class="fa fa-github fa-lg"></span></a>
								<a class="extLink linkedin" href="http://www.linkedin.com/in/heatherlarsen" target="_blank"><span class="fa fa-linkedin fa-lg"></span></a>
								<a class="extLink email" href="mailto: heather@heatherlarsen.net"><span class="fa fa-envelope-o fa-lg"></span></a>
								<div class="clear"></div>
							</div>
						</div>
					</div>

					<div class="col-2">
						<!-- map -->
						<div id="outsideMap">
							<div id="map"></div>
						</div>
					</div>

					<div class="clear"></div>

					<!-- col2 -->
					<!-- 
					<div class="col-2">
						<?php //if (isset($_GET['a']) && $_GET['a'] == 's') { ?>
							<div class="success">Thank you for your inquiry. I will be in touch soon.</div>
						<?php //} else { ?>
							<form id="email" name="contact" type="POST" action="/emailMailer.php">
								<input type="text" name="name" value="name" id="" />
								<input type="email" name="email" value="example@gmail.com" id="" />
								<input type="text" name="url" value="website (optional)" />
								<textarea name="message">message</textarea>		
								<input type="submit" value="Send" />
							</form>
						<?php //} ?>
					</div>
					-->
				</div>
			</div>
		</div>

		<!-- javascript -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlO36okeuzM_6KJ89odthUzFT-wPLV9cQ&sensor=false"></script>
		<script type="text/javascript" src="js/jquery.smint.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>