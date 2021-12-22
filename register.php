<?php 
$invalid='';
//session_destroy();
session_status() === PHP_SESSION_ACTIVE ?: session_start();

$conn= mysqli_connect("localhost","customerdb","Password123");
$db=mysqli_select_db($conn,"customers");
if(isset($_POST['submit'])){
    session_destroy();
    session_start();

    $email=$_POST['email'];
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];

   // if any thing empty
   if(empty($_POST['email'])|| empty($_POST['pass']) || empty($_POST['f_name']) || empty($_POST['l_name']) 
   || empty($_POST['pass2'])){
    $invalid = "All Fields Are Reqired";
  }
    else if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else if($pass != $pass2){
        $invalid="Passwords do not match";
        
    }
    
    else {
     $SELECT = "SELECT email From customer Where email = ? Limit 1";
     $query = "INSERT INTO customer(f_name, l_name, email, passwo) VALUES (?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
    }
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ssss", $f_name,$l_name,$email,$pass);
      $stmt->execute();
     }
   /* else if($pass == $pass2){
        //create user 
        //$pass = md5($pass); //hash password for security purposes
        
        mysqli_query($db,$query);
        }*/
   
    else{
        $_SESSION['message']= "The two passwords do not match";
        $stmt->close();
        $db->close();
    }
    $_SESSION['message']= "You've Register Successfully!";
    $_SESSION['f_name']= $f_name;
    $_SESSION['email']='';
    header("location: login-access.php");
}

?>