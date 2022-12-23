<?php 
include 'parts/_header.php';
?>
<main>
    <h2>Login</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="username">Username: </label>
        <input id="username" type="text" name="username">
        <br/>
        <label for="pass">Password: </label>
        <input id="pass" type="password" name="pass">
        <br/>
        <input type="submit" name="Login" value="Login">
    </form>
</main>
<aside>
    <h2>Company</h2>
    <p>
        Our company have many companies & many students from all around of palestine
    </p>
</aside>
<?php include "parts/_footer.php"?>
<?php
include 'parts/_dp.php';
session_start();
if(isset($_POST["Login"])){
  if($_POST["username"]==""||$_POST["pass"]==""){
    header("Location:index.php?error=empty_felids_username_or_password");
  }else{
    $username=$_POST["username"];
    $password=sha1($_POST["pass"]);
    $stmt=$conn->prepare("SELECT * FROM user WHERE username='$username' AND passwd='$password'");
    $stmt->execute(array($username,$password));
    $row=$stmt->fetch();
    $count =$stmt->rowCount();
    if($count>0){
      $_SESSION["username"]=$username;
      $_SESSION["password"]=$password;
      header("location: student.php");
    }
    else{
      echo "Invalid name or password";
    }
  }
}
?>