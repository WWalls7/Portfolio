<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="portfolio.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
  <header>
    <h1>Wendy's Portfolio</h1>
  </header>
  <div class="container">

    <div class="column1">
      <aside id="left">
        <div class="box">
          <h2>Navigation Links</h2>
          <nav>
            <ul>
              <li><a href="#AboutMe">About Me</a></li>
              <li><a href="#EducationAndQualifications">Education</a></li>
              <li><a href="#Experience">Experience</a></li>
              <li><a href="#Portfolio">Portfolio</a></li>
              <li><a href="viewBlog.php">View Blog</a></li>
            </ul>
          </nav>
        </div>
        <div class="boxskills">
          <h2>Skills and Achievements</h2>
          <ol>
            <li>Cooking</li>
            <li>Baking</li>
            <li>Rock Climbing</li>
          </ol>
        </div>
      </aside>
    </div>
    <div class="column2">
      <article id="AboutMe">
        <h2>About Me</h2>
        <div class="container1">
          <div class="column">
            <p>My name is Wendy and I study computer Science at Queen Mary University of London.
              I did not have a lot of proramming experience before coming to university.
              I know a lot more now than I did before I started.
            </p>
          </div>
          <div class="column">
            <figure>
              <img src="cat.jpg" alt="Wendy Walls" width="80%" height="auto">
              <figcaption>Wendy Walls</figcaption>
            </figure>
          </div>
        </div>
        <hr>
      </article>
      <section>
        <div id="EducationAndQualifications">
          <h2>Education and Qualifications</h2>
          <ul>
            <li><p><b>2018-Present</b> Queen Mary University of London </p></li>
            <li><p><b>2012-2016</b> K12 International Academy </p></li>
          </ul>
        </div>
        <div id="Experience">
          <h2>Experience</h2>
          <ul>
            <li>Raytheon Admin Assistant</li>
            <li>Raytheon Site Security Associate</li>
          </ul>
        </div>
        <div ="Portfolio">
          <h2>Portfolio</h2>
          <a href="portfolio.html">Click here to see my portfolio</a>
        </div>
      </section>
    </div>
    <div class="column3">
      <aside>
        <?php

        if(isset($_SESSION['EMAIL'])){
          echo ('    <div class="box1">
          <h2>Welcome</h2>
          <form action="logout.php" method="post">
          <input type="submit" id="logoutButton" value="Log Out">
          </form>
          </div>
          <div class="box1">
          <h2>Post to Blog</h2>
          <form action="addPost.html" method="get">
          <input type="submit" id="postButton" value="Add Post">
          </form>
          </div>    ');
        }
        else{
          echo(' <form id="Form" method="POST" action="login.php">
          <h2>Blog Login</h2>
          <input type="text" id="email" name="email" placeholder="Email" required><br>
          <input type="password" id="pas" name="password" placeholder="Password" required><br>
          <input type="submit" id="submit" value="Submit">
          </form>');
        }

        ?>
        <div class="box1">
          <h2>Contact details</h2>
          <div class="contact">
            <p>Email: <a href="mailto:ec18320@qmul.ac.uk">ec18320@qmul.ac.uk</a></p>
            <p>Phone number: 01234567890</p>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" class="fa fa-twitter"></a>
          </div>
        </div>
      </aside>
    </div>

  </div>
  <hr>
  <footer>
    <p>Made by: Wendy Walls</p>
    <p>Contact information: <a href="mailto:ec18320@qmul.ac.uk">ec18320@qmul.ac.uk</a></p>
  </footer>
</body>
</html>
