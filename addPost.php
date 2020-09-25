 <?php

 $servername = "dbprojects.eecs.qmul.ac.uk";
 $username = "wtw30";
 $password = "vnuW8socbJ3qa"; //available at webprojects
 $dbname = "wtw30";

 session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Checks connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $title = $_POST['title'];
   $post = $_POST['message'];
   $date = date("j F, Y");
   $time = date("g:i a");
   $sql = "INSERT INTO BLOGPOSTS (title, post, date, time) VALUES ('$title', '$post', '$date', '$time')";

   if ($conn->query($sql) === TRUE) {
        header('Location: viewBlog.php');

   }
   else {
     echo "Query failed";
   }
  }
 else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();

 ?>
