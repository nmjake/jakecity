#Security system
<?php
session_start();
$_SESSION['Phone']=$_POST['Phone'];
$conn=mysqli_connect('localhost','Jake','20060','demo');
if(isset($_POST['Phone'])){
   $phone=mysqli_real_escape_string($conn,$_POST['Phone']);
   $pass= mysqli_real_escape_string($conn,$_POST['Passcode']);
$sql="SELECT * FROM loginform where Phone='$phone'AND Pass='$pass'";
$result=mysqli_query($conn,$sql);
if(!$result){
echo'Connection error';
}
if(mysqli_num_rows($result)==1){
 header('location:home.php');
}else{
echo"Sorry, we have no account matching your inputs"."<br/>";
echo"Please try again or use your email address to log in into your account ";
exit();
}
}
?>
<!DOCTYPE html>
 <html> 
 <head>
	 <title>www.jakenet.com</title>
	 <meta charset="UTF-8"/> 
<link rel="stylesheet"type="text/css"href="form.css">
 </head>

 <body style= "font-size:26px;" >
<fieldset> <legend>
<h1> <em>JAKECITY</em></h1> </legend>
	 <p>	 
<div class ="form">
	 <h1>Login </h1>
	 <form method="POST">
	 <label for="Phone">Enter Phone No:</label><input type="tel"name='Phone' id='Phone' maxlength="10">
<p>
	<label for="Passcode"> Enter Passcode: </label>
	 <input type="password"name="Passcode" id="Passcode" minlength="5" maxlength="5"></td></tr>
	 <p>
	 <input type="submit" value="Log In"/>
<p>
Didnt get your account? <a href="code2.php"> Try using your email</a> 
</div> 
 </form>

<div class ="form_"> 
       <p>
       If you are new to Jakecity,then please create your own account.
       <p>
       Just tap the button below:<br>
    <a href="register.php"><input type="submit"value='Sign up'/></a>
 </div>
</div>

</body>
</html>
