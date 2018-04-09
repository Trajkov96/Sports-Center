<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title></title>

   <?php
   	 session_start();
	 
	 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 10) {
     echo "Welcome to the admin's area,";
}
 else {
	header('Location:http://localhost/new/login.php');
}
	 
	 
   if(isset($_POST['logout'])){
     $message= "The insert function is called.";
	 echo $message;
	 $_SESSION['loggedin'] == 1;
	header('Location:http://localhost/new/login.php');

	  }
    ?>

</head>

<body>
<div id="container">
		<div id="header">
        	<h1>Admin<span class="off">Panel</span></h1>
			
			 <form action="" method="post">
			 <h2>
			<input  class = "menuitem" type="submit" name="logout" value="Log out">
			</h2>
			 </form>
			 
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Почетна</a></li>
                <li class="menuitem"><a href="oddeli.php">Оддели</a></li>
                <li class="menuitem"><a href="sportovi.php">Спортови</a></li>
                <li class="menuitem"><a href="kalendar.php">Календар</a></li>
                <li class="menuitem"><a href="contact.php">Контакт</a></li>
            </ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
              
                        
                <ul>
                    <li><a href="AddSport.php">Додади спорт</a></li>
                    <li><a href="AddUser.php">Додади корисник</a></li>
                    <li><a href="AddEmployee.php">Додади вработен</a></li>
                    <li><a href="AddTermin.php">Додади термин</a></li>
                    <li><a href="AddOddel.php">Додади оддел</a></li>
                    <li><a href="AddTrener.php">Додади тренер</a></li>
                    <li><a href="DeleteSport.php">Избриши спорт</a></li>
                    <li><a href="DeleteUser.php">Избриши корисник</a></li>
                    <li><a href="DeleteEmployee.php">Избриши вработен</a></li>
					<li><a href="DeleteTermin.php">Избриши термин</a></li>
					<li><a href="DeleteOddel.php">Избриши оддел</a></li>
					<li><a href="DeleteTrener.php">Избриши тренер</a></li>
                </ul>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
        	
<h1>Додавање вработен</h1>

<form action="" method="post">
ID :
<input type="text" name="id"><br>
</br>
Име:
<input type="text" name="ime"><br>
</br>
Презиме :
<input type="text" name="prezime"><br>
</br>
Адреса :
<input type="text" name="adresa"><br>
</br>
EMBG :
<input type="text" name="embg"><br>
</br>
Плата :
<input type="text" name="plata"><br>
</br>
username :
<input type="text" name="username"><br>
</br>
password :
<input type="text" name="password"><br>
</br>


<input type="submit" name="insert" value="Внеси">
</form>
<br>


<?php 
	require_once('init.php');
    if(isset($_POST['insert'])){
     $message= "The insert function is called.";
	$id = $_POST['id'];
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$adresa = $_POST['adresa'];
	$embg = $_POST['embg'];
	$plata = $_POST['plata'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "insert into vraboteni (id_v,ime,prezime,adresa,embg,plata,username,password)
    values(".$id.",'".$ime."','".$prezime."','".$adresa."','".$embg."',".$plata.",'".$username."','".$password."');" ;
	db_write($sql);
    }
    ?>
	
			
			
			
			
			
   </div>

   
   
</body>
</html>
