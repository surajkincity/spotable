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

    <title>SEO company in Pune | Spotable</title>
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


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div id="headerwrap" style="">
    <div class="container">
      <div class="row">
        <br><br>




        <!-- /col-lg-6 -->
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <img class="img-responsive desktop" src="img/laptop.png" alt="laptop image" style='padding:50px;'>
        </div>
        <div class="col-lg-1"></div>
        <div class='col-lg-5'>
<br><br>
          <h2 style="font-weight: 400;color:white;font-size:42px;">
            Get <b>SEO</b> proposal<br/>
          for your website.</h2>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  class="form-inline" action="" method="POST" enctype="multipart/form-data" >

<input type="hidden" name="action" value="Send">

<input type="text" class="form-control" id="exampleInputEmail1" name='website' placeholder="Website" style="    display: inline;margin-bottom: 10px;margin-top: 15px;"><br>
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
       else{         $handle = fopen('leads.html','a');
      fwrite($handle,  "<b>email:</b> ".$email." , "."<b>website:</b>".$website."  <br>");


 fclose($handle);


        echo "<p style='max-width:300px;color:white;'>Thanks, We will get back to you soon.</p>";
        }
    }
?>
</div><!-- /col-lg-6 -->
        <br>

        <br><br>
      </div><!-- /row -->

    </div><!-- /container -->
  </div><!-- /headerwrap -->



  <div class='col-md-12' id='about' style="background-color:#3498db;color:white;">
    <div class="container usp" style="padding-bottom: 40px;font-family: 'Roboto Condensed',sans-serif !important;">

<div class='row mt centered'><br>
<h1 style="text-align:center;font-weight:600;color:white;">Spotable is a SEO company located in Pune (India)</h1>
<p style="font-weight:400;font-size:18px;padding-right:13%;padding-left:13%;">Out motto is to help out small and medium companies in digital marketing, We optimize our their websites which enables them reach their target customers via search engines like Google.</p>
</div><hr style="border-top: dotted 2px;" />
      <div class='row mt centered'>
        <div class='col-md-6'>
          <img src='img/freelance.png' alt="freelancer logo"><br><br><br>

        </div>
        <div class='col-md-6 textblock'>
          <p>We have an experienced team which includes SEO specialists, full stack developers and even Google’s Ex-Employees.</p>

        </div>

      </div>
      <hr style="border-top: dotted 2px;" />
      <div class='row mt centered'>
        <div class='col-md-6 textblock'>
          <p>Along with traditional SEO techniques we also use artificial intelligence to outperform other companies in the industry.</p>

        </div>
        <div class='col-md-6'><br>
          <img src='img/computer.png' alt="AI computer"><br>

        </div>


      </div>
      <hr style="border-top: dotted 2px;" />
      <div class='row mt centered'>
        <div class='col-md-6' style="padding:2%;">

          <?php
          $action=$_REQUEST['action'];
          if ($action=="")    /* display the contact form */
              {
              ?>
              <form  class="form-inline" action="" method="POST" enctype="multipart/form-data" >

          <input type="hidden" name="action" value="Send">

          <input type="text" class="form-control" id="exampleInputEmail1" name='website' placeholder="Website" style="    display: inline;margin-bottom: 10px;margin-top: 15px;"><br>
          <input type="text" class="form-control" id="exampleInputEmail1" name='email' placeholder="Your Email" style="    display: inline;width:199px;margin-right: 5px;">

                      <button type="submit" class="btn btn-warning btn-lg" > Send! </button>



          </form><br><br>



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
                 else{         $handle = fopen('leads.html','a');
                fwrite($handle,  "<b>email:</b> ".$email." , "."<b>website:</b>".$website."  <br>");


           fclose($handle);


                  echo "<h2 style='max-width:300px;color:white;'>Thanks, We will get back to you soon.</h2>";
                  }
              }
          ?>

        </div>
        <div class='col-md-6 textblock' >

            <p>Feel free to contact us, One of our team members will send you a personalised SEO proposal along with quotation.</p>


        </div>

      </div>
    </div>
  </div>






<div class='col-md-12'  style="background-color: rgba(0, 0, 0, .5);">

  <div class="container" style="padding-top: 30px;padding-bottom: 50px;font-family: 'Roboto Condensed',sans-serif !important;">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3"><br><br>
        <h2 style="color: white;font-weight: 400;font-size:42px;">Our <b>Team</b></h2>
        <p style="color:white;font-weight:400;font-size:18px;">Our highly tallended team works out from our office in Pune, India. In order to make sure you get the best results, We are exploring Search engines and their algorithm everyday.</p>

      </div>
    </div><!-- /row -->

    <div class="row mt centered">
    <div class="col-lg-1">

      </div>
      <div class="col-lg-2 team">
        <img class="img-circle" src="img/surajjoshi.png" width="140" alt="surajjoshi from Pune"><br><br>
        <h4>Suraj Joshi </h4><p>
Sales & Marketing
        </p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-2 team">
        <img class="img-circle" src="img/mayankjaiswal.png" width="140" alt="Mayank Jaiswal from maharashtra"><br><br>
        <h4>Mayank Jaiswal  </h4><p>
Senior Developer</p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-2 team">
        <img class="img-circle" src="img/namanmehta.png" width="140" alt="Naman Mehta from Mumbai"><br><br>
        <h4>Naman Mehta</h4>
        <p>On-Page technician</p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-2 team">
        <img class="img-circle" src="img/sherrypatel.png" width="140" alt="Sherry Patel from Kothrude Pune"><br><br>
        <h4>Sherry Patel</h4>
        <p>Backlink Expert</p>
      </div><!--/col-lg-4 -->
      <div class="col-lg-2 team">
        <img class="img-circle" src="img/sachinbhat.png" width="140" alt="Sachin Bhat from koregaon park Pune"><br><br>
        <h4>Sachin Bhat </h4>
        <p>Content Optimizer</p>
      </div><!--/col-lg-4 -->

    </div>





  </div>




</div>


















<div class="col-lg-12" style='background-color: rgba(0, 0, 0, .7); '>
      <div class="container desktop">
        <div class="navbar-header">
                  <ul class="nav navbar-nav navbar-right">

            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>info@Spotable.in</a></li>
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400;'>+91 7276 888 089</a></li>
          </ul>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class='footerlink' href="#" style='color:white;font-weight: 400; '>©Spotable</a></li>
            <li><a class='footerlink' href="#about" style='color:white;font-weight: 400;'>About</a></li>


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
  </body>
</html>
