<?php
    if(isset($_POST["submit"])){
    ob_start();

    $to = "info@sunshuvo.com.bd";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $csubject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "Receive from SUNSHUVO.COM.BD as $csubject";
    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td><strong>Message:</strong></td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    
    if(mail($to, $subject, $body, $headers)){
        header("Location: https://sunshuvo.com.bd/thankyou.html");
    }
    else{
        header("Location: https://sunshuvo.com.bd/");
    }
    
    ob_end_flush();
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
    <title>Md. Tarikul Islam</title>
    <meta name="keyword" content="HTML, SSB, Sunshuvo, Md. Tarikul Islam, HTML Basic, HTML elements, Bangladesh, Web Design, Networking, Cisco, Mikrotik, Dude, Network Plan, SDH, DWDM, SSL, Upwork, Fiverr">
	<meta name="author" content="Md. Tarikul Islam (SUNSHUVO)">
	<meta name="description" content="This site will give you a berief idea about me. What I'm doing, what I can, etc. Feel free to contact me from the cotnact section of this site.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/magnific-popup.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/themify-icons.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/nice-select.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/flaticon.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/gijgo.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/animate.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/slick.css">
    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/slicknav.css">

    <link rel="stylesheet" href="https://www.sunshuvo.com.bd/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#home">home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#services">Services</a></li>
											<!--
                                            <li><a href="works_details.html">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="works_details.html">work details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about</a></li>
                                            
											<li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
											-->
                                            <li><a href="#contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="skype:sunshuvo?call">Let’s Talk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div id="home" class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-9">
                        <div class="slider_text">
                            <h3>Hi there, I am Md. Tarikul Islam<br>
                                <span>Full-Stack Web Developer<br>Network Engineer</span></h3>
                        <!--<a class="boxed-btn3-line" href="Works.html">View Works</a>-->
                        </div>
                    </div>
                    <div class="my_img d-none d-lg-block">
                        <img src="img/about/sunshuvo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- About_area start  -->
    <div id="about" class="download_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="download_text">
                        <h3>I’m a Full-Stack web developer and network engineer, who loves to code, create, and customize. Professionally I work as Telecom Engineer beside that Web development is my growing profession.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="download_left">
                        <p>I started my professional career as a Telecom Engineer from 2012 after completing my Bachelor's program in Electrical and Electronics Engineering. From my childhood, I love to play with technology, which drives me to study EEE, but after getting my first computer in 2000 I fall in love with coding also. As the resources that were not available like nowadays, but after started university, I was involved my self in various coding like C++, Java, HTML, CSS, etc.
                        </p>
                        <p>After started a professional career it was difficult to continue that hobby. But I never stopped, besides the professional task I continue to learn various coding. Now I have a vast knowledge of HTML, CSS, PHP, MySQL. As well as my profession gives a vast knowledge of networking and telecommunication. In the networking part, I involve with Mikrotik mainly and in telecommunication SDH and DWDM network.</p>
                        <a href="files/CV%20of%20Md.%20Tarikul%20Islam%2011.25.2019.pdf" class="boxed-btn3-line">Download CV</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="progress_skills">
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Networking (Planning, Routing, Switch)</span>
                                <span>100%</span>
                            </div>
                                <div class="progress">
                                        <div class="progress-bar " role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>Telecommunication (SDH, DWDM)</span>
                                        <span>70%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar " role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>Web Design (HTML, CSS)</span>
                                        <span>70%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
						<div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>Web Development (PHP, MySQL)</span>
                                        <span>80%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About_area end  -->
	
	<!--Service Area Start-->
	<div id="services" class="service_area colord_bg">
        <div class="container">
			<div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>Services Available</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>
                                Front-end Website Design
                        </h3>
                        <p>I'm able to deliver a good quality Web design from my own idea as well as can be customized from your selected theme/template or any website of your choice. I am also able to rework on your existing website to make an interactive presentation to the viewers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>
                                Web Development
                        </h3>
                        <p>Nowadays most of the websites are dynamic so we have to go backend to make dynamic features to your website like you want to change management message or upload a new product line. For that, I can give you backend support with PHP and MySQL.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>
                                E-commerce
                        </h3>
                        <p>E-commerce becomes mo popular day by day. Most of the companies go for an e-commerce facility. I can develop an e-commerce site from scratch as well as can deploy well know e-commerce CMS like Magento, BigCommerce, Prestashop, OpenCart, etc.</p>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/4.svg" alt="" width="22%">
                        </div>
                        <h3>
                                Network Support
                        </h3>
                        <p>As a network professional, I have 9 years of experience in networking with various types of manufacturers, like Mikrotik, Cisco, Juniper. I could give you an outstanding network plan as well as necessary support to configure the network.</p>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/5.svg" alt="" width="90%">
                        </div>
                        <h3>
                                Mikrotik Support
                        </h3>
                        <p>Mikrotik is very popular to provide network equipment like a router, switch, MW equipment, etc. I have a vast knowledge of Mikrotik, so I can give you support on Mikrotik various features like Firewall, IPSEC, VPN, hotspot, and general configuration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="service_products">

        <div class="container">
            <div class="service_wrap">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="thumb">
                            <img src="img/service/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service_text padding_left">
                            <h3>Front-end Website Design</h3>
                            <p> I have several projects related to web design, the image shown here is fully designed by me from an image concept. 
								This also a responsive web page to support all off devices from 300px to 1080px perfectly, other than devices are not tested, but I believe it works in all variants of the display.
							</p>
                            <p>This is just a sample design not for professional use, I place it here to give you an idea. To order your customized front-end design contact me in any way available on the contact page.
							</p>
                            <a href="works_details.html" class="boxed-btn3-line">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_wrap">
                <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                                <div class="service_text ">
                                    <h3>Back-end Development</h3>
                                    <p>I worked on many backend projects to serve my company. I have almost 6 years of experience in PHP and MySQL. This expertise I developed from working on the ERP software Dolibarr. First I started to customize my office Dolibarr and I gain a vast knowledge of Dolibarr as well as MySQL and PHP.
									</p>
                                    <p>I can work with your existing system also to upgrade or customize your want. There are lots of opportunities when you have a dynamic website. I also can develop a customized web system as you required to run your business. 
									</p>
                                    <a href="works_details.html" class="boxed-btn3-line">View Project</a>
                                </div>
                            </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="thumb padding_left">
                            <img src="img/service/2.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
	<!--Service Area End-->

    <!-- gallery_area start  
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>My Works</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/1.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/2.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/3.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/4.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_works">
                                    <a class="boxed-btn3-line" href="#">More Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     gallery_area end  -->

        <!-- testimonial_area  
        <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title">
                            <h3>What Clients say</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form by injected humour or randomised words
                                                which don’t look even slightly believable. If you are going to use a passage.
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                                </div>
                                                <div class="author_name">
                                                    <h3>Kalvin Piterson</h3>
                                                    <span>Business Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         /testimonial_area  -->
	<!-- ================ contact section start ================= -->
	  <section id="contact" class="contact-section section_padding">
		<div class="container">
		  <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title">
                            <h3 style="color:black;">Contact Me</h3>
                        </div>
                    </div>
                </div>
		  <div class="d-none d-sm-block mb-5 pb-4">
			<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBoal1P1ZuOv9iMzzhQnXySRzEF1sjHanE&q=Happy+Homes,340/6,Dhaka" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
		  </div>


		  <div class="row">
			<div class="col-12">
			  <h2 class="contact-title">Get in Touch</h2>
			</div>
			<div class="col-lg-8">
			  <form class="form-contact contact_form" action="index.php" method="post" id="contactForm" novalidate="novalidate">
				<div class="row">
				  <div class="col-12">
					<div class="form-group">
					  
						<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
					</div>
				  </div>
				  <div class="col-sm-6">
					<div class="form-group">
					  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
					</div>
				  </div>
				  <div class="col-sm-6">
					<div class="form-group">
					  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
					</div>
				  </div>
				  <div class="col-12">
					<div class="form-group">
					  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
					</div>
				  </div>
				</div>
				<div class="form-group mt-3">
				  <button type="submit" class="button button-contactForm btn_4 boxed-btn" name="submit">Send Message</button>
				</div>
			  </form>
			</div>
			<div class="col-lg-4">
			  <div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-home"></i></span>
				<div class="media-body">
					<address>
					  <h3>Dhaka, Bangladesh.</h3>
					  <p>340/6, East Kajipara, Mirpur-1216</p>
					</address>
				</div>
			  </div>
			  <div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-tablet"></i></span>
				<div class="media-body">
				  <h3><a href="tel:+8801722581981">+88 01722 581981</a></h3>
				  <h3><a href="tel:+8801711622613">+88 01711 622613</a></h3>
				  <p>24/7</p>
				</div>
			  </div>
			  <div class="media contact-info">
				<span class="contact-info__icon"><i class="ti-email"></i></span>
				<div class="media-body">
				  <h3><a href="mailto:sunshuvo@gmail.com">sunshuvo@gmail.com</a></h3>
				  <p>Send me your query anytime!</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	<!-- ================ contact section end ================= -->
    

    <!-- footer start -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="lets_talk">
                                <h3>Do you have any Project? <a href="#">Let’s Talk</a> </h3>
                                <p>Feel free to call me any time, if you have any project related to Web design and development as well as networking support like network plan, network configuration, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
					    <div class="col-md-3">
							<a href="https://github.com/sunshuvo/">
								<div class="single_links d-flex justify-content-between align-items-center">
									<span>Github</span>
									 <i class="fa fa-github"></i> 
								</div>
							</a>
                        </div>
                        <div class="col-md-3">
							<a href="https://www.linkedin.com/in/sunshuvo">
								<div class="single_links d-flex justify-content-between align-items-center">
									<span>Linkedin</span>
									 <i class="fa fa-linkedin"></i> 
								</div>
							</a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://twitter.com/sunshuvo">
								<div class="single_links d-flex justify-content-between align-items-center">
									<span>Twitter</span>
									 <i class="fa fa-twitter"></i> 
								</div>
							</a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.facebook.com/sunshuvo">
								<div class="single_links d-flex justify-content-between align-items-center">
									<span>Facebook</span>
									 <i class="fa fa-facebook"></i> 
								</div>
							</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is customized by Md. Tarikul Islam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ footer end  -->

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>