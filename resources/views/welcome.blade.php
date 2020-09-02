<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Red Art - Digital Painting</title>
	
    <meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />    
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="style.css" type="text/css" media="all" />
	
    <!-- **Additional - stylesheets** -->
    <link href="css/animations.css" rel="stylesheet" type="text/css" media="all" />
	<link id="shortcodes-css" href="css/shortcodes.css" rel="stylesheet" type="text/css" media="all"/>
    <link id="skin-css" href="skins/red/style.css" rel="stylesheet" media="all" />
    <link href="css/isotope.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/pace.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
    
	<link id="light-dark-css" href="dark/dark.css" rel="stylesheet" media="all" />

    <!-- **Font Awesome** -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
	
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script> 
</head>

<body>
    <div class="loader-wrapper">
        <div id="large-header" class="large-header">
            <h1 class="loader-title"><span>Impact</span> Creative Arts</h1>
        </div>        
    </div>
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
    	<div id="header-wrapper" class="dt-sticky-menu"> <!-- **header-wrapper Starts** -->
			<div id="header" class="header">
            	<div class="container menu-container">
                    <a class="logo" href="#">
                    <img alt="Logo" src="images/logo.png" id="firstLogo">
                    <img alt="Logo" src="images/logo.png" id="secondLogo" style="filter: invert(1); display:none;">
                    </a>
                    <input type="hidden" id="logoStyle" value="1">
                    <a href="#" class="menu-trigger" onclick="logoStyling()">
                        <span></span>
                    </a>
                </div>
            </div>
			
            <nav id="main-menu"><!-- Main-menu Starts -->
                <div id="dt-menu-toggle" class="dt-menu-toggle">
                    Menu
                    <span class="dt-menu-toggle-icon"></span>
                </div>            	
                <ul class="menu type1"><!-- Menu Starts -->
                    <li class="current_page_item menu-item-simple-parent"><a href="#">Home <span class="fa fa-home"></span></a>
                                         
                    </li>
                    <li class="menu-item-simple-parent">
                        <a href="#">About us <span class="fa fa-user-secret"></span></a>
                    </li>
                    <li class="menu-item-simple-parent"><a href="#">Gallery <span class="fa fa-camera-retro"></span></a>
                                        
                    </li>
                    <li class="menu-item-simple-parent"><a href="#">Blog <span class="fa fa-pencil-square-o"></span></a>
                                       
                    </li>
                    <li class="menu-item-simple-parent">
                        <a href="#">contact<span class="fa fa-map-marker"></span></a>
                    </li>                                        
                </ul> <!-- Menu Ends -->
            </nav> <!-- Main-menu Ends -->            
        </div><!-- **header-wrapper Ends** -->
        <div class="slider-container">
            <div class="slider fullwidth-section parallax"></div>
        </div>
        <div id="main">
			<section id="primary" class="content-full-width"> <!-- **Primary Starts Here** -->  
                      
            	<div class="dt-sc-hr-invisible-small"></div>
                
                <div class="fullwidth-section"> <!-- **Full-width-section Starts Here** -->
                    <div class="container">
                        <div class="main-title animate" data-animation="pullDown" data-delay="100">
                            <h2 class="aligncenter"> Portfolio </h2>
                            <p> </p>
                        </div>
                    </div>
                    <div class="dt-sc-sorting-container">
                    <a data-filter="*" href="#" title = "All" class="dt-sc-tooltip-top active-sort type1 dt-sc-button animate" data-animation="fadeIn" data-delay="100">All</a>
                        @foreach($cat as $key => $value)                    
                        <a data-filter=".{{$value->name}}" href="#" title = "{{$value->name}}" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="{{($key + 2) * 100}}">{{$value->name}}</a>
                        @endforeach
                    </div>
                    <div class="portfolio-fullwidth">
                    	<div class="portfolio-grid">
                            <div class="dt-sc-portfolio-container isotope"> <!-- **dt-sc-portfolio-container Starts Here** -->
                               @foreach($portfolio as $key => $value)
                                <div class="portfolio {{$value->categoryData->name}} dt-sc-one-fourth">
                                    <figure>
                                        <img src="{{ Voyager::image( $value->image )}}" alt="" title="">
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="{{ Voyager::image( $value->image )}}"></a><span>{{$key + 1}}</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5>{{$value->title}}</h5>
                                                    <p>{{$value->subheading}}</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </div><!-- **dt-sc-portfolio-container Ends Here** -->
                        </div>
                    </div>
                </div><!-- **Full-width-section Ends Here** -->
                <div class="clear"></div>              
                <div class="container">
                    <div class="main-title animate" data-animation="pullDown" data-delay="100">
                        <h2 class="aligncenter"> Blog </h2>
                        <p> </p>
                    </div>
                </div>	
                <div class="fullwidth-section"><!-- **Full-width-section Starts Here** -->
                @foreach($blog as $key => $value)
                	<div class="blog-section">
                        @if($key % 2 == 0)
                        <article class="blog-entry">
                            <div class="entry-thumb">
                                <ul class="blog-slider">
                                @foreach (json_decode($value->images) as $image)
                                    <li> <img src="{{ Voyager::image( $image )}}" alt="" title=""> </li>
                                    @endforeach
                                </ul>
                            </div> 
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="#">{{$value->title}}</a></h3>
                                </div>
                                <div class="entry-body">
                                    {!!$value->short_description!!}
                                </div>
                                <a class="type1 dt-sc-button small" href="#">View Gallery<i class="fa fa-angle-right"></i></a>
                            </div>                   	
                        </article>
                        @else
                        <article class="blog-entry type2">
                            <div class="entry-details">
                                <div class="entry-title">
                                <h3><a href="#">{{$value->title}}</a></h3>
                                </div>
                                <div class="entry-body">
                                {!!$value->short_description!!}
                                </div>
                                <a class="type1 dt-sc-button small" href="#">View Gallery<i class="fa fa-angle-right"></i></a>
                            </div>                   	
							<div class="entry-thumb">
                                <ul class="blog-slider">
                                @foreach (json_decode($value->images) as $image)
                                    <li> <img src="{{ Voyager::image( $image )}}" alt="" title=""> </li>
                                    @endforeach</ul>
                            </div>                             
                        </article>
                        @endif
					</div>
                    @endforeach
                	
                </div><!-- **Full-width-section Ends Here** -->
                <div class="clear"></div>             
                
            	<div class="dt-sc-hr-invisible-small"></div>
                <div class="clear"></div>

                <div class="fullwidth-section"><!-- **Full-width-section Starts Here** -->
                    <div class="container">
                    
                        <div class="main-title animate" data-animation="pullDown" data-delay="100">
                            <h2 class="aligncenter"> About Me </h2>
                            <p> </p>
                        </div>
                        
                        <div class="about-section">
                        
                            <div class="dt-sc-one-half column first">
                                <img src="images/new.png" title="" alt="">
                            </div>
                            
                            <div class="dt-sc-one-half column">
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="200"> A Little Intro</h3>
                                <p>I am sculptor cum painter.I have done my Masters in fine art and specialized in painting from IKS University. I enjoy and find peace in listening to music,is an avid photographer and has a passion for travelling</p>
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="300"></h3>
                                <p>LakshyaJit actively participates in all workshops seminar related to his field. His painting on contemporary theme emullish the hall of the Himachal Art Heritage center, Himachal Pradesh contributed in the year 2007. He attended a four days International art camp at KALAVART NYAS, Ujjain(M.P.) He is teaching Drawing, painting and art & craft at Royal Global School Guwahati and Royal Global University from last 7 years.</p>
                                <h3 class="animate" data-animation="fadeInLeft" data-delay="400">Newsletter</h3>
                                <p></p>
                                <form method="post" class="mailchimp-form dt-sc-three-fourth" name="frmnewsletter" action="#">	
                                    <p class="input-text">
                                       <input class="input-field" type="email" name="mc_email" value="" required/>
                                       <label class="input-label">
                                                <i class="fa fa-envelope-o icon"></i>
                                                <span class="input-label-content">Mail</span>
                                            </label>
                                       <input type="submit" name="submit" class="submit" value="Subscribe" />
                                    </p>
                                </form>
                                <div id="ajax_subscribe_msg"></div>                               
                            </div>
                        </div>
                    </div>
				</div><!-- **Full-width-section Ends Here** -->
                
            	<div class="dt-sc-hr-invisible-small"></div>
                
            </section><!-- **Primary Ends Here** -->
            
            <footer id="footer" class="animate" data-animation="fadeIn" data-delay="100">
                <div class="container">
                    <div class="copyright">
                    
                        <ul class="footer-links">
                            <li><a href="#">Contact us</a></li>                   
                        </ul>
                        
                        <p>© 2019. All rights reserved.</p>
                        
                    </div>
                </div>
            </footer>
        </div><!-- Main Ends Here-->
        
	</div><!-- **inner-wrapper - End** -->
</div><!-- **Wrapper Ends** -->
	
<!-- **jQuery** -->  
<script>
function logoStyling()
{
    if(Number(document.getElementById("logoStyle").value) == 1)
    {
        document.getElementById("firstLogo").style.display = "none";
        document.getElementById("secondLogo").style.display = "block";
        document.getElementById("logoStyle").value = 2;
    }
    else
    {
        document.getElementById("firstLogo").style.display = "block";
        document.getElementById("secondLogo").style.display = "none";
        document.getElementById("logoStyle").value = 1;
    }
}
</script>
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <script src="js/jquery.inview.js" type="text/javascript"></script>
    <script src="js/jquery.viewport.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    
	<script src="js/jsplugins.js" type="text/javascript"></script>    
    
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>    
    
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>    
    
    <script src="js/jquery.tipTip.minified.js" type="text/javascript"></script>    
    
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    
	<script src="js/custom.js"></script>        
</body>
</html>
