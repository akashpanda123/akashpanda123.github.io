<?php
header('Access-Control-Allow-Origin: *');
require_once(dirname(__FIlE__)."/settings.php"); 
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Akash Panda | Senior Software Engineer </title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo SITE_URL;?>css/base.css">  
   <link rel="stylesheet" href="<?php echo SITE_URL;?>css/main.css">
   <link rel="stylesheet" href="<?php echo SITE_URL;?>css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="<?php echo SITE_URL;?>js/modernizr.js"></script>
	<script src="<?php echo SITE_URL;?>js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="#">Akash Panda</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#services" title="">What more do I like</a></li>
						<li><a  href="http://lovetocode.akashpanda.com" title="">Love to Code Blog</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>		
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm Akash Panda.</h1>

	   			<p class="intro-position">
	   				<span>Senior Software Engineer</span>
	   				<span>at Info Edge (India) Ltd.</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://www.facebook.com/akashpanda123" target="_blank"><i class="fa fa-facebook"></i></a></li>
         
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="<?php echo SITE_URL;?>images/profile-pic.jpg" alt="Profile Picture">

   				<p class="lead">I am a dynamic person who loves to code. I have an experience of 
   				<?php 
   				$datetime1 = date_create(date('Y-m-d'));
				$datetime2 = date_create('2015-06-08');
				$interval = date_diff($datetime2, $datetime1);
				echo $interval->format('%y Year(s) and %m month(s)');
   				?>

   				</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>I am a Computer Science and Engineering graduate from National Institute of Technology Agartala (India) and is currently employed as a Senior Software Engineer with Info Edge (India) Ltd.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Akash Panda</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>November 11, 1992</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Senior Software Engineer, Info Edge (India) Ltd.</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.akashpanda.com</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>akashpanda123@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p></p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>C</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>C++</strong>
				   </li>
				   <li>
				   	<div class="progress percent60"><span>60%</span></div>
				   	<strong>Javascript</strong>
				   </li>
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Contact Me" class="button stroke smoothscroll">Contact Me</a>
   			<a href="https://www.linkedin.com/in/akashpanda" title="Linkedin Profile" class="button button-primary">Linkedin Profile</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   			<p class="lead"></p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Senior Software Engineer</h3>
	   					<p>June 2016 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Info Edge (India) Ltd.</h4>
	   					<p>Backend development for high traffic sites.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Software Engineer</h3>
	   					<p>June 2015 - May 2016</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Info Edge (India) Ltd.</h4>
	   					<p>Backend development for high traffic sites.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Software Development Intern</h3>
	   					<p>May 2014 to July 2014</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Connectem Software Solutions Pvt. Ltd.</h4>
	   					<p>Worked on the enhancement of nwEPC source code, which is an open source framework for implementation of SGw and PGw.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>B. Tech in CSE </h3>
	   					<p>2011 to 2015 </p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>NIT Agartala, India</h4>
	   					<p></p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->




	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>More in me</h5>
   			<h1>What more do I like?</h1>

   			<p class="lead">I like a lot more things.</p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>Cricket</h3>

		            <p class="desc">I am a die hard fan of Cricket. I like to play whenever I get time. Rahul Dravid is my favorite player.
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content">	

	            	<h3>Learning</h3>  

		            <p class="desc">Learning never stops within me. I always strive to learn more and more.
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->
            <div class="service">   

               <span class="icon"><i class="icon-window"></i></span>                          

               <div class="service-content"> 

                  <h3>Team Work</h3>  

                  <p class="desc">I am a perfect team member.  
                  </p>

               </div>                             

            </div> <!-- /service -->
			  
	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	
	
   <!-- contact
   ================================================== -->
	<section id="contact">
	 <div class="overlay"></div>
	        <div class="row section-intro">
		     <div class="col-twelve">
                     <h5>Contact</h5>
                     <h1></h1>
                <p class="lead">I would love to hear from you.</p>
                </div>
         </div> <!-- /section-intro -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
   			Second Floor<br>
            D-110, Sector 40<br>
            Noida , UP<br>
            201303 INDIA
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>     me@akashpanda.com<br>
				akashpanda123@gmail.com<br>
			   	akashpandacool@hotmail.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+91) 9654 96 9108<br>
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="https://www.facebook.com/akashpanda123"><i class="fa fa-facebook"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Akash Panda <?php echo date('Y')?>.</span>          	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== -->
   <script>
   	var base_path_url = "<?php echo SITE_URL;?>";
   </script> 
   <script src="<?php echo SITE_URL;?>js/jquery-2.1.3.min.js"></script>
   <script src="<?php echo SITE_URL;?>js/plugins.js"></script>
   <script src="<?php echo SITE_URL;?>js/main.js"></script>

</body>

</html>
