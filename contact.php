<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="L1fLUIYzXPE9F327Jjom-0ElZYgxFBdGfeMBSmyXXyo" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Contact Us | Spotable Pune</title>
    <meta name="description" content="We have an experienced team which includes SEO specialists, full stack developers and even Google’s Ex-Employees.">

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

      .aboutp {    color: #95a5a6;
    font-weight: 400; font-size: 22px;}
      body{font-family: 'Roboto Condensed',sans-serif !important; background-image: url('img/background1-min.jpg');background-attachment: fixed;}
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" style="background-color:#3498db;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" style='font-size: 32px;padding-top: 20px;'><b>Spotable</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a style="font-weight: 400;" href="about-spotable.php">About</a></li>
            <li><a style="font-weight: 400;" href="contact.php">Contact</a></li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div id="contactpage" style="background-color:white;">
    <div class="container">
      <div class="row">

<h1>Contact <b>Spotable</b></h1>

<br><p style="text-align:center;">Send across your query, We are happy to assist you in the best way possible.</p><br>


<div class="col-lg-12" id=''>
<br>
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



</form><br>



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
    else{         $handle = fopen('leads.html','a');
      fwrite($handle,  "<b>email:</b> ".$email." , "." <b>Message:</b>".$message."  <br>");


 fclose($handle);
        echo "<h2 style='max-width:300px;'>Thanks, We will get back to you soon.</h2>";

        }

    }
?>

<!-- <h3 style="text-align: center;color:white;">Spotable, Lane 6 - The Mesh , Koregaon Park , Pune - 411001</h3><br><br> -->
</div>
<div class='col-md-2'></div>

    </div>


</div></div>


  </div>























<div class="col-lg-12" style='background-color: #3498db '>
      <div class="container desktop">
        <div class="navbar-header">
                  <ul class="nav navbar-nav navbar-right">
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400; '>©Spotable</a></li>
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>info@Spotable.in</a></li>
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>+91 7276 888 089</a></li>
          </ul>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li><a class='footerlink' href="contact.php" style='color:white;font-weight: 400;'>Contact</a></li>
            <li><a class='footerlink' href="about-spotable.php" style='color:white;font-weight: 400;'>About</a></li>


          </ul>
        </div>
      </div>
      <div class="container mobile footermobile">
        <div>
          <p>
info@Spotable.in  &nbsp;&nbsp;&nbsp;  +91 7276-888-089
</p>
        </div>


      </div>


</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85089212-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
