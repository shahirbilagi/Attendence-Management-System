<?php
require_once "db-connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
$d= "select password from users";
$v = $conn->query($d);
 $flag=0; 
 foreach($v as $b)
  { 
    if($b['password'] == $_POST['password']) 
    { 
    $flag = 1; 
    break; 
} 
} 

if($flag == 1)
{ 
    header("Location:/php-attendance");
    echo '<script language="javascript">';
    echo 'alert("Login Successful")'; 
    echo '</script>';
} 
else
{ 
    echo '<script language="javascript">';
    echo 'alert("Please enter the correct Password and Username")'; 
    echo '</script>';
} 
} 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('https://img.freepik.com/free-vector/abstract-geometric-wireframe-background_52683-59421.jpg') no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            align-items: center;
            justify-content: center;
            text-align:center;
        }
        body h1{
          top:10%;
          align-items: center;
          text-align: center;
          justify-content: center;
          position: relative;
          font-family: "Anta", sans-serif;
  font-weight: 400;
  font-weight: bold;

        }
      .form {
        border: 2px solid rgb(0, 255, 229);
        background-color:rgba(154, 160, 160, 0.362);
        padding: 20px;
        border-radius: 15px;
        backdrop-filter: blur(50px);
        width: 100%;
        max-width: 250px;
        font-size:25px;

      }
      .form label{
        text-align: center;
      }
      .name1 {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid black;
        max-inline-size: 200px;
      }
      .name1 , 
      .password1 {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid black;
        max-inline-size: 200px;
        outline:none;
        font-size: 15px;
      }
      .login {
        max-inline-size: 50px;
        background-color: transparent;
        margin-left: 80px;
        cursor: pointer;
        border-radius:5px;
        border-color: rgb(88, 168, 168);
        font-size: 15px;
      }
      ::placeholder{
        color:rgb(22, 22, 22);
      }
    </style>
  </head>
  <body
  >
  <h1>ATTENDANCE MANAGEMENT SYSTEM</h1>
    <form
      class="form"
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
      method="post"
      style="
        display: flex;
        flex-direction: column;
        width: 20%;
        padding-inline: auto;
        margin: auto;
        margin-top: 15%;
      "
    >
      <label style="font-size: 1.5rem"><b>Login Page</b></label
      ><br />
      <input
        class="name1"
        type="text"
        name="username"
        placeholder="Username"
      /><br />
      <input
        class="password1"
        type="password"
        name="password"
        placeholder="Password"
      /><br />
      <button class="login" type="submit" name="submit">LogIn</button>
    </form>
  </body>
</html>