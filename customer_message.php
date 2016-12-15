<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kenetic Home</title>
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!--location map links-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6QaSxlBPM1rdgH6PXRj04z4vn7V1GE8E&sensor=false"></script>
<script src="js/officeLocationMap.js" type="text/javascript"></script>
<style type="text/css">
  .messages {
	  width:960px;
	  margin:0 auto;
	  background-color:rgba(191,196,190,0.3);
	  text-align:center;
	  padding-bottom:20px;
	  color:white;
  }
  em { 
	color:red;
  }
  
  body {
	background:url(images/bg8.png);
	
	
}
.container {
	margin-top:50px;
	padding:0;
  
}


 #headerSocial img {
	   margin-top:35px;
	   width:28px;
	   height:28px;
   }

  #logomain {
    background:url(images/bg6.jpg); 
	height:55px;
    margin-bottom:5px;
  }

  #headerSocial a {
	  padding-right:1px;
	  padding-right:2px;
	 
  }
   #headerSocial img  {
	   margin-top:25px;
   }
  nav.navbar {
	background: rgb(169,3,41); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(169,3,41,1) 27%, rgba(109,0,25,1) 71%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(27%,rgba(169,3,41,1)), color-stop(71%,rgba(109,0,25,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    border:none;
    border-radius:0;
  }
  #mainNav ul li a {
	  padding-left:20px;
	  padding-right:20px;
	  color:white;
	  
  }
  #mainNav ul li.active a {
	  color:black;
  }
  #mainNav ul li a:hover {
	  background-color:silver;
  }
  .dropdown-menu {
	  background:#afbfda;
  }
  .dropdown-menu li {
	  text-align:left;
	  padding:3px 0 3px 10px;;
	  background:#afbfda;
  }
  .dropdown-menu li:hover {
	  background-color:#EDEDED;
	  
  }
  #navbarCollapse ul {	 
	 margin-left:-30px;
 }

.footer {
	background: rgb(169,3,41); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(169,3,41,1) 27%, rgba(109,0,25,1) 71%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(27%,rgba(169,3,41,1)), color-stop(71%,rgba(109,0,25,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(169,3,41,1) 27%,rgba(109,0,25,1) 71%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
      padding:10px;
	  margin:0;
	
}
.footer h4, .footer h5  {
	color:white;
	
}
.footer ul li {
	list-style-type:none;
	color:white
}


#map-canvas {
		   height: 250px;
		   width:300px;
		   
	      
	 }

/*iphone 5s portrait and landscape*/
@media only screen and (min-device-width : 320px) and (max-device-width : 568px)  {
	#logomain {
		display:none;
	}
    .container {
		margin-top:0;
	}
	#myCarousel  {
		display:none;
	}

    .navbar-brand img {
	  	margin-left:-15px;
	    margin-top:-15px;
		display:block;
	}

}
@media only screen  and (min-width:501px) and (max-width:767px) {
   .navbar-brand  img {/*to undisplay the logo*/
	    margin-left:-15px;
	    margin-top:-15px;
		display:block;
    }
  	#logomain {
		display:none;
	}
    .container {
		margin-top:0;
	}
	#myCarousel  {
		display:none;
	}
  
	
}
/*ipad screen*/
@media only screen and (min-width:768px) and (max-width:1024px) {
  #sitelogo {
	   width:220px;
	   height:50px;
   }

  .item p img {
		width:480px;
		height:350px;
		margin:0 auto;
		border-radius:3px;
      }
  .navbar-brand  img {/*to undisplay the logo*/
	    display:none;
      }
   #logomain {
		height:50px;
		
	}
 #headerSocial img {
	   margin-top:15px;
	   width:28px;
	   height:28px;
   }
}
@media only screen and (min-width:1025px) {
	.item p img {
		width:650px;
		height:350px;
		margin:0 auto;
		border-radius:3px;
	}
	.navbar-brand  img {/*to undisplay the logo*/
	   display:none;
  }
  
}
</style>
</head>

