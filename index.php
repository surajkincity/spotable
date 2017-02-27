<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SEO company in Pune | Spotable</title>
    <meta name="description" content="We have an experienced team which includes SEO specialists, full stack developers and even Google’s Ex-Employees.">
    <style type="text/css">



    </style>
    <?PHP include "assets/include/externalfiles.html" ; ?>
  </head>

  <body>

    <!-- Fixed navbar -->
<?PHP include "assets/include/nav.html" ; ?>

  <div id="headerwrap" >
    <div class="container">
      <div class="row">
        <br><br>




        <!-- /col-lg-6 -->
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <img class="img-responsive desktop" src="img/laptop.png" alt="laptop image" style='height:320px;'>
        </div>
        <div class="col-lg-1"></div>
        <div class='col-lg-5'>
<br>
          <h2 style="font-weight: 400;color:white;font-size:42px;">
            Get in touch with<br/>
            an <b>SEO</b> expert
          </h2>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  class="form-inline" action="" method="POST" enctype="multipart/form-data" >

<input type="hidden" name="action" value="Send">

<input type="text" class="form-control" id="exampleInputEmail1" name='website' placeholder="Website" style="    display: inline;margin-bottom: 10px;margin-top: 15px;"><br>
<input type="text" class="form-control" id="exampleInputEmail1" name='email' placeholder="Your Email" style="    display: inline;width:199px;margin-right: 5px;">

            <button type="submit" class="btn btn-warning btn-lg" > Send </button>



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



  <div class='col-md-12' id='about' style="background-color:white;">
    <div class="container usp"  style="text-align:center;padding-bottom:5%;">

<div class='row mt centered'><br>
<h1 style="text-align:center;font-weight: 400;"><span style='color: #00d674;font-weight:600;'>Spotable</span> is an SEO company located in Pune</h1>

<div class="col-md-12">
  <div class="col-md-8 col-md-offset-1">

<p  class="aboutustext" style="">Spotable is a digital marketing company specializing in SEO.  From small startups to establish companies, We are helping everyone to make the most out of their digital marketing campaigns. Our team includes some SEO specialists, full stack developers and even Google’s Ex-Employees. We want to provide quality SEO services at affordable prices to new budding startups. </p>
</div>
<div class="col-md-2" >
  <img src='img/shield.png' style="height: 230px;float:left;
    padding: 30px;padding-top:40px;">


</div>

</div>
</div>
<button class="btn btn-success" style="padding:15px;width:150px;font-size:20px;font-weight:600;background-color:#00d674;border-color:#00d674;">About us</button>

    </div>
  </div>

  <div class="pricing col-md-12">
    <div class='container'>
      <div class='row'>
        <div class="col-md-12">

      </div>

       </div>
     </div>
   </div>


<div class='col-md-12' id='howwework' style="padding: 5%;
    background-color: white;">
    <div class="container" >

<h2 style="text-align: center;font-size: 48px;font-weight: 400; "> How we <b>work</b> </h2>
<p style="text-align:center !important;">
  Our SEO services can be summarized into these 6 core steps

</p>



      <div class='row mt centered'>
        <div class='col-md-4 step'><br><br>
        <h4>Step 1</h4>

        </div>
        <div class='col-md-8 ' >
        <h3>Keyword research</h3>
        <p>It all starts with a keyword research, We analyse your website, competitors and google search data to finalize on the keyword which are most appropriate to target.</p>
       </div>
      </div>

       <div class='row mt centered'>
        <div class='col-md-4 ' ><br><br>
        <h4>Step 2</h4>

       </div>
        <div class='col-md-8 step'>
        <h3>Site Structure</h3>
        <p>Next we identify and assign the web pages which will be used to target these keywords. And construct a site  structure for your website.</p>
        </div>

      </div>

      <div class='row mt centered'>
        <div class='col-md-4 step'><br><br>
        <h4>Step 3</h4>

        </div>
        <div class='col-md-8 ' >
        <h3>On-Page</h3>
        <p>With the help of some of our internally developed AI softwares we make sure that all your pages are optimised as per Google’s latest algorithms. </p>
       </div>
      </div>

       <div class='row mt centered'>
        <div class='col-md-4 step'><br><br>
          <h4>Step 4</h4>
        </div>
        <div class='col-md-8 ' >
        <h3>Off-Page</h3>
        <p>With the help of our network we continuously develop good links and Ensure that you have the most relevant, high authority backlink profile from your relevant niche. </p>
        </div>
      </div>

      <div class='row mt centered'>
        <div class='col-md-4 step'><br><br>
        <h4>Step 5</h4>

        </div>
        <div class='col-md-8 ' >
        <h3>Site-Wide issues</h3>
        <p>We also take care of the proper Indexation and rendering of your desired pages. Optimize Local results and fix any manual or algorithmic penalty imposed by google</p>
       </div>
      </div>

        <div class='row mt centered'>
        <div class='col-md-4 ' ><br><br>
        <h4>Step 6</h4>

       </div>
        <div class='col-md-8 step'>
         <h3>Reporting</h3>
        <p>At the end of every month, we will send you a report on how your site is performing in terms of ranking in google as well as improvement in  traffic.</p>
        </div>

      </div>



    </div>
  </div>


























<?PHP include "assets/include/footmenu.html" ; ?>
