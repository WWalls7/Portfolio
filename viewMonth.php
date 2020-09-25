<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blog Home</title>
  <link rel="stylesheet" href="reset.css" type="text/css"/>
  <link rel="stylesheet" href="portfolio.css" type="text/css"/>
</head>
<body>
  <header>
    <h1>Wendy's Blog</h1>
  </header>
  <div class="container">

    <div class="column1">
      <aside id="left">
        <div class="box">
          <h2>Navigation Links</h2>
          <nav>
            <ul>
              <li><a href="index.php#AboutMe">About Me</a></li>
              <li><a href="index.php#EducationAndQualifications">Education</a></li>
              <li><a href="index.php#Experience">Experience</a></li>
              <li><a href="index.php#Portfolio">Portfolio</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="column2">
        <?php
        session_start();
        $servername = "dbprojects.eecs.qmul.ac.uk";
        $username = "wtw30";
        $password = "vnuW8socbJ3qa"; //available at webprojects
        $dbname = "wtw30";
        // Creates connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Checks connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $selectOption = $_POST['months'];

        $sql = "SELECT * FROM BLOGPOSTS WHERE date like '%$selectOption%' ORDER BY ID DESC";

        if ($result = $conn->query($sql)) {

          if($result->num_rows === 0){
            echo "<div id='title'> No posts found for " . $selectOption . "</div>";
          }
          else {
            while($row = $result->fetch_assoc()) {
              echo ("<div id='title'> " . $row["title"].
              "<div id='dateTime'>" . $row["date"] ." ". $row["time"] . "</div>
              </div><div id='post'>" . $row["post"] . "</div>"  );
            }
          }
        }
        else {
          echo "Query failed";
        }


        $conn->close();

        ?>
      </div>
      <div class="column3">
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
        <form action="viewMonth.php" method="post">
          <legend>Sort by Month</legend>
          <select name="months">
            <option value="January" name="jan">January</option>
            <option value="February" name="feb">February</option>
            <option value="March" name="mar">March</option>
            <option value="April" name="apr">April</option>
            <option value="May" name="may">May</option>
            <option value="June" name="jun">June</option>
            <option value="July" name="jul">July</option>
            <option value="August" name="aug">August</option>
            <option value="September" name="sep">September</option>
            <option value="October" name="oct">October</option>
            <option value="November" name="nov">November</option>
            <option value="December" name="dec">December</option>
          </select>
          <input type="submit" id="submit" value="okay">
        </form>
      </div>
    </div>

  </div>
  <hr>
  <footer>
    <p>Made by: Wendy Walls</p>
    <p>Contact information: <a href="mailto:ec18320@qmul.ac.uk">ec18320@qmul.ac.uk</a></p>
  </footer>
</body>
</html>