<body>
<body>
<div class="container"> 
  <header id="logomain">
      <div class="row ">
           <div class="col-sm-10 col-md-10 col-lg-10" id="headerText">
                 <img src="images/headLogo.png" alt="kenetic logo" width="75" height="55" id="headlogo" />
                 <img src="images/kenetic_logo.png" alt="kenetic logo" width="150" height="55" id="sitelogo" />
           </div>
           <div class="col-sm-2 col-md-2 col-lg-2" id="headerSocial">           
                 <a href="" class="pull-right"><img src="images/facebookLogo.png"></a><a href="" class="pull-right"><img src="images/twitterLogo.png"></a><a href="" class="pull-right"><img src="images/linkinLogo.png"></a>       
          </div>
      </div><!--row-->
  </header><!--logomain-->
 
  <nav role="navigation" id="mainNav" class="navbar navbar-default ">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
     
          <div class="navbar-header"><!--for mobile menu-->               	        
              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>  
              <a href="#" class="navbar-brand"><img src="images/kenetic_logo.png" width="150" height="50"/></a>      
          </div><!--navbar-header-->
       
          <!-- Collection of nav links and other content for toggling -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                 <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                       <!--<li><a href="#">All Products</a></li>
                       <li class="divider"></li>-->
                       <li><a href="">Longboard name1</a></li>
                       <li><a href="">Longboard name2</a></li>
                       <li><a href="">Apparels</a></li>
                       <li><a href="">Keychains</a></li>
                     </ul><!--submenu-->
                  </li>
                  <li><a href="accessories.html">ACCESORIES</a></li>
                  <li><a href="contact-us.html">CONTACT US</a></li>
                  <li><a href="about-us.html">ABOUT US</a></li>
                  
              </ul><!--nav navbar-nav-->
          </div><!--navbarCollapse" class="collapse navbar-collapse-->
      </div><!--container-fluid-->
  </nav>




<div class = "messages"><br><br>
  
   <?php
          /*
            File:customer_message.php
            Author: Gil Sol
          */
           //Initiate variables
  
           $firstname = $_POST['firstName'];
           $email = $_POST['emailAddress'];
           $message = $_POST['textMessage'];
  
           $fullname = $firstname;
  
           $errorCounter = 0;
  
            //Writing to file
  
            $filename = 'data/'.'customers.txt';
            $fp = fopen($filename, 'a'); //open the files for appending
  
            $output_line = $firstname.'|'.$email.'|'.$message.'|'."\n";
            fwrite($fp, $output_line);
            fclose($fp);
            
          //form validation
  
       if (empty($firstname))
       {
          print "<em>Error:</em> You must enter a  Name<br>";
          $errorCounter++;
       }
  
       if (empty($email))
       {
          print "<em>Error:</em> You must enter your Email<br>";
          $errorCounter++;
       }	 
       if (empty($message))
       {
          print "<em>Error:</em> Please type your message<br>";
          $errorCounter++;
       }	 
       if ($errorCounter > 0 )
       {
                  print " <br/>Please fill up the form.";
                  //exit;
       }
  
       if ($errorCounter == 0)
       {
                   print "<h2>Thank You for contacting us! $fullname </h4>";
                  // print "$fullname";
                   print "<h4>We will contact you soon.</h4><br>";
  
      }
      
  ?>

</div>

 <div class="container"> 
    <div class="row footer">
        <div class="col-lg-4 col-sm-3 col-md-2" >          
           <ul> 
              <h4>Office:</h4>
              <li>2520 Jason Court</li>           
             <li> Oceanside, CA 92056</li>
            </ul>
            <ul>
              <h4>Contact us</h4>
             <li> Phone:760-945-4470, 760-945-8977</li>
             <li> Phone:800-375-7043</li>
             <li> Fax:760-945-9118</li>
              <li><a href="mailto:info@kcinc.com">email:info@kcinc.com</a></li>
           </ul>        
         </div>  
         
         <div class="col-lg-4 col-sm-2 col-md-2">
            <p><img src="images/paypal-payment3.jpg"  width="180" height="70" alt="payment image"/></p>
         </div> 
         
         <div class="col-lg-4 col-med-4 col-sm-4 pull-right" id="map-canvas"></div>             
         <div class="clearfix"></div>   
     <div class="row">
         <div class="col-lg-5 col-md-2 col-sm-1 col-xs-1"></div>
         <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10"><h5>&copy; 2014 Kinetix</h5></div>
         <div class="col-lg-5 col-md-2 col-sm-1 col-xs-1"></div>
     </div>
     </div><!--footer row-->
   </div><!--footer container-->
 </div><!--container-->    

</body>

</html>