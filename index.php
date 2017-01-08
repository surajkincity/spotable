<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Spotable</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700,400,300' rel='stylesheet' type='text/css'>

    
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      h2{color: #3498db;}
      .aboutp {    color: #95a5a6;
    font-weight: 400; font-size: 22px;}
      body{font-family: 'Roboto Condensed',sans-serif !important; background-image: url('img/background1.jpg');background-attachment: fixed;}
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style='font-size: 32px;padding-top: 20px;'><b>Spotable</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a style="font-weight: 400;
          " href="#about">About</a></li>

            <li><a href="#contact" style="font-weight: 400;
          ">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap" style="min-height: 800px;">
		<div class="container">
			<div class="row">
        <div class="col-lg-1"></div>
				<div class='col-lg-5'>
					<h1 style="font-weight: 400;
          ">Get Free <b>SEO</b> audit<br/>
					of your website.</h1>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  class="form-inline" action="" method="POST" enctype="multipart/form-data" >

<input type="hidden" name="action" value="Send">

<input type="text" class="form-control" id="exampleInputEmail1" name='website' placeholder="Website" style="    display: inline;margin-bottom: 10px;margin-top: 15px;">
<input type="text" class="form-control" id="exampleInputEmail1" name='email' placeholder="Your Email" style="    display: inline;width:199px;margin-right: 5px;">
            
            <button type="submit" class="btn btn-warning btn-lg" > Send! </button>



</form>



    <?php
    } 
