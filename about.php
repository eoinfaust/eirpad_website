<?php
session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>airpad | About</title>
    <link rel="stylesheet" href="airpad.css?version=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <div class="head">
      <div class="clearfix">
        <img class="img3" src="airpad.png" alt="airpad" height="60">
        <div class="dropdown" style="float:right;">
          <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <?php  if (isset($_SESSION['username'])) : ?>
						  <a class="small" style="text-decoration: none; color:darkgrey;" ><?=$_SESSION['username']?></a>
              <a class="small linkbad" href="index.php?logout='1'" style="text-decoration: none;" >logout</a>
              <a class="small link" href="index.php" style="text-decoration: none;" >dashboard</a>
              <?php endif ?>
              <?php  if (!isset($_SESSION['username'])) : ?>
              <a class="small link" href="signin.php" style="text-decoration: none;" >sign in</a>
              <a class="small link" href="register.php" style="text-decoration: none;" >register</a>
              <?php endif ?>
              <a class="small link" href="about.php" style="text-decoration: none;" >about</a>
              <a class="small link" href="support.php" style="text-decoration: none;" >support</a>
            </div>
        </div>
      </div>
    </div>
    <div class="about" style="padding-bottom: 50px";>
      <div class="clearfix">
        <p class=ex1><img class="img1" src="https://via.placeholder.com/400" alt="airpad" width="400" height="400">
          <br><br>The airpad is a privacy-oriented home monitoring device,<br> for short-term rental hosts and property managers.</p>
          <p class="ex1">The airpad's plug-and-play design contains temperature, humidity,<br> and noise sensors, for your peace of mind.</p>
          <p class="ex1">Its privacy-oriented design records noise levels,<br> with no intrusive microphones to pick up conversations.</p>
      </div>
    </div>
    <div class="about" style="padding-bottom: 50px";>
      <div class="clearfix">
        <p class="ex2"><img class="img2" src="https://via.placeholder.com/400" alt="airpad" width="400" height="400">
          <br><br>Register with our web app for real time updates through the cloud,<br> and view 7 days of data for all of your registered airpad devices.</p>
          <p class="ex2">Receive notifications at high humiditiy levels, upon tampering,<br>or when sustained noise levels exceed a desired threshold.</p>
          <p class="ex2">A comprehensive solution for noise and environmental monitoring,<br>and antisocial behaviour prevention, for privacy-conscious hosts.</p>
      </div>
    </div>
      <div class="about">
        <p class = "footer" align="center" >
        <a>Available for purchase online.&ensp;</a>
        <a class="link" href="https://www.amazon.com/" style="text-decoration: none;" >Buy <i class="fa fa-chevron-right" style="font-size:20px"></i></a>
        <br><br><a>Have a question or problem we can help you with?&ensp;</a>
        <a class="link" href="support.php" style="text-decoration: none";>Get in touch <i class="fa fa-chevron-right" style="font-size:20px"></i></a></p>
        <p class = "footer" align="center" >
          <?php  if (isset($_SESSION['username'])) : ?>
          <a class="small linkbad" href="index.php?logout='1'" style="text-decoration: none;" >logout&ensp;</a>
          <a class="small link" href="index.php" style="text-decoration: none;" >dashboard&ensp;</a>
          <?php endif ?>
          <?php  if (!isset($_SESSION['username'])) : ?>
          <a class="small link" href="signin.php" style="text-decoration: none;" >sign in</a>
          <a>&nbsp;|&nbsp;</a>
          <a class="small link" href="register.php" style="text-decoration: none;" >register&ensp;</a>
          <?php endif ?>
          <a class="small link" href="support.php" style="text-decoration: none;" >support</a>
          <a class="small" >&ensp;&ensp;&copy; 2020 airpad</a></p>
      </div>
    </div>
  </body>
</html>