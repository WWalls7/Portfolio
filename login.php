<?php
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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $pass1 = $_POST['password'];
  $sql = "SELECT * FROM USERS WHERE email = '$email' and password = '$pass1'";

  if ($result = $conn->query($sql)) {

    if($result->num_rows === 1){
      session_start();

       $_SESSION['EMAIL'] = $_POST['email'];
       $_SESSION['NAME'] = $row['password'];

      $conn->close();
      header('Location: addPost.html');
    }
    else{
      echo("<script language='javascript'>
            window.alert('Username/password incorrect');
            window.location.href='index.php';
            </script>"
        );
    }
  }
  else {
    echo "Query failed";
  }
}
else {
  echo "Query failed";
}

$conn->close();

?>