else                /* send the submitted data */
    {
    $website=$_REQUEST['website'];
    $email=$_REQUEST['email'];

    if (($website=="")||($email==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $email<$email>\r\nReturn-path: $email";
        $website="Message sent using your contact form";
        mail("surajkincity@gmail.com", $email, $website, $from);
        echo "<h2 style='max-width:300px;color:white;'>Thanks, We will get back to you soon.</h2>";
        }
    }  
?>
</div>

<!--
				<div class="col-lg-5">
					<h1>Get Free SEO audit<br/>
					of your website.</h1>
					<form class="form-inline" role="form">
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Website">
					  </div>
					  <button type="submit" class="btn btn-warning btn-lg">Next!</button>
					</form>					
				</div>
-->

				<!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="img/landing.png" alt="" style='padding:50px;'>
				</div><!-- /col-lg-6 -->
				<br><br><br>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	

	

	

	

	
<div class='col-md-12' id='about' style="background-color: rgba(0, 0, 0, .5);">

	<div class="container" style="padding-top: 70px;padding-bottom: 70px;font-family: 'Roboto Condensed',sans-serif !important;">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3"><br><br>
				<h1 style="color: white;font-weight: 400;">About <b>Spotable</b></h1>
				<h3 style="color:white;">Spotable is a team of passionate engineers who are obsessed with search engines and their algorithms.</h3><br>
			</div>
		</div><!-- /row -->
		
		<div class="row mt centered">
		<div class="col-lg-1">

			</div>
			<div class="col-lg-2 team">
				<img class="img-circle" src="img/av1.png" width="140" alt=""><br><br>
				<h4>Suraj Joshi </h4><p>
Sales & Marketing
				</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-2 team">
				<img class="img-circle" src="img/av2.png" width="140" alt=""><br><br>
				<h4>Mayank Jaiswal  </h4><p>
Senior Developer</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-2 team">
				<img class="img-circle" src="img/av3.png" width="140" alt=""><br><br>
				<h4>Naman Mehta</h4>
				<p>On-Page technician</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-2 team">
				<img class="img-circle" src="img/av4.png" width="140" alt=""><br><br>
				<h4>Sherry Patel</h4>
				<p>Backlink Expert</p>
			</div><!--/col-lg-4 -->
			<div class="col-lg-2 team">
				<img class="img-circle" src="img/av5.png" width="140" alt=""><br><br>
				<h4>Sachin Bhat </h4>
				<p>Content Optimizer</p>
			</div><!--/col-lg-4 -->
			<br><br>
		</div>
		


		<!-- /row -->

	</div><!-- /container -->
	<!--

	<div class="container" style="padding-top: 10px;padding-bottom: 10px;font-family: 'Roboto Condensed',sans-serif !important;">

		
		<div class="row mt centered">
		<div class="col-lg-1">

			</div>
			<div class="col-lg-10 team" style="margin-left: 26px;    padding-top: 40px;
    padding-bottom: 20px;">
			<div class='col-md-4'>
			<h2> Why SEO </h2>

			</div>
			<div class='col-md-7'>
			<p class='aboutp'>Almost every sale today starts with a Google search thus it is really important for you to make your website appear high on Google search in order to reach target customers.
			</p>
			</div>



			</div>


			
		</div>

		<div class="row mt centered">
		<div class="col-lg-1">

			</div>
			<div class="col-lg-10 team" style="margin-left: 26px;    padding-top: 40px;
    padding-bottom: 20px;">
			<div class='col-md-4'>
			<h2> How can we help </h2>

			</div>
			<div class='col-md-7'>
			<p class='aboutp'>
			We understand search engine s and how they work, We have an experienced team who are passionate towards improving search ranking of our client’s websites.
			</p>
			</div>

			</div>


			
		</div>

		<div class="row mt centered">
		<div class="col-lg-1">

			</div>
			<div class="col-lg-10 team" style="margin-left: 26px;    padding-top: 40px;
    padding-bottom: 20px;">
			<div class='col-md-4'>
			<h2> How it works </h2>

			</div>
			<div class='col-md-7'>
			<p class='aboutp'> 
			Feel free to contact us and one of our team member will be happy to understand your requirements and send you a proposal about the SEO plan along with quotation.
			</p>
			</div>

			</div>


			
		</div>
		


		

	</div>
	<br><br>
	-->
</div>

<div class='col-md-12' id='about' style="border-bottom: 1px solid #f2f2f2;border-top: 1px solid #f2f2f2;">



	
</div>

<!--


	<div class="col-lg-12" style='background-color: white;'>
      <div class="container">
       


<div class="row" style="padding-top: 70px;padding-bottom: 70px;">

<h2 style='text-align: center;color:#3498db;font-weight: 400;'>Our Recent <b>Blogs</b></h2><br>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail"    style="    background-color: #fcfcfc;box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.25) !important;" >
      <img src="assets/img/blog1.png" style='height:200px;width: 100%;' alt="...">
      <div class="caption">
        <h3>This is the title of our blog, Sample title of blog.</h3>
        <p><a href="#" class="btn btn-primary" role="button" style="background-color: #f0ad4e;border-color: #f2f2f2;">Read More</a> </p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail"    style="    background-color: #fcfcfc;box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.25) !important;" >
      <img src="assets/img/blog2.png" alt="..." style='height:200px;width: 100%;'>
      <div class="caption">
        <h3>This is the title of our blog, Sample title of blog.</h3>
        <p><a href="#" class="btn btn-primary" role="button" style="background-color: #f0ad4e;border-color: #f2f2f2;">Read More</a> </p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail"    style="    background-color: #fcfcfc;box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.25) !important;" >
      <img src="assets/img/blog3.png" alt="..." style='height:200px;width: 100%;'>
      <div class="caption">
        <h3>This is the title of our blog, Sample title of blog.</h3>
        <p><a href="#" class="btn btn-primary" role="button" style="background-color: #f0ad4e;border-color: #f2f2f2;">Read More</a> </p>
      </div>
    </div>
  </div>
<br>
<p style='text-align: right;font-weight: 400;'><a href='/blogs.html'> Read More Blogs </a></p>
</div>






      </div>

</div>

-->

<div id='contact' class='col-md-12' style="background-color:rgba(255, 255, 255, 0.90);padding:80px;font-family: 'Roboto Condensed',sans-serif !important;border-bottom: 1px solid #f2f2f2;border-top: 1px solid #f2f2f2;" ><br><br>
<h2 style="text-align: center;color:#3498db;font-weight: 600;"  id='contact'>Contact <b>Us</b></h2><br>
 <h3 style="text-align: center;color:#3498db;">Lane 6 - The Mesh , Koregaon Park , Pune - 411001</h3><br><br>
<div class='col-md-2'></div>
<div class='col-md-4' style="margin-right: 20px;">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8714965400527!2d73.89619751489296!3d18.53470828740073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c10799b159eb%3A0x7563c4adb7ccfc2d!2sSpotable%2C+C-4%2C+Lane+Number+6%2C+Meera+Nagar%2C+Koregaon+Park%2C+Pune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1475583588220" scrolling="no" style='    border: 1px solid #cccccc;width:100%;height:225px;border-radius: 2px;box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.25) !important;' frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe><br><br>
   

</div>
<div class='col-md-4'>
<?php
$action1=$_REQUEST['action1'];
if ($action1=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data" style="margin-top: -20;">

<input type="hidden" name="action1" value="Send">


<textarea type="text" class="form-control" id="exampleInputEmail1" name='message' placeholder="Your Message" style=" display: inline;width: 97%;height: 155px;" ></textarea><br><br>
<input type="text" class="form-control" id="exampleInputEmail1" name='email' placeholder="Your Email" style="    display: inline;width: 75%;">
            
            <button type="submit" class="btn btn-warning btn-lg" style="width: 22%;">Send</button>



</form>



    <?php
    } 
else                /* send the submitted data */
    {
    $message=$_REQUEST['message'];
    $email=$_REQUEST['email'];


    if (($message=="")||($email==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $email<$email>\r\nReturn-path: $email";
        $message="Message sent using your contact form";
        mail("surajkincity@gmail.com", $email, $message, $from);
        echo "<h2 style='max-width:300px;'>Thanks, We will get back to you soon.</h2>";
        
        }

    } 
?>
<br><br>
</div>

</div>












<div class="col-lg-12" style='background-color: #3498db; '>
      <div class="container">
        <div class="navbar-header">
                  <ul class="nav navbar-nav navbar-right">
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400; background-color:#3498db !important;'>©Spotable</a></li>
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>info@Spotable.in</a></li>
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>+91 7276 888 089</a></li>
          </ul>
                 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class='footerlink' href="#about" style='color:white;font-weight: 400;'>About</a></li>

            <li><a class='footerlink' href="#contact" style='color:white;font-weight: 400;'>Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
