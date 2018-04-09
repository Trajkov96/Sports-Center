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
        	<h1>Додавање спорт</h1>

<form action="" method="post">

ИД :
<input type="text" name="id"><br>
</br>

Име на спорт:
<input type="text" name="ime"><br>
</br>

Оддел во кој се спортува : 
<select name="oddel">
  <option value="2">Пливачки базент</option>
  <option value="4">Теретана</option>
  <option value="3">Тениско игралиште</option>
  <option value="1">Спортска сала</option>
</select>


<input type="submit" name="insert" value="Внеси">
</form>



<?php 
	require_once('init.php');
    if(isset($_POST['insert'])){
     $message= "The insert function is called.";
	 //echo $message;
	$ime = $_POST['ime'];
	$id = $_POST['id'];
	$oddel = (int)$_POST['oddel'];
	

	$sql = "insert into sportovi (id_s,id_o,sportovi)
    values(".$id.",".$oddel.",'".$ime."');" ;
	db_write($sql);
    }
    ?>
			
			
        	
        </div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="http://www.bryantsmith.com"></a></h3></div>
      </div>
   </div>

   
   
</body>
</html>
