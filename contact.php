<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us | Spotable Pune</title>
    <meta name="description" content="Contact spotable for your SEO questions or if you need assistance in SEO for your website.">
    <style type="text/css">
    #mainmenu {background-color:#3498db;}
    #footerstrip{background-color: #3498db}

      .aboutp {    color: #95a5a6;
    font-weight: 400; font-size: 22px;}
      body{font-family: 'Roboto Condensed',sans-serif !important; background-image: url('img/background1-min.jpg');background-attachment: fixed;}
    </style>
    <?PHP include "assets/include/externalfiles.html" ; ?>
  </head>

  <body>

    <!-- Fixed navbar -->

<?PHP include "assets/include/nav.html" ; ?>

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
























<?PHP include "assets/include/footmenu.html" ; ?>
