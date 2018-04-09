<!DOCTYPE HTML>  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="images/style.css" />
</head>
<body>  

<?php
session_start();
$_SESSION["loggedin"]=false;
// define variables and set to empty values

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="container">
		<div id="mainpic">
        	<h1>Спортски<span class="lightblue">Центар</span></h1>
            <h2>Дојдете,спортувајте</h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Почетна</a></li>
            	<li class="menuitem"><a href="oddeli.php">Оддели</a></li>
                <li class="menuitem"><a href="sportovi.php">Спортови</a></li>
                <li class="menuitem"><a href="kalendar.php">Календар</a></li>
				<li class="menuitem"><a href="contact.php">Контакт</a></li>
			  <li class="menuitem"><a href="login.php">Најави се</a></li>
            </ul>
        </div>
		
		<br><br><br>
<div class="login">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="text" name="username" placeholder="Username" id="username" >
  <input type="password" name="password" placeholder="Password" id="password" >
  <input type="submit" name="submit" value="Sign In">  
</form>
</div>
<div class="shadow"></div>
<br><br>
<?php
require_once('init.php');
 if(isset($_POST['submit'])){
$sql = "select * from vraboteni where
 username = '".$username."' and password = '".$password."'";
$rezultat = db_get($sql);
	if($rezultat) {
		$_SESSION["loggedin"]=10;
		header('Location:http://localhost/new/fillForm');
	}
	else {
		
	}
 }
?>

</body>
</html>